<?php
if(isset($_POST['save']))
{
$to="bsinfoit2023@gmail.com";
$subject="message from website - Property Gurus India";
$message="Name:".$_POST["name"]."\n";
$message="phone:".$_POST["phone"]."\n";
$message="Mail:".$_POST["mail"]."\n";
$message="Subject:".$_POST["subject"]."\n";
$message="Message:".$_POST["msg"]."\n";
$headers="From: website.propertygurus@gmail.com";
mail($to,$subject,$message,$headers);
header("Location:index.html");
}

else if(isset($_POST['save1']))
{
$to="bsinfoit2023@gmail.com";
$subject="message from website - Property Gurus India";
$message="Name:".$_POST["name"]."\n";
$message="phone:".$_POST["phone"]."\n";
$message="Mail:".$_POST["mail"]."\n";
$message="Subject:".$_POST["subject"]."\n";
$message="Message:".$_POST["msg"]."\n";
$headers="From: website.propertygurus@gmail.com";
mail($to,$subject,$message,$headers);
header("Location:about-us.html");
}

else if(isset($_POST['save2']))
{
$to="bsinfoit2023@gmail.com";
$subject="message from website - Property Gurus India";
$message="Name:".$_POST["name"]."\n";
$message="phone:".$_POST["phone"]."\n";
$message="Mail:".$_POST["mail"]."\n";
$message="Subject:".$_POST["subject"]."\n";
$message="Message:".$_POST["msg"]."\n";
$headers="From: website.propertygurus@gmail.com";
mail($to,$subject,$message,$headers);
header("Location:project.html");
}

else if(isset($_POST['save3']))
{
$to="bsinfoit2023@gmail.com";
$subject="message from website - Property Gurus India";
$message="Name:".$_POST["name"]."\n";
$message="phone:".$_POST["phone"]."\n";
$message="Mail:".$_POST["mail"]."\n";
$message="Subject:".$_POST["subject"]."\n";
$message="Message:".$_POST["msg"]."\n";
$headers="From: website.propertygurus@gmail.com";
mail($to,$subject,$message,$headers);
header("Location:contact-us.html");
}

else if(isset($_POST['save4']))
{
$to="bsinfoit2023@gmail.com";
$subject="message from website - Property Gurus India";
$message="Name:".$_POST["name"]."\n";
$message="phone:".$_POST["phone"]."\n";
$message="Mail:".$_POST["mail"]."\n";
$message="Subject:".$_POST["subject"]."\n";
$message="Message:".$_POST["msg"]."\n";
$headers="From: website.propertygurus@gmail.com";
mail($to,$subject,$message,$headers);
header("Location:gallery.html");
}


?>