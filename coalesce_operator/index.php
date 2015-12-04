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
    <pre class="code coalesce1">
    <?php
    $a = isset($a) ? $a : 'index';
    var_dump($a);
    ?>
    </pre>
    <h5>PHP 7: isset($b) ?? 'index';</h5>
    <pre class="code coalesce1">
    <?php
    $b = $b ?? 'index';
    var_dump($b);
    ?>
    </pre>
    <input id="display" type="button" value="Show" onclick="show('coalesce1');">
    <hr>

    <h3>Lồng nhiều toán tử:</h3>
    <pre>
    $x = NULL;
    $y = NULL;
    $z = 3;
    var_dump($x ?? $y ?? $z);
    </pre>
    <pre class="code coalesce2">
    <?php
    $x = NULL;
    $y = NULL;
    $z = 3;
    var_dump($x ?? $y ?? $z);
    ?>
    </pre>
    <input id="display" type="button" value="Show" onclick="show('coalesce2');">
    <hr>

    <h3>Dùng với mảng:</h3>
    <pre>
    $x = ["c" => "meaningful_value"];
    var_dump($x["a"] ?? $x["b"] ?? $x["c"]);
    </pre>
    <pre class="code coalesce3">
    <?php
    $x = ["c" => "meaningful_value"];
    var_dump($x["a"] ?? $x["b"] ?? $x["c"]);
    ?>
    </pre>
    <input id="display" type="button" value="Show" onclick="show('coalesce3');">
    <hr>

    <h3>Sự ưu tiên:</h3>
    <pre>
    var_dump(2 ?? 3 ? 4 : 5); => ???
    var_dump(0 || 2 ?? 3 ? 4 : 5); => ???
    </pre>
    <div class="code coalesce4">
    <?php
    echo '(2 ?? 3) ? 4 : 5  => '.var_dump(2 ?? 3 ? 4 : 5)."<br>";
    echo '((0 || 2) ?? 3) ? 4 : 5  => '.var_dump(0 || 2 ?? 3 ? 4 : 5)."<br>"
    ?>
    </div>
    <input id="display" type="button" value="Show" onclick="show('coalesce4');">
</body>
</html>