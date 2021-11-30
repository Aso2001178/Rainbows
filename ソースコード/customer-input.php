<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>customer</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
    <form action="customer-out.php" method="post">
        パスワード : <input type="text" name="pass">
        <br>
        お名前 : <input type="text" name="name">
        <br>
        住所: <input type="text" name="address">
        <br>
        メールアドレス: <input type="text" name="mail">
        <br>
        <button type="submit" name="action" value="send">確定</button>
    </form>
    </body>
    </html>