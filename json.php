<?php
    $autos =[
        0 =>[
            "marca"=>"Ford",
            "modelo"=>"Fiesta",
            "patente"=>"AEIOU"
        ],
        1 =>[
            "marca"=>"Renault",
            "modelo"=>"Sandero",
            "patente"=>"iiiii"
        ],
        2 =>[
            "marca"=>"Toyota",
            "modelo"=>"Auto",
            "patente"=>"AEIOU"
        ]
        ];

        $json =json_encode($autos);
        // var_dump($json);
        $arrayOriginal= json_decode($json,FILE_APPEND);
        //true nos tra arrays y no un object
        var_dump($arrayOriginal);
        

?>

