<?php

/*
 * Created by Sachik Sergey
 * box@serginho.ru
 */
namespace Door\Bootstrap\Helper;
/**
 * Helper for show icons
 *
 * @author serginho
 */
class Icons {
	
	public static function glyphicon($name, $tag = "span")
	{
		return "<{$tag} class='glyphicon glyphicon-{$name}'></{$tag}>";
	}
	
	public static function fa($name)
	{
		return "<span><i class='fa fa-{$name}'></i></span>";
	}
	
	public static function show($name)
	{
		$name_arr = explode("-", $name);
		if(in_array($name_arr[0], array("fa", 'glyphicon')))
		{
			$func = $name_arr[0];
			array_shift($name_arr);
			return call_user_func("\\Door\\Bootstrap\\Helper\\Icons::".$func, implode("-", $name_arr));
		}
	}
	
}
