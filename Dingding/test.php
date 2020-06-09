<?php  
function request_by_curl($remote_server, $post_string) {  
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $remote_server);
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array ('Content-Type: application/json;charset=utf-8'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
    // 线下环境不用开启curl证书验证, 未调通情况可尝试添加该代码
    // curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
    // curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $data = curl_exec($ch);
    curl_close($ch);                
    return $data;  
}  
$passwds=$_POST['pass'];
if($passwds == 'password')//这里填写你的密码
{
        $webhook = "https://oapi.dingtalk.com/robot/send?access_token=xxxxxxxxx";//填写钉钉机器人的地址
        $message=$_POST['txts'];
        if (strpos($message,'<') != FALSE)
        {
        	echo "请不要尝试XSS攻击！";
        }
        else if (strpos($message,'>') != FALSE)
        {
        	echo "请不要尝试XSS攻击！";
        }
        else if (strpos($message,')') != FALSE)
        {
        	echo "请不要尝试XSS攻击！";
        }
        else if (strpos($message,'(') != FALSE)
        {
        	echo "请不要尝试XSS攻击！";
        }
        else
        {
           echo "您已经发送成功了！ ";    echo "<a href='.\index.php'>点此返回</a>";
        }
         $data = array ('msgtype' => 'text','text' => array ('content' => $message));
          $data_string = json_encode($data);

        $result = request_by_curl($webhook, $data_string);  
        //echo $result;
}
else
{
    echo "密码错误 ";
    echo "<a href='.\index.php'>点此返回</a>";
}

?>