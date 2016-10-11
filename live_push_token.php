<?php
//填写你的推流域名
$domain =  'test.v0.live.com';
//填写你的app名称
$live = 'live'; 
//填写你的流名
$stream = 'test'; 
$rtmp_url = 'rtmp://'.$domain.'/'.$live.'/'.$stream;
//后台设置的token密钥
$secret = 'F8BKOKLWBMryIeHSiLqe2gVVDCjCXCoC'; 
//有效时间，unix时间戳，必须大于当前的时间
$valid_ts = time()+60; 
//过期时间
$expired_ts = time()+10000000; 
//计算token
$token = md5($domain.'/'.$live.'/'.$stream.$valid_ts.$expired_ts.$secret); 
//拼接url
$url = $rtmp_url.'?'.'domain='.$domain.'&'.'token='.$token.'&valid_ts='.$valid_ts.'&expired_ts='.$expired_ts;
echo 'url:'.$url;