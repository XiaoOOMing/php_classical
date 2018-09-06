<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/9/5
 * Time: 16:22
 */

// file_get_contents get请求
$page = @file_get_contents('http://api.linkedin.com/v1/people/~?format=json');
//var_dump($page);

// Curl
$access_token = 'AQRXxzcsjsTMHj6LwKt6NwMnV3w1AWnDTuH21qaQiQpaB4TF7NMl4W8GwpE3WcpIW3NvS2tmhMWTQs6GvtJptxwnApfSo_VU1Z9IFd32K7RGOma08pZsoUGDvIgdW_Rxze_QGz1ICmU7A_PVZUzzm2Ka4dN93aB3vtnus66L';
$c = curl_init('http://api.linkedin.com/v1/people/~?format=json');
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

$page = curl_exec($c);
curl_close($c);
//var_dump($page);


$params = ['oauth2_access_token' => $access_token];
$url = 'https://api.linkedin.com/v1/people/~?format=json&' . http_build_query($params);
$c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($c);
curl_close($c);
var_dump($data);
