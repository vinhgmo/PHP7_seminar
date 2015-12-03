<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Type Declarations</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="../jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../action.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <h2>Return Type Declarations</h2>
    <pre>
    function arraysSum(array ...$arrays): array
    {
        return array_map(function(array $array): int {
            return array_sum($array);
        }, $arrays);
    }

    print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));
    </pre>
    <input id="display" type="button" value="Show" onclick="show('return');">
    <pre class="code return">
        <?php
        function arraysSum(array ...$arrays): array
        {
            return array_map(function(array $array): int {
                return array_sum($array);
            }, $arrays);
        }
        print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));
        ?>
    </pre>
</body>
</html>