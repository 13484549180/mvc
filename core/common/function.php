<?php
/**
 * @param $var 要打印的数组
 */
function p($var)
{
	if (is_bool($var)) {
		var_dump($var);
	} else if (is_null($var)) {
		var_dump($var);
	} else {
		echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>". print_r($var, true) . "</pre>";
	}
}

/**
 * @param $name 对应的值
 * @param bool $default  默认值
 * @param bool $fitt 过滤方法
 * @is_numeric 检测变量是否位数字或数字字符串
 */
function post($name, $default = false, $fitt = false)
{
	if (isset($_POST[$name])) {
		if ($fitt) {
			switch ($fitt) {
				case 'int':
					if (is_numeric($_POST[$name])) {
						return $_POST[$name];
					} else {
						return $default;
					}
			}
		} else {
			return $_POST[$name];
		}
	} else {
		return $default;
	}
}

/**
 * @param $name 对应的值
 * @param bool $default  默认值
 * @param bool $fitt 过滤方法
 * @is_numeric 检测变量是否位数字或数字字符串
 */
function get($name, $default = false, $fitt = false)
{
	if (isset($_GET[$name])) {
		if ($fitt) {
			switch ($fitt) {
				case 'int':
					if (is_numeric($_GET[$name])) {
						return $_GET[$name];
					} else {
						return $default;
					}
			}
		} else {
			return $_GET[$name];
		}
	} else {
		return $default;
	}
}

/**
 * @param $url 要跳转的地址
 */
function jump($url)
{
	header("localhost:".$url);
	exit();
}