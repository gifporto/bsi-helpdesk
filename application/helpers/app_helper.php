<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('userdata'))
{
   function userdata($field)
   {
      $ci =& get_instance();
      return $ci->session->userdata($field);
   }
}

if ( ! function_exists('unset_userdata'))
{
   function unset_userdata()
   {
      $ci =& get_instance();
      $data = array('daerah','cabang','nama','nik','glr_depan','glr_belakang','tempat_lahir','tgl_lahir','jenis_kelamin','status_kawin','email','telp','profesi','profesi_lain','pekerjaan','tempat_kerja','step','prev','alamat','propinsi','kabupaten','kecamatan','kelurahan','kodepos','pendidikan','jurusan','is_pesantren','bahasa','org','org_lain','tgl_daftar');
      return $ci->session->unset_userdata($data);
   }
}

if ( ! function_exists('IndonesianDate'))
{
    function IndonesianDate($strDate)
    {
        if (is_null($strDate)) return;
        $date = explode("-", nice_date($strDate, 'd-n-Y'));
        $bln = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus',
                    'September','Oktober','November','Desember');
        if($date[0] != 'Invalid Date')
        {
            return $date[0].' '.$bln[$date[1]-1].' '.$date[2];
        }
        else
        {
            return '-';
        }
    }
}

if (!function_exists('set_selected'))
{
    function set_selected($field, $value)
    {
        $ci =& get_instance();
        $usrdt = $ci->session->userdata($field);
        if (set_value($field) != '') {
            $selected = set_select($field, $value);
        } else {
            $selected = ($usrdt == $value) ? 'selected = "selected"' : '';    
        }

        return $selected;
    }
}

if (!function_exists('rodio_selected'))
{
    function radio_selected($field, $value)
    {
        $ci =& get_instance();
        $usrdt = $ci->session->userdata($field);
        if (set_value($field) != '') {
            $selected = set_radio($field, $value);
        } else {
            $selected = ($usrdt == $value) ? 'checked' : '';    
        }

        return $selected;
    }
}

function randomString($length = 10){
    $alphnum = '0123456789';
    $alphnum_length = strlen($alphnum) - 1;
    $random_string = '';

    for ($i=0; $i < $length; $i++) { 
        $random_string.= $alphnum[rand(0, $alphnum_length)];
    }
    return $random_string;

}

if ( ! function_exists('get_name_pesan'))
{
    function get_name_pesan($id)
    {
        $ci =& get_instance();
        $ci->load->model('m_inbox');
        $user = $ci->m_inbox->get_realname_pesan($id);
        return $user->name;
    }
}

function IndonesianDate($strDate)
{
    if (is_null($strDate)) return;
    $date = explode("-", nice_date($strDate, 'd-n-Y'));
    $bln = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus',
                'September','Oktober','November','Desember');

    return $date[0].' '.$bln[$date[1]-1].' '.$date[2];
}

if ( ! function_exists('date_pesan'))
{
    function date_pesan($date)
    {
        $ci =& get_instance();
        $bln=array('Jan','Feb','Maret','April','Mei','Juni','Juli','Agustus',
                    'Sept','Okt','Nov','Des');
        $now = new datetime();
        $diff = date_diff($now, new datetime($date));
        /*if ($diff->format('%a') == 0) {
            $time = date('H:i', strtotime($date));
        } else {
            //$time = date('M', strtotime('2014-08-20'));
            $time = date('d', strtotime($date)).' '.$bln[date('n', strtotime($date))-1];
        }*/

        if ($diff->format('%y') > 0) {
            $time = date('d', strtotime($date)).' '.$bln[date('n', strtotime($date))-1].' '.date('Y', strtotime($date));
        } else if ($diff->format('%a') > 0){
            $time = date('d', strtotime($date)).' '.$bln[date('n', strtotime($date))-1];
        } else {
            $time = date('H:i', strtotime($date));
        }

        return $time;
    }
}

if ( ! function_exists('HitungUmur'))
{
    function HitungUmur($strDate1 = NULL, $strDate2 = NULL)
    {
        $hrBln = array(31, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        
        if (is_null($strDate1)) return NULL;
        if (is_null($strDate2)){
            $date2 = explode("-", date("d-n-Y"));
        } else {
            $date2 = explode("-", nice_date($strDate2, 'd-n-Y'));
        }
        $old_date = date($strDate1);              // returns Saturday, January 30 10 02:06:34
        $old_date_timestamp = strtotime($old_date);
        $new_date = date('d-n-Y', $old_date_timestamp);   
        $date1 = explode("-", $new_date);
        
        if (isKabisat($date2[2])) {
            // jika tahun kabisat
            $hrBln[2] = 29;
        }
        else {
            // jika bukan tahun kabisat
            $hrBln[2] = 28;
        }
        
        $jmlTahun = $date2[2] - $date1[2];
        $jmlBulan = $date2[1] - $date1[1];
        $jmlHari = $date2[0] - $date1[0];

        // jika $jmlBulan negatif
        if ($jmlBulan < 0) {
            $jmlTahun--;
            $jmlBulan = 12 + $jmlBulan; // 12 + (-$jmlBulan)
        }

        // jika $jmlHari negatif
        if ($jmlHari < 0 ) {
            // hitung jumlah bulan
            if ($jmlBulan > 0) {
                $jmlBulan--;
            }
            if ($jmlBulan == 0) {
                $jmlBulan = 11;
                $jmlTahun--;
            }

            // hitung jumlah hari
            // sisa hari bulan sebelumnya = jumlah hari bulan sebelumnya - hari bulan sebelumnya
            $sisaHrBlnSebelumnya = $hrBln[$date2[1] - 1] - $date1[0];

            // jika sisanya negatif, maka tidak ada sisa hari
            if ($sisaHrBlnSebelumnya < 0) {
                $sisaHrBlnSebelumnya = 0;
            }

            // jumlah hari = sisa hari bulan sebelumnya + hari pada $date_2
            $jmlHari = $sisaHrBlnSebelumnya + $date2[0];
        }

        // mengembalikan selisih waktu dalam bentuk array(tahun, bulan, waktu)
        return array("tahun" => $jmlTahun, "bulan" => $jmlBulan, "hari" => $jmlHari);
    }
}

if ( ! function_exists('isKabisat'))
{
    function isKabisat($thn) {
     // jika tahun habis dibagi 4, maka tahun kabisat
        if (($thn % 4) != 0) {
            return false;
        } // jika tidak habis dibagi 4, maka jika habis dibagi 100 dan 400 maka tahun kabisat
        else if ((($thn % 100) == 0) && (($thn % 400) != 0)) {
            return false;
        }
        else {
            return true;
        }
    }
}

if ( ! function_exists('encode'))
{
  function encode($str = NULL)
  {
     $ci =& get_instance();
     if( $ci->config->item('app_encrypt_mode') ==  TRUE){
        $ci->load->library('encrypt');
        $ci->encrypt->set_mode(MCRYPT_MODE_CFB);
        //$ci->encrypt->set_cipher($ci->config->item('app_set_cipher'));
        return strtr($ci->encrypt->encode($str), array('+' => '_','/'=>'-')) ;
     } else {
        return $str;
     }

  }
}

if ( ! function_exists('decode'))
{
  function decode($str = NULL)
  {
     $ci =& get_instance();
     if( $ci->config->item('app_encrypt_mode') ==  TRUE){
        $ci->load->library('encrypt');
        $ci->encrypt->set_mode(MCRYPT_MODE_CFB);
        //$ci->encrypt->set_cipher($ci->config->item('app_set_cipher'));
        return $ci->encrypt->decode(strtr($str, array('_' => '+','-'=>'/')));
     } else {
        return $str;
     }

  }
}

if ( ! function_exists('curl_api'))
{
    function curl_api( $data = array() )
    {   
        $content = NULL;
        
        if( function_exists('curl_version') )
        {
            //Server url
            $url = $data['url']; // http://172.10.27.4/rest/index.php?d=api&c=sdm&m=dosen
            $headers = array(
                'U4D-API-KEY: '. $data['key']
            );
            
            try {
                $ch = curl_init();

                if (FALSE === $ch)
                    throw new Exception('failed to initialize');

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                // curl_setopt($curl_handle, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                if(isset($data['post'])) 
                {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data['post'] );
                }

                $content = curl_exec($ch);

                if (FALSE === $content)
                    throw new Exception(curl_error($ch), curl_errno($ch));
                // ...process $content now
            } catch(Exception $e) {

                trigger_error(sprintf(
                    'Curl failed with error #%d: %s',
                    $e->getCode(), $e->getMessage()),
                    E_USER_ERROR);

            }
        }
        
        return $content;
    }
}
if ( ! function_exists('generateNomorPasien'))
{
    function generateNomorPasien($counter) 
    {
        $nomor = strlen(($counter+1)) > 3 ? ($counter+1) : str_pad(($counter+1), 3, '0', STR_PAD_LEFT);

        return date('dmy') . '1.' . $nomor;
    }
}

if ( ! function_exists('generateNomorLapor'))
{
    function generateNomorLapor($counter) 
    {
        $nomor = strlen(($counter+1)) > 3 ? ($counter+1) : str_pad(($counter+1), 3, '0', STR_PAD_LEFT);

        return date('ymd') . '0.' . $nomor;
    }
}