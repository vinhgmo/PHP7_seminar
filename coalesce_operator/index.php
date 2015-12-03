<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Null Coalesce Operator</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="../jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../action.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <h2>Null Coalesce Operator ??</h3>

    <h3>So sánh với version cũ:</h3>
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

    <h3>Lồng nhiều toán tử:</h3>
    <pre>
    $x = NULL;
    $y = NULL;
    $z = 3;
    var_dump($x ?? $y ?? $z); // int(3)
    </pre>
    <?php
    $x = NULL;
    $y = NULL;
    $z = 3;
    var_dump($x ?? $y ?? $z); // int(3)
    ?>
    <hr>

    <h3>Dùng với mảng:</h3>
    <pre>
    $x = ["c" => "meaningful_value"];
    var_dump($x["a"] ?? $x["b"] ?? $x["c"]); // string(16) "meaningful_value"
    </pre>
    <?php
    $x = ["c" => "meaningful_value"];
    var_dump($x["a"] ?? $x["b"] ?? $x["c"]); // string(16) "meaningful_value"
    ?>
    <hr>

    <h3>Sự ưu tiên:</h3>
    <pre>
    var_dump(2 ?? 3 ? 4 : 5); => ???
    var_dump(0 || 2 ?? 3 ? 4 : 5); => ???
    </pre>
    <?php
    echo '(2 ?? 3) ? 4 : 5';
    var_dump(2 ?? 3 ? 4 : 5);
    echo '((0 || 2) ?? 3) ? 4 : 5';
    var_dump(0 || 2 ?? 3 ? 4 : 5);
    ?>
</body>
</html>