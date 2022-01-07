<?php 

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);



$to = "zimbacomunicacao@gmail.com";
$subject = "Formulário Contato Thiago UX";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$nome. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: thiagodigregorio@github.com"."\r\n"."Replay-To:".$email."\r\n".
	"X=Mailer:PHP".phpversion();   

if(mail($to,$subject,$message,$header)){

	echo("Email enviado com sucesso");

}else{

	echo("O email não pode ser enviado");

}	

}	 

?>