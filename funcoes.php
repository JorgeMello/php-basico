<?php
$foo = 25;
$bar = &$foo;      // Esta atribuição é válida.
// $bar = &(24 * 7);  // Inválido; referencia uma expressão sem nome.

function test()
{
   return 25;
}

echo $foo
// $bar = &test();    // Inválido.
?>