<?php
require __DIR__ . '/vendor/autoload.php';

use Cowsayphp\Farm;

//header('Content-Type: text/plain');
echo "<pre>";
var_dump($_SERVER);
exit;
$text = "Set a message by adding ?message=<message here> to the URL";
if(isset($_GET['message']) && $_GET['message'] != '') {
	$text = htmlspecialchars($_GET['message']);
}

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo $cow->say($text);
