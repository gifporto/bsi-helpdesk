<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Profiler extends CI_Profiler {

	protected function _compile_session_data()
	{
		if ( ! isset($this->CI->session))
		{
			return;
		}

		$output = '<fieldset id="ci_profiler_session_data" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">';
		$output .= '<legend style="color:#000;">&nbsp;&nbsp;'.$this->CI->lang->line('profiler_session_data').'&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById(\'ci_profiler_session_data\').style;s.display=s.display==\'none\'?\'\':\'none\';this.innerHTML=this.innerHTML==\''.$this->CI->lang->line('profiler_section_show').'\'?\''.$this->CI->lang->line('profiler_section_hide').'\':\''.$this->CI->lang->line('profiler_section_show').'\';">'.$this->CI->lang->line('profiler_section_show').'</span>)</legend>';
		$output .= "<div style='max-height:400px; overflow:auto;'><table style='width:100%;' id='ci_profiler_session_data'>";

		foreach ($this->CI->session->all_userdata() as $key => $val)
		{
			if (is_array($val))
			{
				$val = print_r($val, TRUE);
			}

			$output .= "<tr><td style='padding:5px; vertical-align: top;color:#900;background-color:#ddd;'>".$key."&nbsp;&nbsp;</td><td style='padding:5px; color:#000;background-color:#ddd;'>".htmlspecialchars($val)."</td></tr>\n";
		}

		$output .= '</table></div>';
		$output .= "</fieldset>";
		return $output;
	}

	protected function _compile_queries()
	{
		$dbs = array();

		// Let's determine which databases are currently connected to
		foreach (get_object_vars($this->CI) as $CI_object)
		{
			if (is_object($CI_object) && is_subclass_of(get_class($CI_object), 'CI_DB') )
			{
				$dbs[] = $CI_object;
			}
		}

		if (count($dbs) == 0)
		{
			$output  = "\n\n";
			$output .= '<fieldset id="ci_profiler_queries" style="border:1px solid #0000FF;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">';
			$output .= "\n";
			$output .= '<legend style="color:#0000FF;">&nbsp;&nbsp;'.$this->CI->lang->line('profiler_queries').'&nbsp;&nbsp;</legend>';
			$output .= "\n";
			$output .= "\n\n<table style='border:none; width:100%;'>\n";
			$output .="<tr><td style='width:100%;color:#0000FF;font-weight:normal;background-color:#eee;padding:5px'>".$this->CI->lang->line('profiler_no_db')."</td></tr>\n";
			$output .= "</table>\n";
			$output .= "</fieldset>";

			return $output;
		}

		// Load the text helper so we can highlight the SQL
		$this->CI->load->helper('text');

		// Key words we want bolded
		$highlight = array('SELECT', 'DISTINCT', 'FROM', 'WHERE', 'AND', 'LEFT&nbsp;JOIN', 'ORDER&nbsp;BY', 'GROUP&nbsp;BY', 'LIMIT', 'INSERT', 'INTO', 'VALUES', 'UPDATE', 'LEFT JOIN', 'RIGHT JOIN', 'JOIN', 'OR&nbsp;', 'HAVING', 'OFFSET', 'NOT&nbsp;IN', 'IN', 'LIKE', 'NOT&nbsp;LIKE', 'COUNT', 'MAX', 'MIN', 'ON', 'AS', 'AVG', 'SUM', '(', ')');
		$break = array('FROM', 'WHERE', 'GROUP', 'LIMIT', 'LEFT JOIN', 'RIGHT JOIN');
		
		$output  = "\n\n";

		$count = 0;

		foreach ($dbs as $db)
		{
			$count++;

			$hide_queries = (count($db->queries) > $this->_query_toggle_count) ? ' display:none' : '';

			$show_hide_js = '(<span style="cursor: pointer;" onclick="var s=document.getElementById(\'ci_profiler_queries_db_'.$count.'\').style;s.display=s.display==\'none\'?\'\':\'none\';this.innerHTML=this.innerHTML==\''.$this->CI->lang->line('profiler_section_hide').'\'?\''.$this->CI->lang->line('profiler_section_show').'\':\''.$this->CI->lang->line('profiler_section_hide').'\';">'.$this->CI->lang->line('profiler_section_hide').'</span>)';

			if ($hide_queries != '')
			{
				$show_hide_js = '(<span style="cursor: pointer;" onclick="var s=document.getElementById(\'ci_profiler_queries_db_'.$count.'\').style;s.display=s.display==\'none\'?\'\':\'none\';this.innerHTML=this.innerHTML==\''.$this->CI->lang->line('profiler_section_show').'\'?\''.$this->CI->lang->line('profiler_section_hide').'\':\''.$this->CI->lang->line('profiler_section_show').'\';">'.$this->CI->lang->line('profiler_section_show').'</span>)';
			}

			$output .= '<fieldset id="ci_profiler_queries" style="border:1px solid #0000FF;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee">';
			$output .= "\n";
			$output .= '<legend style="color:#0000FF;">&nbsp;&nbsp;'.$this->CI->lang->line('profiler_database').':&nbsp; '.$db->database.'&nbsp;&nbsp;&nbsp;'.$this->CI->lang->line('profiler_queries').': '.count($db->queries).'&nbsp;&nbsp;'.$show_hide_js.'</legend>';
			$output .= "\n";
			$output .= "\n\n<div style='max-height:400px; overflow:auto;'><table style='width:100%;{$hide_queries}' id='ci_profiler_queries_db_{$count}'>\n";

			if (count($db->queries) == 0)
			{
				$output .= "<tr><td style='width:100%;color:#0000FF;font-weight:normal;background-color:#eee;padding:5px;'>".$this->CI->lang->line('profiler_no_queries')."</td></tr>\n";
			}
			else
			{
				foreach ($db->queries as $key => $val)
				{
					$time = number_format($db->query_times[$key], 4);

					//$val = highlight_code($val, ENT_QUOTES);

					foreach ($highlight as $bold)
					{
						if(in_array($bold, $break)) {
							$val = str_replace($bold, '<br><strong>'.$bold.'</strong>', $val);
						}
						$val = str_replace($bold, '<strong>'.$bold.'</strong>', $val);
					}

					//foreach ($break as $space) { $val = str_replace($space, '<strong>'.$bold.'</strong>', $val); }

					$output .= "<tr><td style='padding:5px; vertical-align: top;width:1%;color:#900;font-weight:normal;background-color:#ddd;'>".$time."&nbsp;&nbsp;</td><td style='padding:5px; font-weight:normal;background-color:#ddd;'>".$val."</td></tr>\n";
				}
			}

			$output .= "</table></div>\n";
			$output .= "</fieldset>";

		}

		$result = array( 'output' => $output, 'query' => $db->queries );

		return $result;
	}


	function _menu_profiler()
	{
		$output = '<div id="ci_profiler_menu"><ul>';
		$output .='<li class="profiler_default"> <a href="#collapse_all" class="profiler_menu">x</a><span> Collapse All</span></li>';
		
		foreach ($this->_available_sections as $section){
			if ($this->_compile_{$section} !== FALSE)
			{
				$desc_menu 	= 'Data';
				$class_menu = 'profiler_default';
				
				switch ($section) {
					case 'queries':
						$query_func = $this->_compile_queries();
						
						$label_menu= (isset($query_func['query'])) ? count($query_func['query']).' '.$section : '';
						$desc_menu 	= 'Database';
						$class_menu = 'profiler_blue';
						break;
					case 'benchmarks' :
						$label_menu =  ($this->CI->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end') * 1000).' ms';
						$desc_menu 	= 'Load Time';
						$class_menu = 'profiler_brown';
						break;
					case 'post' :
						$label_menu = $section;
						$class_menu = 'profiler_green';
						break;
					case 'memory_usage' :
						$label_menu = ( ! function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 2).' MB';
						$desc_menu 	= 'Memory Used';
						$class_menu = 'profiler_magenta';
						break;
					default:
						$label_menu = $section;
						break;
				}

				$output .='<li class="'.$class_menu.'"> <a href="#ci_profiler_'.$section.'" class="profiler_menu">'.$label_menu.'</a> <span> '.$desc_menu.' </span></li>';
			}

		}

		$output .= '</ul></div>';

		return $output;
	}

	public function run()
	{
		$output = "<div id='codeigniter_profiler' style='clear:both;background-color:#fff;padding:10px;' class='hidden-sm hidden-xs'>";
		$fields_displayed = 0;

		$output .= $this->_menu_profiler();

		foreach ($this->_available_sections as $section)
		{
			if ($this->_compile_{$section} !== FALSE)
			{
				$func = "_compile_{$section}";

				/*switch ($section) {
					case 'queries':
						$query_func = $this->{$func}();
						$output .= $query_func['output'];
						break;
					case 'benchmarks' :
						$query_func = $this->{$func}();
						$output .= $query_func['output'];
						break;
					default :
						$output .= $this->{$func}();
				}*/

				if($section == 'queries') {
					$query_func = $this->{$func}();
					$output .= (isset($query_func['output'])) ? $query_func['output'] : '';
				} else {
					$output .= $this->{$func}();
				}
				
				$fields_displayed++;
			}
		}

		if ($fields_displayed == 0)
		{
			$output .= '<p style="border:1px solid #5a0099;padding:10px;margin:20px 0;background-color:#eee">'.$this->CI->lang->line('profiler_no_profiles').'</p>';
		}

		$output .= '</div>';

		return $output;
	}
}
