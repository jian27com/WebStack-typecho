<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="theme-color" content="#f9f9f9">
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的电影'),
            'search'    =>  _t('包含关键字 %s 的电影'),
            'tag'       =>  _t('标签 %s 下的电影'),
            'author'    =>  _t('%s 发布的电影')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if ($this->
is('index')): ?> - <?php $this->
options->description(); ?><?php endif; ?>
</title>
<link rel="shortcut icon" href="<?php $this->options->themeUrl('image/favicon.ico'); ?>">
<meta name="keywords" content="<?php $this->options->title(); ?>">
<meta name="description" content="<?php $this->options->description(); ?>">
<link rel="stylesheet" id="iconfont-css" href="<?php $this->options->themeUrl('static/css/iconfont.css'); ?>" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-css" href="<?php $this->options->themeUrl('static/css/bootstrap.min-4.3.1.css'); ?>" type="text/css" media="all">
<link rel="stylesheet" id="iowen-css" href="<?php $this->options->themeUrl('static/css/style-3.03029.1.css'); ?>" type="text/css" media="all">
<link rel="stylesheet" id="custom-css" href="<?php $this->options->themeUrl('static/css/custom-style.css'); ?>" type="text/css" media="all">
<link rel="stylesheet" id="fortawesome-css" href="<?php $this->options->themeUrl('static/css/all.min.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?php $this->options->themeUrl('static/css/he-simple.css'); ?>">
<script type="text/javascript" src="<?php $this->options->themeUrl('static/js/jquery.min-3.2.1.js'); ?>" id="jquery-js"></script>
</head>