<?php
function insert_taikhoan($hoten, $email, $sdt, $diachi, $taikhoan, $matkhau)
{
    $sql = "insert into user(hoten,email,sdt,diachi,taikhoan,matkhau) values('$hoten','$email','$sdt','$diachi','$taikhoan','$matkhau')";
    pdo_execute($sql);
}
function checkuser($taikhoan, $matkhau)
{
    $sql = "select * from user where taikhoan='" . $taikhoan . "' AND matkhau='" . $matkhau . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "select * from user where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($iduser, $hoten, $email, $sdt, $diachi, $taikhoan, $matkhau)
{
    $sql = "UPDATE user SET hoten='$hoten',email='$email',sdt='$sdt',diachi='$diachi',taikhoan='$taikhoan',matkhau='$matkhau' where iduser=" . $iduser;
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "select * from user order by iduser desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($iduser)
{
    $sql = "delete from user where iduser=" . $iduser;
    pdo_execute($sql);
}
function loadone_taikhoan($iduser)
{
    $sql = "select * from user where iduser=" . $iduser;
    $user = pdo_query_one($sql);
    return $user;
}

function sendMailPass($email, $taikhoan, $matkhau) {
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '57e5c496336f6d';                     //SMTP username
        $mail->Password   = '2d9a512991c90c';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        //Recipients
        $mail->setFrom('duanmau@example.com', 'DuAnMau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body    = 'Mau khau cua ban la' .$pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
