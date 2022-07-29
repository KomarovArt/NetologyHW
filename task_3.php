<?php
$fullName ='';
$fio = '';
$surnameAndInitials = '';
$pattern='/^\S/';
$array=[];

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

echo iconv_get_encoding($outNameUser[0][0]).PHP_EOL;
echo $outNameUser[0][0].PHP_EOL;
echo $outLastNameUser[0][0].PHP_EOL;
echo $outPatronymicUser[0][0].PHP_EOL;
//вывод фио
$fio = strtoupper($outNameUser[0][0]).strtoupper($outLastNameUser[0][0]).strtoupper($outPatronymicUser[0][0]);
echo $fio.PHP_EOL;

//вывод Фамилия Имя Отчество
$fullName = preg_replace($pattern, strtoupper($outNameUser[0][0]), $nameUser).' '.preg_replace($pattern, strtoupper($outLastNameUser[0][0]), $lastnameUser).' '.preg_replace($pattern, strtoupper($outPatronymicUser[0][0]), $patronymicUser);
echo $fullName.PHP_EOL;

//вывод Фамилия И.О.
$surnameAndInitials = preg_replace($pattern, strtoupper($outNameUser[0][0]), $nameUser).' '.strtoupper($outLastNameUser[0][0]).'.'.strtoupper($outPatronymicUser[0][0]);
echo $surnameAndInitials.PHP_EOL;