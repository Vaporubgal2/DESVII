<?php
class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
final public function masTests() {
echo "ClaseBase::masTests() llamada\n";
}
}
class ClaseHijo extends ClaseBase {
public function masTests() {
echo "ClaseHijo::masTests() llamada\n";
}
}

//una clase secundaria está intentando sobrecargar un método principal,
//pero ha sido "protegido" marcándolo como final.
?>