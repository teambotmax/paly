<?php
echo '3333';

$bot = new \LINE\LINEBot(new CurlHTTPClient('XuAPgE5eH13Hbgj7mSSCmqe5wheTgVDhiE805ypPKx1hyHXCXLgshl02rpLCe+rUUVTfBE6SkoXrkRD0c1omm6o8RFZMgCETtwF7nDTKSg3PDQG6OIHE2npC1e3YfWXhvBMcXBwFrF5zE8s9T83cgQdB04t89/1O/w1cDnyilFU='), [
    'channelSecret' => '42776475fbb385f32ab3ce678e6f396c'
]);

$res = $bot->getProfile('U1610895050e906214bd1b1e707e3d2f2');
if ($res->isSucceeded()) {
    $profile = $res->getJSONDecodedBody();
    $displayName = $profile['displayName'];
    $statusMessage = $profile['statusMessage'];
    $pictureUrl = $profile['pictureUrl'];
}
