<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テトベジ～生産者様入力～</title>
</head>
<body>
テトベジ生産者登録<br/>
<br/>
<form method="post" action="producer_add_check.php">
生産者名を入力してください。<br/>
<input type="text" name="name" style="width:200px"><br/>
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