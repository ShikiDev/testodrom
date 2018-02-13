<?php

   $email = $_POST['email'];
   if($email!=''){
      $res = mail($email,"Hello dude","You link lay here","From: Our service name <service@name.com> \r\n");
      if($res){
         return true;
      }else{
         return false;
      }
   }else{
      return true;
   }
 ?>
