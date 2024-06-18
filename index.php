<!DOCTYPE html>
<html>
<head>
    <title>Navertica Test</title>
</head>
<body>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        $output = ($i % 3 == 0 ? ($i % 5 == 0 ? 'NAVERTICA' : 'NAV') : ($i % 5 == 0 ? 'ERTICA' : $i));
        echo "<span style='padding-left:10px; padding-right:10px'>{$output}</span>" . ($i < 100 ? "," : "");
    }
    ?>
</body>
</html>
