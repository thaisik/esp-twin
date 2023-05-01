<?php if(!(isset($_GET["inreqfromtskespif32"]))){header("location: http://thisoe.com");die;}
if ($_GET["inreqfromtskespif32"]) {
  $f_ctrl = fopen("ctct/esp.sta","w");
  echo fwrite($f_ctrl,rand());
  fclose($f_ctrl);
}
