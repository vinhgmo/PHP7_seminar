<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scalar Type Declarations</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="../jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../action.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <h2>Coercive</h2>
    <pre>
        // Coercive mode
        function sumOfInts(int ...$ints)
        {
            return array_sum($ints);
        }

        var_dump(sumOfInts(2, '3', 4.1));
    </pre>
    <input id="display" type="button" value="Show" onclick="show('coercive');">
    <div class="code coercive">
        <?php
        function sumOfInts(int ...$ints)
        {
            return array_sum($ints);
        }

        var_dump(sumOfInts(2, '3', 4.1));
        ?>
    </div>

</body>
</html>