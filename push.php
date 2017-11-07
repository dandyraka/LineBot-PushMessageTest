<?php
require_once('./line_class.php');

$channelAccessToken = 'ISI_DISINI'; //Your Channel Access Token
$channelSecret = 'ISI_DISINI'; //Your Channel Secret
$user_id = "USER_ID_TARGET";

$client = new LINEBotTiny($channelAccessToken, $channelSecret);

$push = array(
            'to' => $user_id,									
            'messages' => array(
                            array(
                                'type' => 'text',					
                                'text' => 'Hello World!'
                            )
            )
    );
$client->pushMessage($push);

?>
