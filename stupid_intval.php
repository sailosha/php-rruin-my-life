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
