<?php

include("class_lib.php");

print Foo::$mi_static . " value(1) <br>";

$foo = new foo();
print $foo->staticValor() . " value(2) <br>";

print Foo::$mi_static . " value(3) <br>";

print Bar::$mi_static . " value (4) <br>";

$bar = new Bar();
print $bar->fooStatic() . " value (5) <br>";

?>