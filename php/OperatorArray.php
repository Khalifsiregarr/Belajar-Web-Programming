<?php

    $first = [
        "first_name" => "khalif"
    ];

    $lastname = [
        "last_name" => "siregar"
    ];

    $fullname = [$first + $lastname];

    var_dump($fullname);

    $a = [
        "first_name" => "khalif",
        "last_name" => "siregar"
    ];

    $b  = [
        "last_name" => "siregar",
        "first_name" => "khalif"
    ];

    var_dump($a == $b);
    var_dump($a === $b);