<?php
$access_token =
'427hIu86Wz4W+r6K2gvuRjxsF5KFMOx3riQ4SepQz4iTUcXkM/A5DhbLJ6gTFXQyFDyq0K3RPUWbZwSQy998IuzAoVWyy7EJoUdUmCCfT+UPnj7qQ/Ev3tDLsxYlIqS0c+FIhnPAgCGxNlyGdQ91KgdB04t89/1O/w1cDnyilFU=';

$messages = [
  'type' => 'text',
  // 'text' => 'แทงผู้เล่น'.$player.'จำนวน'.$money.'ชื่อผู้เล่น'.$username.'ยอดคงเหลือ'.$balance.'vid:'.$vid
  'text' => 'ทดสอบส่งข้อความ'
];


$url = 'https://api.line.me/v2/bot/message/push';
$data = [
  'to' => 'Ccab41b434c5bffb33de6b56baa03f642',
  'messages' => [$messages],
];
$post = json_encode($data);
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result . "\r\n";
