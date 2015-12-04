<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Combined Comparison Operator</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="../jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../action.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <h2>Combined Comparison Operator <=> </h2>

    <h3>Kiểu số:</h3>
    <h4>So sánh 1 <=> 2: </h4> <div class="code comparison1"><?php var_dump(1<=>2); ?></div>
    <h4>So sánh 2 <=> 1: </h4> <div class="code comparison1"><?php var_dump(2<=>1); ?></div>
    <h4>So sánh 1 <=> 1: </h4> <div class="code comparison1"><?php var_dump(1<=>1); ?></div>
    <input id="display" type="button" value="Show" onclick="show('comparison1');">
    <hr>

    <h3>Kiểu chuỗi:</h3>
    <h4>So sánh aa <=> ab: </h4> <div class="code comparison2"><?php var_dump('aa'<=>'ab'); ?></div>
    <h4>So sánh ab <=> aa: </h4> <div class="code comparison2"><?php var_dump('ab'<=>'aa'); ?></div>
    <h4>So sánh aa <=> aa: </h4> <div class="code comparison2"><?php var_dump('aa'<=>'aa'); ?></div>
    <input id="display" type="button" value="Show" onclick="show('comparison2');">
    <hr>

    <h3>Kiểu mảng:</h3>
    <h4>So sánh [1,2,3] <=> [1,2,1]: </h4> <div class="code comparison3"><?php var_dump([1,2,3]<=>[1,2,1]); ?></div>
    <h4>So sánh [1,2,1] <=> [1,2,3]: </h4> <div class="code comparison3"><?php var_dump([1,2,1]<=>[1,2,3]); ?></div>
    <h4>So sánh [1,2,3] <=> [1,2,3]: </h4> <div class="code comparison3"><?php var_dump([1,2,3]<=>[1,2,3]); ?></div>
    <input id="display" type="button" value="Show" onclick="show('comparison3');">
    <hr>

    <h3>Kiểu đối tượng:</h3>
    <?php
        $a = (object) ["x" => "1"];
        $b = (object) ["x" => "2"];
        $c = (object) ["x" => "1"];
    ?>
    <pre>
        $a = (object) ["x" => "1"];
        $b = (object) ["x" => "2"];
        $c = (object) ["x" => "1"];
    </pre>
    <h4>So sánh $a <=> $b: </h4> <div class="code comparison4"><?php var_dump($a <=> $b); ?></div>
    <h4>So sánh $b <=> $a: </h4> <div class="code comparison4"><?php var_dump($b <=> $a); ?></div>
    <h4>So sánh $a <=> $c: </h4> <div class="code comparison4"><?php var_dump($a <=> $c); ?></div>
    <input id="display" type="button" value="Show" onclick="show('comparison4');">
    <hr>

    <h2>Ứng dụng</h2>
    <?php
    $data = [2, 5, 1, 9, 0];
    usort($data, function ($left, $right) {
        return $left <=> $right;
    });
    ?>
    <pre>
    $data = [2, 5, 1, 9, 0];
    usort($data, function ($left, $right) {
        /*
        if ($a==$b)
        {
            return 0;
        }
        return ($left < $right)?-1:1;
        */

        return $left <=> $right;
    });
    </pre>

    <h4>Kết quả:</h4>
    <pre class="code comparison5">
    <?php
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    ?>
    </pre>

    <input id="display" type="button" value="Show" onclick="show('comparison5');">
</body>
</html>