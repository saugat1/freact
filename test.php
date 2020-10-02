<?php  

// $pass = "gorkha123";
// $todata = bin2hex($pass);
// echo $todata;
// $tostr = hex2bin($todata);
// echo "\n ". $tostr;

$a = convert_uuencode("what the fuck");

echo $a;
echo "<br>";
echo convert_uudecode($a) . "\n <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>useragent</title>
</head>
<body>
    <script>
        document.write(navigator.userAgent);
    </script>
</body>
</html>