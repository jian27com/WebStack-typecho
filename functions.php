<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form)
{

    // 备案
    $xinac_beian = new Typecho_Widget_Helper_Form_Element_Text('xinac_beian', NULL, 'ICP备123456号', _t('ICP备案号'), _t('ICP备案号'));
    $form->addInput($xinac_beian);

    // 版权
    $xinac_copy = new Typecho_Widget_Helper_Form_Element_Text('xinac_copy', NULL, 'WebStack', _t('网站版权'), _t(''));
    $form->addInput($xinac_copy);
}

// 网站页面自定义字段
function themeFields($layout)
{
    $url = new Typecho_Widget_Helper_Form_Element_Text('url', NULL, NULL, _t('跳转链接（*）'), _t('（*）跳转链接URL'));
    $text = new Typecho_Widget_Helper_Form_Element_Textarea('text', NULL, NULL, _t('链接描述'), _t('链接描述内容'));
    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('链接LOGO'), _t('链接logo地址'));
    $menu_logo = new Typecho_Widget_Helper_Form_Element_Text('menu_logo', NULL, NULL, _t('链接图标'), _t('仅独立页面设置有效，示例：fa fa-home'));
    $layout->addItem($url);
    $layout->addItem($text);
    $layout->addItem($logo);
    $layout->addItem($menu_logo);
}

function _isMobile()
{
	if (isset($_SERVER['HTTP_X_WAP_PROFILE']))
		return true;
	if (isset($_SERVER['HTTP_VIA'])) {
		return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
	}
	if (isset($_SERVER['HTTP_USER_AGENT'])) {
		$clientkeywords = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile');
		if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
			return true;
	}
	if (isset($_SERVER['HTTP_ACCEPT'])) {
		if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
			return true;
		}
	}
	return false;
}
