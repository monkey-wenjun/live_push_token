<?php
  $etime = time() + 86400;
  $domain = $_POST["domain"];
  $key = $_POST["key"];                               
  $path = $_POST["path"];    
  $sign = substr(md5($key.'&'.$etime.'&'.$path), 12, 8).$etime;
  echo $domain.$path.'?_upt='.$sign;
