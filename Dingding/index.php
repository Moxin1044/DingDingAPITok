<html>
<head>
	<title>钉钉推送</title>
	<link href="https://q.qlogo.cn/headimg_dl?bs=qq&amp;dst_uin=1044631097&amp;src_uin=tangrui.wang&amp;fid=blog&amp;spec=100" rel="shortcut icon" /> 
	<style>
	html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
	 body {
            display: flex;
            align-items: center; /*定义body的元素垂直居中*/
            justify-content: center; /*定义body的里的元素水平居中*/
        }
	.test{
	width: 500px; /*设置宽度为500px*/
	height: auto; /*自动高度*/
	background: #11C2EE; 
	margin: 0 auto;
}
</style>
</head>
<body>
<div class="test" style="text-align:center;">
<form name="go" action="test.php" method="post">
<p>发送内容：<input name="txts" type="text" size=12 maxlength="1000"></p>
<p>操作口令：<input name="pass" type="password" size=12 maxlength="1000"></p>
<input type="submit" name="submit" value="Go！">
</form>
<?php
echo "代码日期：2020.05.32 2:00";//代码第一期日期
$data=date('y-m-d h:i:s',time());
echo "<br>";
echo "当前时间:";
echo $data;
?>
</div>
</body>
</html>