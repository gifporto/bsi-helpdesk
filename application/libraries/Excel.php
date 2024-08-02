<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Code Igniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		Rick Ellis
 * @copyright	Copyright (c) 2006, pMachine, Inc.
 * @license		http://www.codeignitor.com/user_guide/license.html
 * @link			http://www.codeigniter.com
 * @since        Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * PHPExcel
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */
// ------------------------------------------------------------------------

/**
 * CodeIgniter PHPExcel Library
 *
 * This is a wrapper class/library based on the native PHPExcel
 * found at http://www.codeplex.com/PHPExcel
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author     Isone
 */

require_once APPPATH."/libraries/PHPExcel/PHPExcel.php"; 
require_once APPPATH."/libraries/PHPExcel/PHPExcel/IOFactory.php"; 

define('STRING_CELL', 'string');
define('NUMBER_CELL', 'number');
define('NULL_CELL', 'null');
 
class Excel extends PHPExcel { 
	 
	var $objPHPExcel;
	var $objReaderXls;

	private $_excelname = 'Worksheet';

	public function __construct() { 
	  	parent::__construct(); 

	  	$this->objPHPExcel = new PHPExcel();
	  	$this->objReaderXls = PHPExcel_IOFactory::createReader('Excel5');
	}

	private function merge_style($style, $newStyle) {
	  	//$currentStyle = $array;
	  
	  	foreach ($newStyle as $key => $value)
	  	{
	   	if (is_array($value) && isset($style[$key]) && is_array($style[$key]))
	    	{
	      	$style[$key] = $this->merge_style($style[$key], $value);
	    	}
	    	else
	    	{
	      	$style[$key] = $value;
	    	}
	  	}
	  	
	  return $style;
	} 

	/**
	 * Set Active worksheet by Worksheet name.
	 *
	 * @param	string
	 */
	public function setActiveSheet($worksheetName)
	{
		$this->objPHPExcel->setActiveSheetIndexByName($worksheetName);
	}

	/**
	 * Set Active worksheet by Index sheet.
	 *
	 * @param	int
	 */
	public function setActiveIndexSheet($index)
	{
		$this->objPHPExcel->setActiveSheetIndex($index);
	}

	/**
	 * Set Worksheet name based on active index sheet
	 *
	 * @param	string
	 * @param	int
	 */
	public function setWorksheetname($worksheetName, $index = 0) {
		$this->objPHPExcel->getSheet($index)->setTitle($worksheetName);
	}

	public function addWorkSheet($worksheetName)
	{
		$myWorkSheet = new PHPExcel_Worksheet($this->objPHPExcel, $worksheetName);
		$this->objPHPExcel->addSheet($worksheetName);
		$this->objPHPExcel->setActiveSheetIndexByName($worksheetName);
	}

	/**
	 * Set Properties
	 *
	 * @param 	$properties 	array()
	 * @return 	Properties excel file
	 */
	public function setMatedata($properties = array())
	{

		if(array_key_exists('creator', $properties)) 
			$this->objPHPExcel->getProperties()->setCreator($properties['creator']);
		
		if(array_key_exists('modified', $properties))
			$this->objPHPExcel->getProperties()->setLastModifiedBy($properties['modified']);

		if(array_key_exists('title', $properties))
			$this->objPHPExcel->getProperties()->setTitle($properties['title']);

		if(array_key_exists('description', $properties))
			$this->objPHPExcel->getProperties()->setDescription($properties['description']);

		if(array_key_exists('category', $properties))
			$this->objPHPExcel->getProperties()->setCategory($properties['category']);
	}

	/**
	 * Set name excel file.
	 *
	 * @param 	$filename 	string
	 */
	public function setFilename($filename) {
		$this->_excelname = $filename.'.xls';
		return $this;
	}

	/**
	 * Set name excel file.
	 *
	 * @param 	$properties 	array()
	 * @return 	Properties excel file
	 */
	public function setBorder($row, $position = 'all')
	{
		switch ($position){
			case "bottom":
				$this->objPHPExcel->getActiveSheet()->getStyle($row)->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);	
			break;
			case "top":
				$this->objPHPExcel->getActiveSheet()->getStyle($row)->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
			break;
			case "right":
				$this->objPHPExcel->getActiveSheet()->getStyle($row)->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
			break;
			case "left" :
				$this->objPHPExcel->getActiveSheet()->getStyle($row)->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
			break;
			case "all" :
				$this->objPHPExcel->getActiveSheet()->getStyle($row)->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
				$this->objPHPExcel->getActiveSheet()->getStyle($row)->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
				$this->objPHPExcel->getActiveSheet()->getStyle($row)->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
				$this->objPHPExcel->getActiveSheet()->getStyle($row)->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
			break;
		}
	}

	public function setFillCell($cell, $color)
	{
		$this->objPHPExcel->getActiveSheet()->getStyle($cell)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB($color);

	}

	public function setTitle($firstRow, $lastRow, $value)
	{	
		$style = array('alignment' => array('vertical' => 'center',
														'horizontal' => 'center'
												),
							'font'		=> array('bold' => true,
														'size' => 14
												)
					); 
		$this->objPHPExcel->getActiveSheet()->setCellValue($firstRow, $value);
		$this->objPHPExcel->getActiveSheet()->getStyle($firstRow.':'.$lastRow)->applyFromArray($style);
		$this->objPHPExcel->getActiveSheet()->mergeCells($firstRow.':'.$lastRow);
	}

	public function setMergerCell($firstRow, $lastRow)
	{
		$styleMerger = array('alignment' => array('vertical' => 'center',
																'horizontal' => 'center'
														),
									'font'		=> array('bold' => true)
							);

		$this->objPHPExcel->getActiveSheet()->mergeCells($firstRow.':'.$lastRow);
		$this->objPHPExcel->getActiveSheet()->getStyle($firstRow.':'.$lastRow)->applyFromArray($styleMerger);
	}

	public function setMergerCellOutline($firstRow, $lastRow)
	{
		$styleMerger = array('alignment' => array('vertical' => 'center',
																'horizontal' => 'center'
														),
									'font'		=> array('bold' => true
														),
									'borders'	=> array( 'outline' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
														)
							);

		$this->objPHPExcel->getActiveSheet()->mergeCells($firstRow.':'.$lastRow);
		$this->objPHPExcel->getActiveSheet()->getStyle($firstRow.':'.$lastRow)->applyFromArray($styleMerger);
	}

	public function setHeaderRow($headerData = array())
	{
		$styleHeader = array('alignment' => array('vertical'	=> 'center',
																'horizontal'=> 'center',
																'wrap'		=> true
														),
								'font'		=> array('bold' => true,
															'size' => 10
													),
								'borders'	=> array('allborders' =>	array('style' => PHPExcel_Style_Border::BORDER_THIN)
													)
								/*'borders'	=>	array('top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN ),
															'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
															'left'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
															'right'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
													 )*/
								);

		foreach($headerData as $values){
			if (isset($values['merge_to'])) {
				$this->objPHPExcel->getActiveSheet()->mergeCells($values['cell'].':'.$values['merge_to']);
				$this->objPHPExcel->getActiveSheet()->getStyle($values['cell'].':'.$values['merge_to'])->applyFromArray(array('borders' => array( 'outline' => array('style' => PHPExcel_Style_Border::BORDER_THIN))));
			}

			$this->objPHPExcel->getActiveSheet()->setCellValue($values['cell'], $values['label']);
			$this->objPHPExcel->getActiveSheet()->getColumnDimension($values['cell'][0])->setWidth($values['width']);
			$this->objPHPExcel->getActiveSheet()->getStyle($values['cell'])->applyFromArray($styleHeader);
		}

		$firstCell 	= $headerData[0]['cell'];
		$lastCell 	= $headerData[count($headerData)-1]['cell'];
		$this->objPHPExcel->getActiveSheet()->getStyle($firstCell.':'.$lastCell)->applyFromArray(array('borders' => array( 'outline' => array('style' => PHPExcel_Style_Border::BORDER_THIN))));
	}

	function setCellValue($cell, $value, $style = NULL) {
		$defaultStyle = array('alignment' 	=> array('vertical' => 'bottom',
																	'horizontal' => 'left'
															)
							);
		if (!is_null($style)) { $defaultStyle = $this->merge_style($defaultStyle, $style); }

		$this->objPHPExcel->getActiveSheet()->setCellValue($cell, $value);
		$this->objPHPExcel->getActiveSheet()->getStyle($cell)->applyFromArray($defaultStyle);
	}

	function setDataCell($column, $row, $value, $style = array(), $width = '') {
		$defaultStyle = array('alignment' 	=> array('vertical' => 'bottom',
																	'horizontal' => 'left'
															),
									'font'			=> array('bold' => true,
																	'size' => 10
															),
							);
		if (!is_null($style)) { $defaultStyle = $this->merge_style($defaultStyle, $style); }

		$this->objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($column, $row, $value);
		$this->objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($column, $row)->applyFromArray($defaultStyle);
		if($width != '')
		{
			$this->objPHPExcel->getActiveSheet()->getColumnDimension(chr(65+$column))->setWidth($width);
		} 
	}

	public function setTableCell($column, $row, $value,  $dataType = '', $style = array(), $width = '')
	{
		$style_column = array('alignment'	=>	array('vertical' => (array_key_exists('vertical', $style)) ? $style['vertical'] : 'center', 
																	'horizontal' => (array_key_exists('horizontal', $style)) ? $style['horizontal'] : 'left' 
															),
									'borders'		=>	array('top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN ),
																	'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
																	'left'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
																	'right'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
															 )
							);

		$this->objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($column, $row, $value);
		$this->objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($column, $row)->applyFromArray($style_column);

		if($width == 'auto' && $width != '')
		{
			$this->objPHPExcel->getActiveSheet()->getColumnDimension(chr(65+$column))->setAutoSize(true);
		}

		if($dataType != ''){
			switch ($dataType){
				case STRING_CELL :
					$this->objPHPExcel->getActiveSheet()->getCellByColumnAndRow($column, $row)->setValueExplicit($value, PHPExcel_Cell_DataType::TYPE_STRING);
				break;
				case NUMBER_CELL:
					$this->objPHPExcel->getActiveSheet()->getCellByColumnAndRow($column, $row)->setValueExplicit($value, PHPExcel_Cell_DataType::TYPE_NUMERIC);
					//$this->objPHPExcel->getActiveSheet()->getStyle(chr(65+$column).$row)->getNumberFormat()->setFormatCode('0.0000');
				break;
				case NULL_CELL:
					$this->objPHPExcel->getActiveSheet()->getCellByColumnAndRow($column, $row)->setValueExplicit($value, PHPExcel_Cell_DataType::TYPE_NULL);
				break;
			}
		}
	}

	public function setFormulaCell($column, $row, $value, $style = array(), $width = '') {
		$style_column = array('alignment'	=>	array('vertical' => (array_key_exists('vertical', $style)) ? $style['vertical'] : 'center', 
																	'horizontal' => (array_key_exists('horizontal', $style)) ? $style['horizontal'] : 'left' 
															),
									'borders'		=>	array('top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN ),
																	'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
																	'left'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
																	'right'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
															 )
							);

		//$this->objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($column, $row, $value); setCellValueExplicit
		$this->objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($column, $row, $value);
		$this->objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($column, $row)->applyFromArray($style_column);
		$this->objPHPExcel->getActiveSheet()->getCellByColumnAndRow($column, $row)->setValueExplicit($value, PHPExcel_Cell_DataType::TYPE_NUMERIC);
		if($width == 'auto' && $width != '')
		{
			$this->objPHPExcel->getActiveSheet()->getColumnDimension(chr(65+$column))->setAutoSize(true);
		}

	}

	function debug_formula($cell) {
    $formulaValue = $this->objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
    echo 'Formula Value is' , $formulaValue , PHP_EOL;
    $expectedValue = $this->objPHPExcel->getActiveSheet()->getCell($cell)->getOldCalculatedValue();
    echo 'Expected Value is '  , ((!is_null($expectedValue)) ? $expectedValue : 'UNKNOWN') , PHP_EOL;


     PHPExcel_Calculation::getInstance()->writeDebugLog = true;
    $calculate = false;
    try {
        $tokens = PHPExcel_Calculation::getInstance()->parseFormula($formulaValue,$this->objPHPExcel->getActiveSheet()->getCell($cell));
        echo 'Parser Stack :-' , PHP_EOL;
        print_r($tokens);
        echo PHP_EOL;
        $calculate = true;
    } catch (Exception $e) {
        echo 'PARSER ERROR: ' , $e->getMessage() , PHP_EOL;

        echo 'Parser Stack :-' , PHP_EOL;
        print_r($tokens);
        echo PHP_EOL;
    }

    if ($calculate) {
        try {
            $cellValue = $this->objPHPExcel->getActiveSheet()->getCell($cell)->getCalculatedValue();
            echo 'Calculated Value is ' , $cellValue , PHP_EOL;

            echo 'Evaluation Log:' , PHP_EOL;
            print_r(PHPExcel_Calculation::getInstance()->debugLog);
            echo PHP_EOL;
        } catch (Exception $e) {
            echo 'CALCULATION ENGINE ERROR: ' , $e->getMessage() , PHP_EOL;

            echo 'Evaluation Log:' , PHP_EOL;
            print_r(PHPExcel_Calculation::getInstance()->debugLog);
            echo PHP_EOL;
        }
    }
}

	public function writeExcel() 
	{
		$objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');
     	header('Content-Disposition: attachment;filename="'.$this->_excelname);
     	header('Cache-Control: max-age=0');
 
		$objWriter->save('php://output');
		$this->objPHPExcel->disconnectWorksheets();
	} 
	
	public function readFile() 
	{
		$objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');
     	header('Content-Disposition: attachment;filename="'.$this->_excelname);
     	header('Cache-Control: max-age=0');
 
		$objWriter->save('php://output');
		$this->objPHPExcel->disconnectWorksheets();
	} 
	
	var $objRead;
	
    public function readFileData($file)
    {
		$this->objRead = PHPExcel_IOFactory::load($file);
        return $this->objRead;
    }
	
	 public function columnIndexFromString($highestColumn)
    {
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
        return $highestColumnIndex;
    }
	
	public function dataTypeForValue($val)
    {
		$dataTypeForValue = PHPExcel_Cell_DataType::dataTypeForValue($val);
        return $dataTypeForValue;
    }
	
	public function getDataFromExcel($file)
    {
		$data = $this->objReaderXls->load($file);
		return $data->getActiveSheet()->toArray(null,true,true,true);
    }
}