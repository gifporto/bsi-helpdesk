<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('css')) {
   function css($asset_name, $module_name = NULL, $attributes = array())
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->css($asset_name, $module_name, $attributes);
   }
}

if (!function_exists('multi_css')) {
   function multi_css($asset_name = array())
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->multi_css($asset_name);
   }
}


if (!function_exists('theme_css')) {
   function theme_css($asset, $attributes = array())
   {
      return css($asset, '_theme_', $attributes);
   }
}

if (!function_exists('css_url')) {
   function css_url($asset_name = array())
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->css_url($asset_name, $module_name);
   }
}

if (!function_exists('css_path')) {
   function css_path($asset_name, $module_name = NULL)
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->css_path($asset_name, $module_name);
   }
}

if (!function_exists('image')) {
   function image($asset_name, $module_name = NULL, $attributes = array())
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->image($asset_name, $module_name, $attributes);
   }
}

if (!function_exists('theme_image')) {
   function theme_image($asset, $attributes = array())
   {
      return image($asset, '_theme_', $attributes);
   }
}

if (!function_exists('image_url')) {
   function image_url($asset_name, $module_name = NULL)
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->image_url($asset_name, $module_name);
   }
}

if (!function_exists('image_path')) {
   function image_path($asset_name, $module_name = NULL)
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->image_path($asset_name, $module_name);
   }
}

if (!function_exists('js')) {
   function js($asset_name, $module_name = NULL)
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->js($asset_name, $module_name);
   }
}

if (!function_exists('multi_js')) {
   function multi_js($asset_name = array())
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->multi_js($asset_name);
   }
}

if (!function_exists('theme_js')) {
   function theme_js($asset, $attributes = array())
   {
      return js($asset, '_theme_', $attributes);
   }
}

if (!function_exists('js_url')) {
   function js_url($asset_name, $module_name = NULL)
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->js_url($asset_name, $module_name);
   }
}

if (!function_exists('js_path')) {
   function js_path($asset_name, $module_name = NULL)
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->js_path($asset_name, $module_name);
   }
}

if (!function_exists('asset_path')) {
   function asset_path($asset_name, $module_name = NULL, $asset_type = NULL)
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->asset_path($asset_name, $module_name, $asset_type);
   }
}

if (!function_exists('asset_url')) {
   function asset_url($asset_name, $module_name = NULL, $asset_type = NULL)
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->asset_url($asset_name, $module_name, $asset_type);
   }
}

if (!function_exists('multi_asset')) {
   function multi_asset($asset_type, $asset_name = array())
   {
      $ci = &get_instance();
      $ci->load->library('asset');
      return $ci->asset->multi_asset($asset_name, $asset_type);
   }
}
