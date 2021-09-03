<?php
			if(isset($_POST['contact']))
			{
				$firstname=$_POST['name'];
				$email=$_POST['email'];
				$comment=$_POST['comment'];
				$to = 'malharbangdiwala03@gmail.com';
       	 		$from = 'admin@companyaddress.in'; 
        		$subject = 'Enquiry(Contact form)'; 
        		$htmlContent = ' <p><h2>You have  recieved an enquiry.</h2><br>
        		
		         <b>Name of customer is '.$firstname.'</b><br>
		    	<b>Email id is '.$email.'</b><br>
		    	<b>'.$firstname.' is looking for '.$comment.'</b><br>
		    	<b>THANK YOU!!!</b>		 
				 </p> '; 
              
                    $headers = "From:<".$from.">"; 
                    $semi_rand = md5(time());  
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
                    $message .= "--{$mime_boundary}--"; 
                    $returnpath = "-f" . $from; 
                    // Send email 
                    $mail = mail($to, $subject, $message, $headers, $returnpath);  
                    if ($mail) {

                        ?><html>
                        <head>
                        <title>Thank You</title>
                        </head>
                        <body>
                        <h1>Thank You</h1>
                        <p>Thank you for your feedback.</p>
                        </body>
                        </html>
                        
                        <?php
                        
                        } else {
                        ?><html>
                        <head>
                        <title>Something went wrong</title>
                        </head>
                        <body>
                        <h1>Something went wrong</h1>
                        <p>We could not send your feedback. Please try again.</p>
                        </body>
                        </html>
                        <?php
                        }
                        ?>
                   
				}
				?>