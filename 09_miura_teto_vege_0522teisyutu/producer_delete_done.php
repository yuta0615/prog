<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

try{
    $producer_code=$_POST['code'];
   
    $producer_code=htmlspecialchars($producer_code,ENT_QUOTES,'UTF-8');
   
    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    // $dsn = 'mysql:dbname=tetovege_unit1;charset=utf8;host=mysql57.tetovege.sakura.ne.jp';
    // $user = 'tetovege';
    // $password = ************;
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='DELETE FROM mst_staff WHERE code=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$producer_code;
    $stmt->execute($data);

    $dbh=null;

}
catch (Exception $e)
{
    print'ただいま障害により大変ご迷惑お掛けしております。';
    exit();
}

?>

削除しました。<br/>
<br/>
<a href="producer_list_php">戻る</a>
    
</body>
</html>