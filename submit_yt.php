<?php 
// require_once 'mail.class.php';
/*$db = mysqli_connect("localhost","id17722968_newsletter_shwalla","NewsletterShwallama123@","id17722968_newsletter");*/
$db = mysqli_connect("localhost:3306","baeafweb_Newsletter","New!Letter123@","baeafweb_newsletter");
$emailss = $_POST['email'];
$insert = mysqli_query($db,"INSERT INTO `newsletter_emalis` (`email`, `dt`) VALUES ('$emailss', current_timestamp())");
/*echo '<div class="newsletter-thankyou">Thank you!</div>';exit;(remove if necessary)*/
$typebox = $emailss;
    $sender = "From: team.shwallama@gmail.com";
    $message = "Thanks for subscribing";

    if(mail($typebox, $sender, $message)){
        
        echo '<div class="newsletter-thankyou">Thank you!</div>';exit;
    
    }else{
       
        echo '<div class="newsletter-thankyou" style="color:red">Error</div>';exit;
       
    }
    /*if(is_null($typebox)){
        echo '<div class="newsletter-thankyou" style="color:red">Error</div>';exit;
    }else{
        echo '<div class="newsletter-thankyou">Thank you!</div>';exit;
    }*/
