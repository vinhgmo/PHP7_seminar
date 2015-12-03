<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Combined Comparison Operator</title>
</head>
<body>
    <h2>Combined Comparison Operator <=> </h2>

    <h3>Kiểu số:</h3>
    <h4>So sánh 1 <=> 2: </h4> <?php var_dump(1<=>2); ?>
    <h4>So sánh 2 <=> 1: </h4> <?php var_dump(2<=>1); ?>
    <h4>So sánh 1 <=> 1: </h4> <?php var_dump(1<=>1); ?>
    <hr>

    <h3>Kiểu chuỗi:</h3>
    <h4>So sánh aa <=> ab: </h4> <?php var_dump('aa'<=>'ab'); ?>
    <h4>So sánh ab <=> aa: </h4> <?php var_dump('ab'<=>'aa'); ?>
    <h4>So sánh aa <=> aa: </h4> <?php var_dump('aa'<=>'aa'); ?>
    <hr>

    <h3>Kiểu mảng:</h3>
    <h4>So sánh [1,2,3] <=> [1,2,1]: </h4> <?php var_dump([1,2,3]<=>[1,2,1]); ?>
    <h4>So sánh [1,2,1] <=> [1,2,3]: </h4> <?php var_dump([1,2,1]<=>[1,2,3]); ?>
    <h4>So sánh [1,2,3] <=> [1,2,3]: </h4> <?php var_dump([1,2,3]<=>[1,2,3]); ?>
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
    <h4>So sánh $a <=> $b: </h4> <?php var_dump($a <=> $b); ?>
    <h4>So sánh $b <=> $a: </h4> <?php var_dump($b <=> $a); ?>
    <h4>So sánh $a <=> $c: </h4> <?php var_dump($a <=> $c); ?>
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
        return $left <=> $right;
    });
    </pre>
    <h4>Kết quả:</h4>
    <?php
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    ?>
</body>
</html>