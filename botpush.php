<?php



require "vendor/autoload.php";

$access_token = 'fGQPBQRT9vIBi/ZnjM5fYiyAhAAM1mB4waFwnl4OEPM5rpLqnuCq0Kd6GyG10YcwKuoPbrSKUmeGnEhmSeBi/P/kkdt2d7iiTOkXmaX7xuy70+tjLHLSaaCrVpXtR3Dl63T33LPnt42f4VEIswYLKwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0806b2fdb2e375097093f366a8c1b96d';

$pushID = 'Uce14e6e52c654cb191ad53128a998ad8';
if(isset($_REQUEST['mess'])){
$_mymess = $_REQUEST['mess'];
}else{$_mymess = "Hello"; }
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($_mymess);
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







