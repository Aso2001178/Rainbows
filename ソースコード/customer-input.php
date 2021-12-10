<DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>customer</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Russo+One&display=swap">
        <link rel="stylesheet" href="css/sanitize.css">
        <link rel="stylesheet" href="./css/customer.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
    <body>
    <div class="container">
        <div class="icon"><img src="img/本アイコン.png" width="75" height="75"></div>
        <div class="title" >comic store</div><br>
    <form action="customer-out.php" method="post">
        <div class="pass">
        パスワード : <input type="text" name="pass">
        </div><br>
        <div class="name">
        お名前 : <input type="text" name="name">
        </div><br>
        <div class="ad">
        住所: <input type="text" name="address">
        </div><br>
        <div class="mail">
        メールアドレス: <input type="text" name="mail">
        </div><br>
        <button type="submit" name="action" value="send">確定</button>
    </form>
    </div>
    </body>
    </html>
