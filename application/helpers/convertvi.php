<?php
Class convertvi
{
	var $CI = ''; 
    function __construct()
    {
        $this->CI = & get_instance();
    }
	function convert($str) {
            $str = preg_replace(�/(�|�|?|?|�|�|?|?|?|?|?|a|?|?|?|?|?)/�, �a�, $str);
            $str = preg_replace(�/(�|�|?|?|?|�|?|?|?|?|?)/�, �e�, $str);
            $str = preg_replace(�/(�|�|?|?|i)/�, �i�, $str);
            $str = preg_replace(�/(�|�|?|?|�|�|?|?|?|?|?|o|?|?|?|?|?)/�, �o�, $str);
            $str = preg_replace(�/(�|�|?|?|u|u|?|?|?|?|?)/�, �u�, $str);
            $str = preg_replace(�/(?|�|?|?|?)/�, �y�, $str);
            $str = preg_replace(�/(d)/�, �d�, $str);
            $str = preg_replace(�/(�|�|?|?|�|�|?|?|?|?|?|A|?|?|?|?|?)/�, �A�, $str);
            $str = preg_replace(�/(�|�|?|?|?|�|?|?|?|?|?)/�, �E�, $str);
            $str = preg_replace(�/(�|�|?|?|I)/�, �I�, $str);
            $str = preg_replace(�/(�|�|?|?|�|�|?|?|?|?|?|O|?|?|?|?|?)/�, �O�, $str);
            $str = preg_replace(�/(�|�|?|?|U|U|?|?|?|?|?)/�, �U�, $str);
            $str = preg_replace(�/(?|�|?|?|?)/�, �Y�, $str);
            $str = preg_replace(�/(�)/�, �D�, $str);
            $str = str_replace(� �, �-�, str_replace(�&*#39;�,�",$str));
            $str = strtolower($str);
      return $str;
	}
}