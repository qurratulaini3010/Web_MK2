<!DOCTYPE HTML>
<html lang="eng">
<body>

<?php $des = $_POST["description"]  ?>
Ayat ini Mengandungi <?php echo str_word_count($des) ?> patah perkataan<br>
Ayat ini Mengandungi <?php echo strlen($des) ?> huruf <br>

Ayat terbalik: <?php echo strrev($des) ?>
</body>
</html>