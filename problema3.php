<?php
$arr = array('foo', 'bar', 'baz');

// Sugestão 1
foreach($arr as &$val) {
  echo $val . "\n";
}

// Sugestão 2
for ($i = 0, $len = count($arr); $i < $len; $i++) {
  echo $arr[$i] . "\n";
}
