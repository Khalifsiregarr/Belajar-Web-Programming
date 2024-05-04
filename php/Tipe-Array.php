<?php

    $values = array(10, 9, 8, 7.5);
    var_dump($values);

    $names = ["khalif", "siregar"];
    var_dump($names);

    unset($values[1]);
    var_dump($values);

    array_splice($values, 1,);
    var_dump($values);

    $names[1] = "kevin";
    var_dump($names);

    $names[] = "abraham";
    var_dump($names);

    $khalif = [
        "id" => "khalif",
        "names" => "khalif siregar",
        "ages" => 21,
        "address" => [
            "city" => "bandung",
            "country" => "indonesia"
        ]
    ];
    var_dump($khalif["address"]["country"]);