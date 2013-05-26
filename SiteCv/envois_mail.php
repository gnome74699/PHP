
<?php
	
	if(!@empty($_POST["email"]) && !@empty($_POST["content"]) && !@empty($_POST["objet"])) // si les POST existent et ne sont pas vides
		{
			 //-----------------------------------------------
			 //DECLARE LES VARIABLES
			 //-----------------------------------------------
		
			 $destinataire= 'tardieu.sidoine@gmail.com';
			 $email_expediteur= $_POST["email"];
			 $email_reply= $_POST["email"];
			 $nom = $_POST["name"];
			 $prenom = $_POST["surname"];
			 $message_html = $_POST["content"];
			 
		
			 //-----------------------------------------------
			 //HEADERS DU MAIL
			 //-----------------------------------------------
		
			 $headers = 'From: '.$prenom.' '.$nom.' <'.$email_expediteur.'>'."\n";
			 $headers .= 'Return-Path: <'.$email_reply.'>'."\n";
			 $headers .= 'MIME-Version: 1.0'."\n";
			 $headers .= 'Content-Type: multipart/alternative; boundary="'.$frontiere.'"';
		
		
			 
		
			 if(mail($destinataire, $_POST["objet"] , $message_html ,$headers))
			 {
				  echo 'Le mail a été envoyé';
				  
			 }
			 else
			 {
				  echo 'Le mail n\'a pu être envoyé';
				  
			 }
		}
		else {
			echo ' Certain champs de sont pas remplis';
			}
?> 


