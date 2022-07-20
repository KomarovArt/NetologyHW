<?php




$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста, Имя".PHP_EOL);
fscanf(STDIN, "%s\n", $nameUser);
$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста,Фимилию".PHP_EOL);
fscanf(STDIN, "%s\n", $lastnameUser);
$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста,Отчество".PHP_EOL);
fscanf(STDIN, "%s\n", $patronymicUser);


$outNameUser = mb_strtoupper (mb_substr($nameUser ,0,1,'UTF-8'));
$outLastNameUser = mb_strtoupper (mb_substr($lastnameUser , 0 ,1,'UTF-8'));
$outPatronymicUser = mb_strtoupper (mb_substr($patronymicUser, 0 ,1,'UTF-8'));

//вывод фио
$fio = $outLastNameUser.$outNameUser.$outPatronymicUser;
echo $fio.PHP_EOL;

//вывод Фамилия Имя Отчество
$fullName = mb_eregi_replace('^\S', $outLastNameUser, $lastnameUser).' '.mb_eregi_replace('^\S', $outNameUser, $nameUser).' '.mb_eregi_replace('^\S', $outPatronymicUser, $patronymicUser);
echo $fullName.PHP_EOL;


//вывод Фамилия И.О.
$surnameAndInitials = mb_eregi_replace('^\S',$outLastNameUser, $lastnameUser).' '.$outNameUser.'.'.$outPatronymicUser.'.';

echo $surnameAndInitials.PHP_EOL;