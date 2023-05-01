<?php if(!($_GET["ctct"]==1)){header("location: http://thisoe.com");die;} ?>
<!DOCTYPE html>
<html lang="zh">
  <head><meta charset="utf-8"><script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script><script src="ctct/j.js"></script> </head>
  <body style="background:white"><center>
    <h1 style='margin-top:30'>ESP32 控制台</h1><h3>by TSK</h3>
      <button type='button' style='padding:12;margin:9'> 开/关灯 </button>
    <h2 style='display:none'><span></span></h2>
    <?php
    $f_ctrl = fopen("ctct/test.txt","w");
    fwrite($f_ctrl,strval(rand()));
    fclose($f_ctrl); ?>
  </center></body>
</html>
