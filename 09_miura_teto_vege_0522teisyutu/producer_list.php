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

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    // $dsn = 'mysql:dbname=tetovege_unit1;charset=utf8;host=mysql57.tetovege.sakura.ne.jp';
    // $user = 'tetovege';
    // $password = ************;
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//ここでエラーがでる。⇒Warning: Undefined variable $dbh in C:\xampp\htdocs\php_xampp_g's_class\teto_vege\producer_list.php on line 18
    //Fatal error: Uncaught Error: Call to a member function setAttribute() on null in C:\xampp\htdocs\php_xampp_g's_class\teto_vege\producer_list.php:18 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php_xampp_g's_class\teto_vege\producer_list.php on line 18

    // $sql='SELECT code FROM mst_staff WHERE 1';
    $sql='SELECT*FROM mst_staff';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();

    $dbh=null;

    print'生産者一覧<br/><br/>';

    print'<form method="post" action="producer_branch.php">';
    while(true)
    {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false)
        {
            break;
        }
        print'<input type="radio" name="producercode" value="'.$rec['code'].'">';
        print $rec['name'];
        print'<br/>';
    }
    print'<input type="submit" name="disp" value="参照">';
    print'<input type="submit" name="add" value="追加">';
    print'<input type="submit" name="edit" value="修正">';
    print'<input type="submit" name="delete" value="削除">';
    print'</form>';


}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
    ?>
</body>
</html>