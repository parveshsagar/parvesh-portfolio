<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
   

    $to = "parveshsagar61@gmail.com";
    $subject = "Contact Enquiry from";
    $message = "<b>Parvesh Portfolio Contact Enquiry</b>";
    $message .= "<table>
                <tr><th>Name: </th><td>".$name."</td></tr>
                <tr><th>Subject: </th><td>".$phone."</td></tr>
                <tr><th>Email: </th><td>".$email."</td></tr>
                <tr><th>Message: </th><td>".$msg."</td></tr>
                </table>";
    $header = "From: Support <parveshsagar61@gmail.com> \r\n";
    $header .= "Reply-To: parveshsagar61@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $data = mail($to,$subject,$message,$header);  
    if( $data == 'true' ) {
        // echo "Success";
        header("Location:https://parveshsagar.github.io/parvesh-portfolio/?status=sent");
    }else {
        // echo "False";
        header("Location:https://parveshsagar.github.io/parvesh-portfolio/?status=failed");
    }
?>
