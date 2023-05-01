<?php if(!($_GET["cnct"]==1)) header("location: http://thisoe.com");
  $host = 'thisoe.f3322.net';
  $port = 23333;
  $waitTimeoutInSeconds = 3; // ！！！ fsockopen()函数还需研究，本文件无法直接使用
  if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds))
    header("location: http://thisoe.f3322.net:23333");
  else {
    include "cnct/fp_down.php?down=1";die;
  }
  fclose($fp);
