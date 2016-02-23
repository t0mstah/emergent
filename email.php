<?php 
    $myemail = 'qperrot@stanford.edu';//<-----Put Your email address here.
    $email_address = $_POST['email'];

    $to = $myemail;
    $email_subject = "Contact form submission";
    $email_body = "You have received a new message. ".
    " Here are the details...\n".
    "Email: $email_address\n";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    @mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: http://web.stanford.edu/~tfang17/emergent/success.html');
?>

