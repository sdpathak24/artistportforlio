<?php
//$insert = false;
$con = mysqli_connect("localhost","id17722968_contact_page","Shwalla_cont123","id17722968_contact");

/*if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}*/

mysqli_select_db($con, "website_contact");

$name = $_POST['name'];
$email = $_POST['contact-email'];
$text = $_POST['text'];

$query = "INSERT INTO `contact_info` (`name`, `email`, `text`, `dt`) VALUES ('$name', '$email', '$text', current_timestamp())";



//echo "$query";



mysqli_query($con, $query);


header("location:contact.php");

//INSERT INTO `newsletter_emalis` (`id`, `email`, `dt`) VALUES ('1', 'news@emil.com', current_timestamp());
?>