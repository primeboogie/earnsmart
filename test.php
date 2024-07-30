<?php

function test1(){
    echo "test1 \n";
    exit;
}

function test2(){
    test1();
    echo "test2";
}


test2();