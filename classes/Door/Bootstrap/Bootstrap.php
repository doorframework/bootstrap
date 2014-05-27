<?php

/*
 * Created by Sachik Sergey
 * box@serginho.ru
 */
namespace Door\Bootstrap;
use Door\Core\Application;
/**
 * Description of Bootstrap
 *
 * @author serginho
 */
class Bootstrap {
	
	public static function init(Application $app)
	{
		$module_dir = str_replace("/classes/Door/Bootstrap","", __DIR__);
		
		$app->views->add("bootstrap", $module_dir."/views");
		$app->media->add("bootstrap", $module_dir."/media");		
	}
	
}
