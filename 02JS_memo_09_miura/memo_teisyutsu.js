$(function(){
  //1.Save クリックイベント
  $("#save").on("click", function(){
 //ここにクイックした時の処理を書く
 //alert("ok");
   const name1 = $("#name1").val();
   const name2 = $("#name2").val();

   localStorage.setItem(name1, name2);
   //const html = "<tr><th>key</th><td>value</td></tr>"
   const html = "<tr><th>"+ name1 +"</th><td>"+ name2 +"</td></tr>";
   //const html = "<tr><th>${key}</th><td>{value}</td></tr>";
   $("#list").append(html);

  });
  
  //2.clear クリックイベント
  $("#clear").on("click",function(){
    //ローカルストレージを全削除
    localStorage.clear();    
    $("#list").empty();
  })

  for(let i =0; i < localStorage.length; i++){
    //keyをインデックスを使って取得 
    const name1 = localStorage.key(i);
    console.log(name1);
    //Valueをkeyを使って取得
    const name2 = localStorage.getItem(name1);
    //htme  以下スクリーンショット
    const html = "<tr><th>"+ name1 +"</th><td>"+ name2 +"</td></tr>";
    //listにappendにする
    $("#list").append()
  }
  
  
  //3.ページ読み込み：保存データ取得表示
});