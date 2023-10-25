<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //服务器配置
    $mail CharSet ="UTF-8";                     //设定邮件编码
    $mail SMTPDebug = 0;                        // 调试模式输出
    $mail isSMTP();                             // 使用SMTP
    $mail Host = 'smtp.163.com';                // SMTP服务器
    $mail SMTPAuth = true;                      // 允许 SMTP 认证
    $mail Username = 'why20080417@163.com';                // SMTP 用户名  即邮箱的用户名
    $mail Password = 'LAFQQPHORTKPVRID';             // SMTP 密码  部分邮箱是授权码(例如163邮箱)
    $mail SMTPSecure = 'ssl';                    // 允许 TLS 或者ssl协议
    $mail Port = 465;                            // 服务器端口 25 或者465 具体要看邮箱服务器支持

    $mail setFrom('why20080417@163.com', 'tysite');  //发件人
    $mail addAddress('why20080417@163.com', 'WEDFVV');  // 收件人
    //可添加多个收件人
    $mail addReplyTo('why20080417@163.com', 'WEDFVV'); //回复的时候回复给哪个邮箱 建议和发件人一致
    

    //Content
    $mail isHTML(true);                                  // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
    $mail Subject = '网站留言' . time();
    $mail Body  = '网站留言' . date('Y-m-d H:i:s');
    $mail AltBody = '如果邮件客户端不支持HTML则显示此内容';

    $mail send();
    echo '邮件发送成功';
} catch (Exception $e) {
    echo '邮件发送失败: ', $mail ErrorInfo;
}

	</body>
</html>