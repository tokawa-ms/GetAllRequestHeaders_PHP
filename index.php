<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Header Checker</title>
</head>
<body>
<h1>リクエストヘッダ全部出力。</h1>
<?php

foreach (getallheaders() as $name => $value) {
    echo "$name: $value </br>";
}

?>
</body>
</html>
