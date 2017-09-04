<?php
function smtp_mail($FromName, $From, $ToName, $To, $Subject, $Textbody, $Attachments = '', $CC = '', $BCC = 'my@chstar.com.cn', $CharSet = 'utf-8', $Encoding = 'base64')
{
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    //*
    $mail->Host     = "smtp.chstar.com.cn";
    $mail->Username = "noreply@chstar.com.cn";
    $mail->Password = "cssh138";
    $mail->From     = "noreply@chstar.com.cn";
    //*/

    /*
    $mail->Host = "mx0.chstar.com.cn";
    $mail->Username = "noreply@corp.chstar.com.cn";
    $mail->Password = "x1p2c3.CS";
    $mail->From = "noreply@corp.chstar.com.cn";
    //*/

    $mail->FromName = $FromName;

    list($reply_to, $reply_name) = explode("|", $From);
    $mail->AddReplyTo($reply_to, $reply_name);

    $mail->CharSet  = $CharSet;
    $mail->Encoding = $Encoding;

    if (strstr($To, ",")) {
        $MA = explode(",", $To);
        foreach ($MA as $_To) {
            $mail->AddAddress($_To);
        }
    } else {
        $mail->AddAddress($To, $ToName);
    }

    //附件
    if (is_array($Attachments)) {
        foreach ($Attachments as $filename => $Attachment) {
            //如果下标为数字型，则文件名根据附件名获取
            if (is_numeric($filename)) {
                $filename = basename($Attachment);
            }
			
            $mail->AddAttachment($Attachment, $filename);
        }
    }

    if ($CC) {
        if (strstr($CC, ",")) {
            $MA = explode(",", $CC);
            foreach ($MA as $_CC) {
                $mail->AddCC($_CC);
            }
        } else {
            $mail->AddCC($CC);
        }
    }

    if ($BCC) {
        if (strstr($BCC, ",")) {
            $MA = explode(",", $BCC);
            foreach ($MA as $_BCC) {
                $mail->AddBCC($_BCC);
            }
        } else {
            $mail->AddBCC($BCC);
        }
    }

    $mail->Subject = $Subject;
    $mail->IsHTML(true);
    $mail->Body    = $Textbody;
    $mail->AltBody = "text/html";

    return $mail->Send() ? "" : "Error:" . $mail->ErrorInfo;
}

function tm()
{
    $FromName = "四达上海";
    $From     = "noreply@chstar.com.cn|$FromName";
    $ToName   = "测试员";
    $To       = "14884230@qq.com";
    $Subject  = "邮件测试！";
    $Textbody = '<!DOCTYPE html>
        <html>
        <head>
            <title></title>
        </head>
        <body>
            这是一封测试邮件！
        </body>
        </html>';

    $Attachment               = "邮件附件.txt";
    $Attachments[]            = "/home/www/website/src/Attachment.txt";
    $Attachments[$Attachment] = "/home/www/website/src/$Attachment";

    $result = smtp_mail($FromName, $From, $ToName, $To, $Subject, $Textbody, $Attachments);
}
