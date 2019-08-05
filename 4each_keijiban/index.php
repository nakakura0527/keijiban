<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>

	<?php
	
	mb_internal_encoding("utf8");
	$pdo=new PDO("mysql:dbname=nakakura01;host=localhost;","root","mysql");
	$stmt=$pdo->query("select* from 4each_keijiban");
	
	?>

    <div class="header_pic">
        <img src="4eachblog_logo.jpg">
    </div>	
    
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="left">

            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
                <div>
                    <div class="input_form">入力フォーム</div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>

                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <input type="text" class="comments_form" size="35" name="comments">
                </div>


                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>
            
                <?php
                
                    while($row=$stmt->fetch()){
                        echo"<div class='keiji'>";
                        echo"<h3>".$row['title']."</h3>";
                        echo"<div class='contents'>";
                        echo $row['comments'];
                        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                        echo"</div>";
                        echo"</div>";
                    }
                
                ?>

            
        </div>
        
        <div class="right">
            <ul>
                <li class="right_li">人気の記事</li>
                <li>PHPオススメ本</li>
                <li>PHP Myadminの使い方</li>
                <li>今人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
            
            <ul>
                <li class="right_li">オススメリンク</li>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Edipseのダウンロード</li>
                <li>Braketsのダウンロード</li>
            </ul>
            
            <ul>
                <li class="right_li">カテゴリ</li>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
            
        </div>
    </main>

    <footer>
        copyroght(c) internous | 4each blog is the one which provides A to Z about programming.
    </footer>
    
</body>
</html>