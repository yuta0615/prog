$(function(){
    $("#button_0").on("click",function(){
      const janken = Math.ceil(Math.random() * 3);
      if(janken == 1){
          $("#result").html('相手も本気のグーでした');
          $("#judgment").html('<あいこ>');
      }else if(janken == 2){
          $("#result").html('相手は弱気のチョキでした');
          $("#judgment").html('あなたの勝ち。本気は世界を変えられる');
      }else {
          $("#result").html('相手は本気のパーでした);
          $("#judgment").html('あなたの負け');
      }
})
  });    

  $(function(){
    $("#button_1").on("click",function(){
      const janken = Math.ceil(Math.random() * 3);
      if(janken == 1){
        $("#result").html('相手は本気のグーでした');
        $("#judgment").html('あなたの負け');
    }else if(janken == 2){
        $("#result").html('相手も本気のチョキでした');
        $("#judgment").html('<あいこ>');
    }else {
        $("#result").html('相手は弱気のパーでした');
        $("#judgment").html('あなたの勝ち。本気は世界を変えられる');
    }
})
  });  
 
  $(function(){
    $("#button_2").on("click",function(){
      const janken = Math.ceil(Math.random() * 3);
     if(janken == 1){
          $("#result").html('相手は弱気のグーでした');
          $("#judgment").html('あなたの勝ち。本気は世界を変えられる');
      }else if(janken == 2){
          $("#result").html('相手は本気のチョキでした');
          $("#judgment").html('あなたの負け');
      }else {
          $("#result").html('相手も本気のパーでした');
          $("#judgment").html("あいこ");
      }
})
  });    

   $(function(){
    $("#button_3").on("click",function(){
      document.getElementById('judgment').textContent = '押した時点でゴミ人間'
})
   });