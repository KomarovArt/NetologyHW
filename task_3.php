<?php
ini_set('default_charset', 'UTF-8');
mb_internal_encoding('UTF-8');
iconv_set_encoding('internal_encoding', 'UTF-8');
iconv_set_encoding('output_encoding', 'UTF-8');

$pattern='/^\S/';

$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста, Имя".PHP_EOL);
fscanf(STDIN, "%s\n", $nameUser);
$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста,Фимилию".PHP_EOL);
fscanf(STDIN, "%s\n", $lastnameUser);
$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста,Отчество".PHP_EOL);
fscanf(STDIN, "%s\n", $patronymicUser);


$temporaryVariable = preg_match_all($pattern, $nameUser ,$outNameUser);
$temporaryVariable2 = preg_match_all($pattern, $lastnameUser ,$outLastNameUser);
$temporaryVariable3 = preg_match_all($pattern, $patronymicUser ,$outPatronymicUser);

//вывод фио
$fio = mb_strtoupper ($outLastNameUser[0][0].($outNameUser[0][0]).$outPatronymicUser[0][0]);
echo $fio.PHP_EOL;

//вывод Фамилия Имя Отчество
$fullName = preg_replace($pattern, mb_strtoupper ($outLastNameUser[0][0]), $lastnameUser).' '.preg_replace($pattern, mb_strtoupper ($outNameUser[0][0]), $nameUser).' '.preg_replace($pattern, mb_strtoupper ($outPatronymicUser[0][0]), $patronymicUser);
echo $fullName.PHP_EOL;

//вывод Фамилия И.О.
$surnameAndInitials = preg_replace($pattern,mb_strtoupper ($outLastNameUser[0][0]) , $lastnameUser).' '.mb_strtoupper ($outNameUser[0][0]).'.'.mb_strtoupper ($outPatronymicUser[0][0]).'.';

echo $surnameAndInitials.PHP_EOL;