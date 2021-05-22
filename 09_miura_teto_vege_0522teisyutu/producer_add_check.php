<?php
//  var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テトベジ～生産者確認～</title>
</head>
<body>
    <?php 
    // $producer_code=$_POST['code'];
    $producer_name=$_POST['name'];
    $producer_pass=$_POST['pass'];
    $producer_pass2=$_POST['pass2'];
    
    $producer_name=htmlspecialchars($producer_name,ENT_QUOTES,'UTF-8');
    $producer_pass=htmlspecialchars($producer_pass,ENT_QUOTES,'UTF-8');
    $producer_pass2=htmlspecialchars($producer_pass2,ENT_QUOTES,'UTF-8');

    if($producer_name=='')
    {
        print'生産者名が入力されていません。<br/>';
    }
    else
    {
        print'生産者名：';
        print$producer_name;
        print'<br/>';    
    }

    if($producer_pass=='')
    {
        print'パスワードが入力されていません。<br/>';
    }
    if($producer_pass!=$producer_pass2)
    {
        print'パスワードが一致しません。<br/>';
    }

    if($producer_name==''||$producer_pass==''||$producer_pass!=$producer_pass2)
    {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
    }
    else
    {
        $producer_pass=md5($producer_pass);
        print'<form method="POST" action="producer_add_done.php">';
        print'<input type="hidden" name="name" value="'.$producer_name.'">';
        print'<input type="hidden" name="pass" value="'.$producer_pass.'">';
        print'<br/>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type="submit" value="OK">';
        print'</form>';
    }    
    
    ?>
</body>
</html>