<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>namelist</title>
        
    </head>
    <body>

<?php
    // フォームデータ送受信確認用コード（本番では削除）
    print '<div style="background-color: skyblue;">';
    print '<p>動作確認用:</p>';
    print_r($_POST);
    print '</div>';
?>

        <a href="namelist.php"><h1>namelist</h1></a>
        <h2>名前登録フォーム</h2>
        <form action="namelist.php" method="POST">
            <input type="text" name="Name" required>
            <input type="submit" name="submit_add_name" value="送信">
        </form>
        <h2>登録された名前</h2>
        <ul>
          <?PHP    ?>
           <li><?PHP  ?></li>
          <?PHP    ?>
        </ul>
     </body>
</html>