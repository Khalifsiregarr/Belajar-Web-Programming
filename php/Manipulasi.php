<?php

    $name = "khalif siregar";
    $age = 21;

    echo "name :".$name.PHP_EOL;
    echo "age :".$age.PHP_EOL;

    $valuesString = (string) 100;
    var_dump($valuesString);

    $valuesInt = (int) 100;
    var_dump($valuesInt);

    $valuesFloat = (float) 100;
    var_dump($valuesFloat);

    $name = "khalif";

    echo $name[0];
    echo $name[1];
    echo $name[2]. PHP_EOL;

    echo "Hi $name selamat belajar PHP ya" . PHP_EOL;
    echo "Hi {$name}s selamat belajar PHP ya" . PHP_EOL;