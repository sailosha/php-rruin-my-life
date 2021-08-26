$test1 = intVal(1999);

$amount = 19.99 * 100;
$test2 = intVal($amount);
$test3 = intVal("$amount");

echo $test1 . "<br />\n";
echo $test2 . "<br />\n";
echo $test3 . "<br />\n";

// expected output:
// 1999
// 1999
// 1999

// actual output
// 1999
// 1998
// 1999


echo intval("0x1a", 0), "\n";

echo intval("057", 0), "\n";



$arr = array(1,2,3,4,5);
  
// This will print only the type of value
// being converted i.e. 'Array'
echo strval($arr), "\n";
