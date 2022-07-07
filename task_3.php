<?php
$fullName ='';
$fio = '';
$surnameAndInitials = '';


$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста, Имя".PHP_EOL);
fscanf(STDIN, "%s\n", $nameUser);
$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста,Фимилию".PHP_EOL);
fscanf(STDIN, "%s\n", $lastnameUser);
$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"Введите, пожалуйста,Отчество".PHP_EOL);
fscanf(STDIN, "%s\n", $patronymicUser);



$stderr = fopen('php://stderr', 'w');
fwrite($stderr,"$nameUser $lastnameUser $patronymicUser");