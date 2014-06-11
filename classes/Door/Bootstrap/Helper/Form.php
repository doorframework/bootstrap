<?php

/* 
 * Created by Sachik Sergey
 * box@serginho.ru
 */
namespace Door\Bootstrap\Helper;
use Door\Core\Helper\Form as F;

class Form{
	
	
	public static function toggle_switch($name, $checked = false)
	{
		echo "<div class='toggle-switch toggle-switch-primary'>"
				. "<label>"
				. F::checkbox($name, 1, $checked)
				. "<div class='toggle-switch-inner'></div>"
				. "<div class='toggle-switch-switch'><i class='fa fa-check'></i></div>"
				. "</label>"
				. "</div>";
	}
	
}