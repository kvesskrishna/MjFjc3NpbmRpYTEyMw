<?php
        $mailto="vasu@21cssindia.com";
        
        $subject = "PHP Mail script successful";

        $from="no-reply@apita.in";
        
       
        $message_body="Hi message";
        mail($mailto,$subject,$message_body,"From:".$from);
        
?>