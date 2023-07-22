<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Mang_5.php" method="post">

    Text: <input type="text" name="text"><br>
    <button type="submit">Submit</button>
</form>
<?php
$dictionary = [
    "hello" => "xin chào",
    "apple" => "quả táo",
    "book" => "quyển sách",
];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = $_POST["text"];

    if (array_key_exists($input, $dictionary)) {
        echo $input . " => " . $dictionary[$input];
    }
    else {
        echo "That's not in the dictionary!";
    }
}


?>
</body>
</html>