<?php
/**
 * LD库文件
 * ============================================================================
 * * 版权所有 2016-2018   零度网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.hbclnx.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id: sys_config.class.php  2016年7月16日    Lisonglin
 */
class sys_config {
	//--计算默认配置目录
	static function configPaht() {
		if(is_file(FRAMEWORK_DIR.'../'.GROUNP_NAME.'/Conf/database.php'))
		{
			return FRAMEWORK_DIR.'../'.GROUNP_NAME.'/Conf/database.php';
		} else {
			return FRAMEWORK_DIR.'../Conf/database.php';
		}
	}
	static function Config($files = '') {
		if('' == $files){
			return include  self::configPaht();
		}else {
			return include  self::configPaht();
		}
	}
	static function get($option = '',$file = '') {
		$Config = self::Config();
		if('' == $option) {
			return $Config;
		}else {
			$option = trim($option);
			$values = isset($Config[$option])? $Config[$option] : '';
			return $values;
		}
	}
}