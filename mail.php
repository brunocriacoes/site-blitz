<?php

$to       = "br.rafael@outlook.com";
$subject  = trim( strip_tags( "My subject" ) );
$message  = "Hello world!";
$message  = wordwrap($msg,70);
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: contato@blitzbolsas.com.br' . "\r\n";
$valid    = mail( $to,$subject,$message,$headers );
var_dump( $valid );
