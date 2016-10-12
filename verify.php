<?php
  $access_token = 'ss7WLvH2/cBC59tpgUiJ3ub1RHp6H35oJl0MVZBYgUcD679pgP/76jca7QXlveqmicW1V8JGQSv0rMn0BOr9fPdq4WjV3mD+++itZNNxqeKFfanEtuY/3BIPen4tSWPKsV1kO2Y2KzZtqDnyuAPRiAdB04t89/1O/w1cDnyilFU=';
  $proxy = 'http://fixie:k5WP2SqAZOdD7Ee@velodrome.usefixie.com:80';
  $proxyauth = 'fixie:k5WP2SqAZOdD7Ee';

  $url = 'https://api.line.me/v1/oauth/verify';

  $headers = array('Authorization: Bearer ' . $access_token);

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_PROXY, $proxy);
  curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
  $result = curl_exec($ch);
  curl_close($ch);

  echo $result;
?>
