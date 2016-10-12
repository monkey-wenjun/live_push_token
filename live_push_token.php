<?php
//填写你的推流域名
$domain =  $_POST["domain"];
//填写你的app名称
$live = $_POST["live"];
//填写你的流名
$stream = $_POST["stream"];
$rtmp_url = 'rtmp://'.$domain.'/'.$live.'/'.$stream;
//后台设置的token密钥
$secret = $_POST["secret"];
//有效时间，unix时间戳，必须大于当前的时间
$valid_ts = time()+60+$_POST["valid_ts"]; 
//过期时间
$expired_ts = time()+86400+$_POST["expired_ts"]; 
//计算token
$token = md5($domain.'/'.$live.'/'.$stream.$valid_ts.$expired_ts.$secret); 

$url = $rtmp_url.'?'.'domain='.$domain.'&'.'token='.$token.'&valid_ts='.$valid_ts.'&expired_ts='.$expired_ts;
echo '您计算的token为:'.$url;
echo '<br>';
echo '您输入的有效时间戳为:'.$valid_ts;
echo '<br>';
echo '您输入的有效时间戳为:'.$expired_ts;
