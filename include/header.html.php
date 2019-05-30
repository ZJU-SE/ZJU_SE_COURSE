<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>浙江大学 软件工程课程网站</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div id="header">
        <div id="logo">
            <h1><a href="index.php"><img src="image/logo.png"  alt="Zhejiang University" /></a></h1>
            <p><a href="index.php">软件工程课程网站</a></p>
        </div>
        <div id="menu">
            <ul>
                <li><a href = "?switch=1">首页</a></li>
                <li><a href = "?switch=2">教学大纲</a>
                    <ul>
                        <li><a href = "?switch=2&sub=1">课程简介</a></li>
                        <li><a href = "?switch=2&sub=2">教学内容</a></li>
                        <li><a href = "?switch=2&sub=3">作业与实验</a></li>
                        <li><a href = "?switch=2&sub=4">考试要求</a></li>
                        <li><a href = "?switch=2&sub=5">教材</a></li>
                    </ul>
                </li>
                <li><a href = "?switch=3">课堂教学</a></li>
                <li><a href = "?switch=4">课堂录像</a></li>
                <li><a href = "?switch=5">课程实验</a>
                    <ul>
                        <li><a href = "?switch=5&sub=1">大型实验集</a></li>
                        <li><a href = "?switch=5&sub=2">网络工程小型实验集</a></li>
                        <li><a href = "?switch=5&sub=3">面向对象小型实验集</a></li>
                        <li><a href = "?switch=5&sub=4">C2C电子商务系统</a></li>
                        <li><a href = "?switch=5&sub=5">最新实验总体要求</a></li>
                        <li><a href = "?switch=5&sub=6">实验分组名单</a></li>
                        <li><a href = "?switch=5&sub=7">实验在线提交与评分系统</a></li>
                    </ul>
                </li>
                <li><a href = "?switch=6">课后讨论</a>
                    <ul>
                        <li><a href = "?switch=6&sub=1">Emails</a></li>
                        <li><a href = "?switch=6&sub=2">CC98教师答疑版</a></li>
                        <li><a href = "?switch=6&sub=3">飘渺水云间</a></li>
                    </ul>
                </li>
                <li><a href = "?switch=7">课后习题</a></li>
                <li><a href = "?switch=8">趣文推荐</a></li>
            </ul>

        </div>
        <div id="ppt">
            <h1><a href="<?php echo $ftp; ?>" target="_blank"><img src="image/ppt.png" alt="ppt download" /></a></h1>
        </div>
    </div>