<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Null Coalesce Operator</title>
</head>
<body>
    <h3>Null Coalesce Operator ??</h3>
    <h5>Pre PHP 7: isset($a) ? $a : 'index';</h5>
    <?php
    $a = isset($a) ? $a : 'index';
    var_dump($a);
     ?>
    <h5>PHP 7: isset($b) ?? 'index';</h5>
    <?php
    $b = $b ?? 'index';
    var_dump($b);
     ?>

    <hr>
</body>
</html>