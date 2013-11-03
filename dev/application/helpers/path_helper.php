<?php

if (!function_exists('get_asset'))
{   
	function get_asset($path) {
		$CI =& get_instance();
		
		return $CI->config->item('asset_path') . $path;
	}
}

?>