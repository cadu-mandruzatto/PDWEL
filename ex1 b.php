< php
for ($n = 2; $n <= 100; $n++) {
$primo = true;
for ($x = 2; $x < $n; $x++) {
if ($n % $x == 0) {
$primo = false;
break;
}
}
if ($primo) {
echo ' ' . $n;
}
}
?>