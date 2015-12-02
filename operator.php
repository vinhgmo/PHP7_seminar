<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seminar</title>
</head>
<body>
    <h3>Combined Comparison Operator <=> </h3>
    <h5>So sánh 1 <=> 2: </h5> <?php var_dump(1<=>2); ?>
    <h5>So sánh 2 <=> 1: </h5> <?php var_dump(2<=>1); ?>
    <h5>So sánh 1 <=> 1: </h5> <?php var_dump(1<=>1); ?>

    <h3>Null Coalesce Operator ??</h3>
    <h5>Pre PHP 7: </h5>
    <?php
    $a = isset($a) ? $a : 'index';
    var_dump($a);
     ?>
    <h5>PHP 7: </h5>
    <?php
    $b = 1;
    $b = isset($b) ?? 'index';
    var_dump($b);
     ?>
</body>
</html>
