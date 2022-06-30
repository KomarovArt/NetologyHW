<?php
fscanf(STDIN, "%d\n", $numberOne);

fscanf(STDIN, "%d\n", $numberTwo);

if($numberTwo===0){
    $stderr = fopen('php://stderr', 'w');
    fwrite($stderr,"Делить на 0 нельзя");
}elseif(is_numeric ($numberOne)&&is_numeric ($numberTwo)){
    echo $numberOne/$numberTwo;
}else{
    $stderr = fopen('php://stderr', 'w');
    fwrite($stderr,"Введите, пожалуйста, число");
}