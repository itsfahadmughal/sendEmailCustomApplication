<?php
        $receiver = $_POST["Email"];
        $subject = "Arfa Softech";
        $message = $_POST["Message"];
        $headers = 'From : fahad@arfasoftech.com';

        mail($receiver, $subject, $message, $headers);
        echo "Mail Sent Successfully";

?>