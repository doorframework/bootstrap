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
	
}
