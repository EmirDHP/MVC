<?php

// Functions without parameters
function welcome(){

    echo "Welcome to this view";

}

welcome();
echo '<br><br>';

// Functions with parameters
function sayHello($hello){

    echo $hello;
}

sayHello("Hello to everyone");
echo '<br><br>';

// Functions with return
function return1($comeback){
    return $comeback;
}

echo return1("I'm returning this function");
echo '<br><br>';

?>