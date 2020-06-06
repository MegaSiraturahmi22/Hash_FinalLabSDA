<?php 
$query = $_GET['q'];
shell_exec("javac Main.java");
$output = shell_exec("java Main " . $query);
echo $output;