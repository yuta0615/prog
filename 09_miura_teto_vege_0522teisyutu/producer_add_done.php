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
    $producer_name=$_POST['name'];
    $producer_pass=$_POST['pass'];

    $producer_name=htmlspecialchars($producer_name,ENT_QUOTES,'UTF-8');
    $producer_pass=htmlspecialchars($producer_pass,ENT_QUOTES,'UTF-8');

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    // $dsn = 'mysql:dbname=tetovege_unit1;charset=utf8;host=mysql57.tetovege.sakura.ne.jp';
    // $user = 'tetovege';
    // $password = ************;
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='INSERT INTO mst_staff(code, name, password) VALUES(NULL,?,?)';
    $stmt=$dbh->prepare($sql);
    $data[]=$producer_name;
    $data[]=$producer_pass;
    $stmt->execute($data);

    $dbh=null;

    print $producer_name;
    print'さんを追加しました。<br/>';

}
catch (Exception $e)
{
    print'ただいま障害により大変ご迷惑お掛けしております。';
    exit();
}

?>

<a href="producer_list.php">戻る</a>
    
</body>
</html>