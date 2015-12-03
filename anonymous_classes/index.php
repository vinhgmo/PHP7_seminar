<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anonymous Classes</title>
</head>
<body>
    <h2>Anonymous Classes</h2>
    <?php
    var_dump(new class('xxx') {
        public function __construct($i) {
            $this->i = $i;
        }
    });
    ?>

</body>
</html>