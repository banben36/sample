<?php
require_once('datateigi.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Quizzzz</title>
</head>
<body>
  <div class="header">
    <p>クイズコンテスト！！</p>
  </div>
  <form action="send.php" method="post">
    <div class="quiz">
      <?php foreach($mondais as $mondai): ?>
        <div class="modai">
          <p><?php echo $mondai->number ?></p>
          <p><?php echo $mondai->literal ?></p>
          <input type="text" name="<?php echo $mondai->number ?>" value="">
        </div>
      <?php endforeach ?>
    </div>
    <input type="submit" value="採点">
  </form>
</body>
</html>
