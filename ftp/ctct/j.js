/*

欢迎查看源代码！指点批评、合作联络 q780309206

*/
$(document).ready(function(){

  // 载入，并向ESP提供上线信息
  // setInterval(async function(){ //console.clear();
  //   let snum=Math.floor(Math.random()*(10**12));
  //   //console.log(snum);
  //   await $.post(
  //     "ctct/cmd.php?snum="+snum,
  //     {online: 1},
  //     (result,stat) => console.log('Ajax running "'+stat+'", reply: '+result)
  //   );
  // }, 900);

  // 开关灯
  $("button").click( () => {
    $.post(
      "ctct/cmd.php?",
      {esp: 1},
      (result,stat) => console.log('Ajax running "'+stat+'", stat: '+result)
    );
  });

});
