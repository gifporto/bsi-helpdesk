<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('html_notif')) {
    function html_notif($param)
    {
        if ($param["aksi"]) {
            $string_html = '<div class="callout callout-success" role="alert"> <button type="button" class="close" data-dismiss="callout" aria-label="Close"> <span>&times;</span> </button> <h5>Berhasil $:tindakan !</h5> <p>$:pesan</p> </div>';

            $string_html = str_replace("$:pesan", $param["pesan"], $string_html);
            $string_html = str_replace("$:tindakan", $param["tindakan"], $string_html);
            echo $string_html;
        } else {
            $string_html = '<div class="callout callout-danger" role="alert"> <button type="button" class="close" data-dismiss="callout" aria-label="Close"> <span>&times;</span> </button> <h5>Gagal $:tindakan !</h5> <p>$:pesan</p> </div>';

            $string_html = str_replace("$:pesan", $param["pesan"], $string_html);
            $string_html = str_replace("$:tindakan", $param["tindakan"], $string_html);
            echo $string_html;
        }
    }
}

if (!function_exists('html_select_provinsi')) {
    function html_select_provinsi($param = array())
    {
        $content_select = "";
        $buka = '<div class="form-group"> <label for="provinsi">Nama Provinsi</label> <select id="provinsi" name="kabupaten_provinsi_nama" class="form-control" data-provide="selectpicker" data-live-search="true">';

        foreach ($param as $k) {
            $tmp = '<option value="$:id_prov">$:nama_prov</option>';
            $tmp = str_replace("$:id_prov", $k["propKode"], $tmp);
            $tmp = str_replace("$:nama_prov", $k["propNama"], $tmp);

            $content_select .= $tmp;
        }
        $tutup = '</select></div>';

        return $buka . $content_select . $tutup;
    }
}

if (!function_exists('html_old')) {
    function html_old($index, $param = array())
    {
        return isset($param[$index]) ? $param[$index] : "";
    }
}
