<?php

// class etoClass { 
	// public function etoFunc($add) {
		// echo 'EtoJe'.$add;
	// }
// }
// $cls = new etoClass;
// $cls->etoFunc('String');


// Наследование классов
// class myClass
// {
    // static public function getNew()
    // {
        // return new static;
    // }
// }

// class Child extends myClass
// {}

// $obj1 = new myClass();
// $obj2 = new $obj1;
// var_dump($obj1 !== $obj2);

// $obj3 = myClass::getNew();
// var_dump($obj3 instanceof myClass);

// $obj4 = Child::getNew();
// var_dump($obj4 instanceof Child);


// Подключаемся к базе и выводим данные
$server 	= '127.0.0.1';
$db 		= 'test_my_db';
$name 		= 'root';
$password 	= '';
$table 		= 'my_table';

$db = mysqli_connect( $server, $name, $password, $db );

if (!$db) {
    die('Ошибка соединения: ' . mysqli_error());
}
echo 'Успешно соединились';

$result = mysqli_query($db,"SELECT * FROM $table");
echo "<table border='1'>";

$i = 0;
while($r = $result->fetch_assoc())
{
    if ($i == 0) {
      $i++;
      echo "<tr>";
      foreach ($r as $k => $v) {
        echo "<th>" . $k . "</th>";
      }
      echo "</tr>";
    }
    echo "<tr>";
    foreach ($r as $v) {
      echo "<td>" . $v . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

mysqli_close($db);


