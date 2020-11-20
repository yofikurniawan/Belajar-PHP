<?php

session_start();
$_SESSION["test"] = 5;
session_destroy();
echo "a: " . $_SESSION["test"];	// mencetak nilai 5
unset($_SESSION["test"]);
echo "b: " . $_SESSION["test"];	// nilai kosong karena indeks 'test' sudah tidak terdefinisi

?>