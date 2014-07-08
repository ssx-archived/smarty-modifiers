<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty first HTML paragraph plugin
 *
 * Type:        modifier
 * Name:        first_html_paragraph
 * Purpose:     trim a string to the first sentence
 * Author:      Scott Wilcox
 * Website:     http://dor.ky
 *
 */
function smarty_modifier_first_html_paragraph($string)
{
	$intCut = 120;

	$start = strpos($string, '<p>');
	$end = strpos($string, '</p>', $start);
	$paragraph = substr($string, $start, $end-$start+4);

	if (strlen($paragraph) > $intCut)
	{
		$paragraph = substr($paragraph, 0, $intCut)."...";
	}

    return strip_tags($paragraph);
}