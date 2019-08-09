<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author	Mike Funk
 * @link	http://mikefunk.com
 * @email	mike@mikefunk.com
 * @file	checkbox.php
 */
/**
 * checkbox value fixer. If a checkbox is not checked, sets it's value
 * to zero.
 * @param mixed $name the checkbox form field name. Can be passed as a
 * string or as an array.
 * @return void
 */
function fix_unchecked($name)
{
	if (!is_array($name)) {$name = array($name);}
	foreach ($name as $item)
	{
		if (!$this->input->post($item)) {$_POST[$item] = 0;}
	}
}
/* End of file checkbox.php */
/* Location: ./application/helpers/checkbox.php */