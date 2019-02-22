<?php		

    if($_POST["texthidden"] == "") 
	{
		
		$name 			= ($_POST["name"]);
		$designation 	= ($_POST["designation"]);
		$company 		= ($_POST["company"]);
		$email 	 		= ($_POST["email"]);

		$to = "info@avtarinc.com";
		//$cc = "rangaraj@niyati.com";
		$from= 'info@avtarinc.com';
		$sub = "Contact Form";
		$headers ="From:".$from."\r\n";
		//$headers .= "cc: ".$cc." \r\n";
		$headers .= "MIME-Version: 1.0\n"; //#-- Mime version
		$headers .= "Content-Type: text/HTML; charset=ISO-8859-1\n";
		$headers .= "Content-Transfer-Encoding: 8bit\n\n";
		
		?>			
				<?PHP 	
						ob_start();
						require_once("contact_enquiry_mailer.php");
						$message = ob_get_contents();
						ob_end_flush();
				?>	
 <?PHP
		mail($to,$sub,$message,$headers);
        ob_flush();
		//echo "success";
		//die();
			?>
<?
     }//fake
	  else
	 {//fake
	// echo "error";
?>	 
<?PHP
	}	//fake
?>