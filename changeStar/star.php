<?php 
	// 也用关系型数组
	$starList = array(
		'szj' =>array('path'=>'img/szj.jpg','info'=>'楠哥的男神,乔妹的欧巴' ,'wife'=>'乔妹') , 
		'hg' =>array('path'=>'img/hg.jpg','info'=>'霍xx的cp,林xx这个小三,古装仙侠,琅琊榜','wife'=>'霍xx') , 
		'wang' =>array('path'=>'img/wf.jpg','info'=>'上不了头条,中国乐坛的半壁江山,皮裤男,媳妇是章xx','wife'=>'章子怡') 
		);

	// 获取 提交过来的数据
	$key = $_POST['starName'];

	// 获取 其中的 一个明星
	$oneStar  = $starList[$key];
	echo $oneStar['path'];
	echo "|";
	echo $oneStar['info'];
	echo "|";
	echo $oneStar['wife'];
 ?>