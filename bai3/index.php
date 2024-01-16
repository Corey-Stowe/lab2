<?php
spl_autoload_register('database');
function database($class){
    // trường hợp nếu file nằm trong cùng 1 thư mục
      require_once('databse.php');
    // trường hợp nếu file nằm trong các thư mục con
//    require_once(str_replace('\\','/',$class).'.php');
}
use Core\database as PDO;

$pdo = new PDO();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    home page
</body>
</html>