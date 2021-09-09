<?php
    $result = '無し';
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ</title>
    </head>
    <h1>おみくじ</h1>
    <p>おみくじの結果：<?php print htmlspecialchars($result, ENT_QUOTES,"UTF-8"); ?></p>
    <form action="sample.php" method="POST">
        <button type="submit" name="act" value="draw">おみくじ</button>
    </form>
</html>