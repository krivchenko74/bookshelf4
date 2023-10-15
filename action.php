<?php

$resepient = 'krivchenko.vi74@gmail.com,vyacheslav.krivchenko@yandex.ru';
$siteName = 'Книжкная полка: викторина';

$name = trim($_POST['name']);
$q1 = trim($_POST['q1']);
$q2 = trim($_POST['q2']);
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$q16 = $_POST['q16'];
$q17 = $_POST['q17'];

$message = "ФИ ученика: $name\n\n1: $q1\n2: $q2\n3: $q3\n4: $q4\n5: $q5\n6: $q6\n7: $q7\n8: $q8\n9: $q9\n10: $q10\n11: $q11\n12: $q12\n13: $q13\n14: $q14\n15: $q15\n16: $q16\n17: $q17\n";
$pagetitle = "Ответы на $siteName";
mail($resepient, $pagetitle, $message, "Content-type: text/plain; charset=\n'utf-8'\n From: $resepient")
?>