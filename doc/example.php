<?php

$mock = new \Pursehouse\TinyTools\Mock();

foreach( $mock->fruits_array_2 as $k => $v ) {
    echo "$k\r\n";
    foreach( $v->traits_array_3 as $k2 => $v2 ) {
        echo "\t$k2\t{$v2->test}\r\n";
        foreach( $v2[ 'traits_array_2' ] as $k3 => $v3 ) {
            echo "\t\t$k3\t{$v3->test_int_10}\r\n";
            echo "\t\t$k3\t{$v3->test_float_10}\r\n";
        }
    }
    foreach( $v[ 'traits_array_2' ] as $k2 => $v2 ) {
        echo "\t$k2\t{$v2->test}\r\n";
    }
}

