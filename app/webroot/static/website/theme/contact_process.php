<?php

    $to = "fatonnavdiu@gmail.com";
    $from = $_REQUEST['contact_fname'];
    $name = $_REQUEST['contact_femail'];
    $headers = "From: $from";
    $subject = "Hi Doctor, You have a message from" . $from;

    $fields = array();
    $fields{"First Name"} = "contact_fname";
    $fields{"Last Name"} = "contact_lname";
    $fields{"Email"} = "contact_femail";
    $fields{"Phone Name"} = "contact_fphone";
    $fields{"Message"} = "contact_fmsg";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
