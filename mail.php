<php

if(isset($_POST['submit_btn']))
{
	$name=$POST['name'];
	$email=$POST['email'];
	$phno=$POST['number'];
	$subject=$POST['subject'];
	$massage=$POST['massage'];


	$FromEmail="rajpokhrel18110@gmail.com";
	$ReplyTo=$email;
	$ToEmail="18110sharma@gmail.com";
	$sub=$subject;
	$msg='Name:-'.$name.'\nEmail:-'.$email.'\nPhone Number:-'.$phno.'Massage:-'.$massage;


	$header .="Content-type: text/html; charset=iso-8859-1\n";
	$header .= "From: ".$FromName. "<".$FromMail.">\n";
	$header .= "Reply-To: " .$ReplyTo. "\n";
	$header .= "X-Sender: .<".$FromMail.">.\n";
	$header .= "X-Mailer: PHP .\n";
	$header .= "X-Priority: 1 .\n";
	$header .= "Return-Path: <".$FromMail.">\n";
	if(mail($ToEmail, $sub, $msg, $header, '-f'.$FromEmail)){
		echo 'Your massage has been send, we will reply as soon as possible. Thank You';
	}
	else{
		'Sorry we are unable to send your massage please try after some time.';
	}
}

?>
