<?php


$value = test2();

function test1(){
   test2();
}

function test2(){
    return test3();
}

function test3(){
    return test4();
}

function test4(){
    return test5();
}

function test5(){
    return "hello";
}
