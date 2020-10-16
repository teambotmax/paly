<?php
echo '3333';

$bot = new \LINE\LINEBot(new CurlHTTPClient('427hIu86Wz4W+r6K2gvuRjxsF5KFMOx3riQ4SepQz4iTUcXkM/A5DhbLJ6gTFXQyFDyq0K3RPUWbZwSQy998IuzAoVWyy7EJoUdUmCCfT+UPnj7qQ/Ev3tDLsxYlIqS0c+FIhnPAgCGxNlyGdQ91KgdB04t89/1O/w1cDnyilFU='), [
    'channelSecret' => 'f0db7adc857fd16b1666e4e29843b183'
]);

$res = $bot->getProfile('U1610895050e906214bd1b1e707e3d2f2');
if ($res->isSucceeded()) {
    $profile = $res->getJSONDecodedBody();
    $displayName = $profile['displayName'];
    $statusMessage = $profile['statusMessage'];
    $pictureUrl = $profile['pictureUrl'];
}
