<?php //if((!($_GET["ctct"]==1))||(!(isset($_POST["online"])))){header("location: http://thisoe.com");die;}
if($_POST["online"]) {
  $w=$_GET["snum"];
  $f_ctrl = fopen("test.txt","w+");
  fwrite($f_ctrl,$w);
  fclose($f_ctrl);
  echo "TSK_".$w;
} elseif($_POST["esp"]) {
  $stat = intval(file_get_contents("esp.state"));
  $f_esp = fopen("esp.state","w+");
  $stat ? fwrite($f_esp,"0") : fwrite($f_esp,"1") ;
  fclose($f_esp);
  echo "TSK_ESP_TOGGLED "; if($stat)echo "1 => 0";else echo "0 => 1";
} else echo "__FAIL__";
exit;
