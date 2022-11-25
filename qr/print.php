<?
$id = $_GET['id'];
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include_once("class.php");
ob_end_clean();
Header('Content-type: image/png');
$text = 'https://node2.treym.ru/detail/?id=';
$text = $text.$id;
echo base64_decode((new QrCode($text))->outputCustomPng(300));
?>