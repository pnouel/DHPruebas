<?php

// //leer y escribir archivos en autos.json
//     $autos =[
//         0 =>[
//             "marca"=>"Ford",
//             "modelo"=>"Fiesta",
//             "patente"=>"AEIOU"
//         ],
//         1 =>[
//             "marca"=>"Renault",
//             "modelo"=>"Sandero",
//             "patente"=>"iiiii"
//         ],
//         2 =>[
//             "marca"=>"Toyota",
//             "modelo"=>"Auto",
//             "patente"=>"AEIOU"
//         ]
//         ];

// file_put_contents("autos.json", $json);
    $autos =[
        2 =>[
            "marca"=>"Ford",
            "modelo"=>"Fiesta",
            "patente"=>"AEIOU"
        ]
        ];
        $archivo= file_get_contents("autos.json");   
        
        $json =json_decode($archivo,true);
        // var_dump($json);
       
        $jsonFinal = json_encode($autos);
        file_put_contents("autos.json",$jsonFinal,FILE_APPEND);
        

?>

