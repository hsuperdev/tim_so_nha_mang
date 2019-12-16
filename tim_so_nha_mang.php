<?php

    $string = '098.3333.333, 09912345, 0971234, 09712342345, 098.1111.111, 098.822.2222';

    function search($string){
        $MobiFone = [];
        $Viettell = [];
        $Vinaphone = [];
        $data = explode(", ", $string);

        for ($i = 0; $i < count($data); $i++) {
            $phone = substr($data[$i], 0, 3);
            if ($phone == "098") {
                array_push($Viettell, $data[$i]);
            } elseif ($phone == "097") {
                array_push($MobiFone, $data[$i]);
            } else {
                array_push($Vinaphone, $data[$i]);
            }
        }
        getPhone($Viettell, "Viettell: ");
        getPhone($MobiFone, "MobiFone: ");
        getPhone($Vinaphone, "Vinaphone: ");

    }

    function getPhone($arr, $mes) {
        for ($i = 0; $i < count($arr); $i++) {
            echo $mes . $arr[$i] . " ";
        }
    }

    search($string);
?>


