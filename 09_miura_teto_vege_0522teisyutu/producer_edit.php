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
    $producer_code=$_GET['producercode'];

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    // $dsn = 'mysql:dbname=tetovege_unit1;charset=utf8;host=mysql57.tetovege.sakura.ne.jp';
    // $user = 'tetovege';
    // $password = ************;
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT name FROM mst_staff WHERE code=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$producer_code;
    $stmt->execute($data);

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    $producer_name=$rec['name'];

    $dbh=null;

}
catch (Exception $e)
{
    print'ただいま障害により大変ご迷惑お掛けしております。';
    exit();
}

?>

生産者登録修正<br/>
<br/>
生産者コード<br/>
<?php print $producer_code;?>
<br/>
<br/>
<form method="post" action="producer_edit_check.php">
<input type="hidden" name="code" value="<?php print $producer_code;?>">
生産者名<br/>
<input type="text" name="name" style="width:200px" value="<?php print $producer_name;?>"><br/>
パスワードを入力してください。<br/>
<input type="password" name="pass" style="width:100px"><br/>
パスワードをもう一度入力してください。<br/>
<input type="password" name="pass2" style="width:100px"><br/>
<br/>
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>

    
</body>
</html>