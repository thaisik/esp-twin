<?php if((!($_GET["ctct"]==1))||(!(isset($_GET["inreqfromtskespif32"])))){header("location: http://thisoe.com");die;}
if()
  $f_ctrl = fopen("ctct/_ctrl.state","w");
  echo fwrite($f_ctrl,"1");
  fclose($f_ctrl);
