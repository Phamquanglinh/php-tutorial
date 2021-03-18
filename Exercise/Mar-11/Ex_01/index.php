<html lang="en">
<head>
    <title>Ex_02</title>
    <link rel="stylesheet" href="../../Library/bootstrap.min.css">
</head>
<body>
<?php
$str = 'Write a function countWords ($str) that takes any string of characters and finds the number of times each string occurs.';
$arrWord = explode(' ', $str);
$result = array_count_values($arrWord);
echo '<pre>';
print_r($result);
echo '</pre>';
?>
</body>
</html>