<?php
if (!defined('_GNUBOARD_')) exit;

include_once(G5_PHPMAILER_PATH.'/PHPMailerAutoload.php');

// 메일 보내기 (파일 여러개 첨부 가능)
// type : text=0, html=1, text+html=2
function mailer($fname, $fmail, $to, $subject, $content, $type=0, $file="", $cc="", $bcc="")
{
    global $config;
    global $g5;

    // 메일발송 사용을 하지 않는다면
    if (!$config['cf_email_use']) return;

    if ($type != 1)
        $content = nl2br($content);

    $result = run_replace('mailer', $fname, $fmail, $to, $subject, $content, $type, $file, $cc, $bcc);
    
    if( is_array($result) && isset($result['return']) ){
        return $result['return'];
    }

    $mail_send_result = false;

    $mail = new PHPMailer();

        $mail->IsSMTP(); // telling the class to use SMTP

 

        $smtp_mail_id = "kkoo2324"; //$smtp_mail_id = "네이버아이디";

        $smtp_mail_pw = "flvykidyfhdkxnld"; //$smtp_mail_pw = "비밀번호";

        $to_email = $to;

        $title = $subject;

        $from_name = '인천오라클피부과 구월점 · 송도점';

        $from_email = 'asia_beauty@naver.com';

 

        $smtp_use = 'smtp.naver.com'; //네이버 메일 사용시

        $smtp_use = 'smtp.gmail.com'; //구글 메일 사용시 주석제거

 

        if ($smtp_use == 'smtp.naver.com') {

            $from_email = 'asia_beauty@naver.com'; //네이버메일은 보내는 id로만 전송이가능함

        }else {

            $from_email = 'asia_beauty@naver.com';

        }

 

        try {

            $mail->Host = $smtp_use ;   // email 보낼때 사용할 서버를 지정

            $mail->SMTPAuth = true;          // SMTP 인증을 사용함

            $mail->Port = 465;            // email 보낼때 사용할 포트를 지정

            $mail->SMTPSecure = "ssl";        // SSL을 사용함

            $mail->Username   = $smtp_mail_id; // 계정

            $mail->Password   = $smtp_mail_pw; // 패스워드

            $mail->SetFrom('asia_beauty@naver.com', '인천오라클피부과 구월점 · 송도점'); // 보내는 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)

            $mail->AddAddress($to_email);  // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)

            $mail->Subject = $title;         // 메일 제목

            $mail->MsgHTML($content);         // 메일 내용 (HTML 형식도 되고 그냥 일반 텍스트도 사용 가능함)

            $mail->CharSet = 'UTF-8';

           

            return $mail->Send();              // 실제로 메일을 보냄

           

           

        } catch (phpmailerException $e) {

            echo $e->errorMessage();

        } catch (Exception $e) {

            echo $e->getMessage();

        }

    run_event('mail_send_result', $mail_send_result, $mail, $to, $cc, $bcc);

    return $mail_send_result;
}

// 파일을 첨부함
function attach_file($filename, $tmp_name)
{
    // 서버에 업로드 되는 파일은 확장자를 주지 않는다. (보안 취약점)
    $dest_file = G5_DATA_PATH.'/tmp/'.str_replace('/', '_', $tmp_name);
    move_uploaded_file($tmp_name, $dest_file);
    $tmpfile = array("name" => $filename, "path" => $dest_file);
    return $tmpfile;
}