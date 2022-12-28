<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблицы PHP</title>
    <link type="text/css" rel="stylesheet" href="/CSS/style.css" media="all" />
</head>
<body>
    <h2>Задание 1. Таблица истинности PHP</h2>
    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <td><strong><?php echo $a = 0; ?></strong></td>
            <td><strong><?php echo $b = 0; ?></strong></td>
            <td><?php $a = 0; echo (!$a)? (!$a):var_dump(!$a) ?></td>
            <td><?php $a = 0; $b = 0; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></td>
            <td><?php $a = 0; $b = 0; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></td>
            <td><?php $a = 0; $b = 0; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></td>
        </tr>
        <tr>
            <td><strong><?php echo $a = 0; ?></strong></td>
            <td><strong><?php echo $b = 1; ?></strong></td>
            <td><?php $a = 0; echo (!$a)? (!$a):var_dump(!$a) ?></td>
            <td><?php $a = 0; $b = 1; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></td>
            <td><?php $a = 0; $b = 1; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></td>
            <td><?php $a = 0; $b = 1; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></td>
        </tr>
        <tr>
            <td><strong><?php echo $a = 1; ?></strong></td>
            <td><strong><?php echo $b = 0; ?></strong></td>
            <td><?php $a = 1; echo (!$a)? (!$a):var_dump(!$a) ?></td>
            <td><?php $a = 1; $b = 0; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></td>
            <td><?php $a = 1; $b = 0; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></td>
            <td><?php $a = 1; $b = 0; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></td>
        </tr>
        <tr>
            <td><strong><?php echo $a = 1; ?></strong></td>
            <td><strong><?php echo $b = 1 ?></strong></td>
            <td><?php $a = 1; echo (!$a)? (!$a):var_dump(!$a) ?></td>
            <td><?php $a = 1; $b = 1; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></td>
            <td><?php $a = 1; $b = 1; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></td>
            <td><?php $a = 1; $b = 1; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></td>
        </tr>
    </table>
    <h2>Задание 2. Таблица сравнения</h2>
        <h3>Гибкое сравнение в PHP</h3>
        <p>При гибком сравнении оператор осуществляет приведение между двумя различными типами, если они различаются.<br> 
        То есть он сравнивает значение после преобразования типов.</p>
    <table>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <td id="style">true</td>
            <td><?php $a = true; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = true; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = true; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = true; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = true; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = true; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = true; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = true; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        </tr>
        <tr>
            <td id="style">false</td>
            <td><?php $a = false; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = false; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = false; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = false; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = false; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = false; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = false; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = false; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        </tr>
        <tr>
            <td id="style">1</td>
            <td><?php $a = 1; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 1; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 1; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 1; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 1; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 1; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 1; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 1; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        </tr>
        <tr>
            <td id="style">0</td>
            <td><?php $a = 0; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 0; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 0; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 0; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 0; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 0; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 0; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = 0; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        </tr>
        <tr>
            <td id="style">-1</td>
            <td><?php $a = -1; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = -1; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = -1; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = -1; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = -1; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = -1; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = -1; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = -1; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        </tr>
        <tr>
            <td id="style">"1"</td>
            <td><?php $a = "1"; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "1"; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "1"; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "1"; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "1"; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "1"; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "1"; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "1"; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        </tr>
        <tr>
            <td id="style">null</td>
            <td><?php $a = null; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = null; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = null; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = null; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = null; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = null; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = null; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = null; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        </tr>
        <tr>
            <td id="style">"php"</td>
            <td><?php $a = "php"; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "php"; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "php"; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "php"; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "php"; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "php"; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "php"; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
            <td><?php $a = "php"; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        </tr>
    </table>
    <h3>Жёсткое  сравнение в PHP</h3>
    <p>При жестком или строгом сравнении оператор вернет true, только если оба операнда имеют одинаковый тип и одно и то же значение.</p>
    <table>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <td id="style">true</td>
            <td><?php $a = true; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = true; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = true; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = true; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = true; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = true; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = true; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = true; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        </tr>
        <tr>
            <td id="style">false</td>
            <td><?php $a = false; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = false; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = false; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = false; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = false; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = false; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = false; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = false; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        </tr>
        <tr>
            <td id="style">1</td>
            <td><?php $a = 1; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 1; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 1; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 1; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 1; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 1; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 1; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 1; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        </tr>
        <tr>
            <td id="style">0</td>
            <td><?php $a = 0; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 0; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 0; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 0; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 0; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 0; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 0; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = 0; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        </tr>
        <tr>
            <td id="style">-1</td>
            <td><?php $a = -1; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = -1; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = -1; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = -1; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = -1; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = -1; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = -1; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = -1; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        </tr>
        <tr>
            <td id="style">"1"</td>
            <td><?php $a = "1"; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "1"; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "1"; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "1"; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "1"; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "1"; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "1"; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "1"; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        </tr>
        <tr>
            <td id="style">null</td>
            <td><?php $a = null; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = null; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = null; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = null; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = null; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = null; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = null; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = null; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        </tr>
        <tr>
            <td id="style">"php"</td>
            <td><?php $a = "php"; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "php"; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "php"; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "php"; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "php"; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "php"; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "php"; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
            <td><?php $a = "php"; $b = "php"; echo ($a === $b)?($a == $b):var_dump($a === $b) ?></td>
        </tr>
    </table>
</body>
</html>