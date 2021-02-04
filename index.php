<?php
require __DIR__ . '/vendor/autoload.php';

define("MD5_PASSWD", "password");
define("DEST_EMAIL", "somebody@example.com");
define("SRC_EMAIL", "somebody@example.com");


$error = "";
if (YAPI::RegisterHub('md5:' . MD5_PASSWD . '@callback') == YAPI::SUCCESS) {
    $subject = "Heater Alert!";
    $message = "<html><head><title>{$subject}</title></head><body><h1>{$subject}</h1><p>The Heater alert has been triggered. Please check it.</p></body></html>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <' . SRC_EMAIL . '>' . "\r\n";
    mail(DEST_EMAIL, $subject, $message, $headers);
    die("Alarm has been triggered");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Yoctopuce Heater Alarm example</title>
</head>
<body>
<p>This example need to be called from a YoctoHub. Read <a
            href="https://www.yoctopuce.com/EN/article/symfony-and-yoctopuce">the full article</a> for more details.</p>
<ol>
    <li>Connect to the web interface of YoctoHub that will run this script.</li>
    <li>Click on the <em>configure</em> button of the YoctoHub.</li>
    <li>Click on the <em>edit</em> button of "Callback URL" settings.</li>
    <li>Set the <em>type of Callback</em> to <b>Yocto-API Callback</b>.</li>
    <li>Set the <em>callback URL</em> to
        http://<b><?php print($_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['SCRIPT_NAME']); ?></b>.
    </li>
    <li>Set the security to <em>MD5 Signature</em> and enter the password used in the code.</li>
    <li>Click on the <em>test</em> button.</li>
    <li>Click on the <em>Save</em> button.</li>
</ol>
</body>
</html>