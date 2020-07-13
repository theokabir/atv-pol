<?php

require 'animal.php';

class Homem extends Animal{
    function falar(){
        echo "<p>oi</p>";
    }
}


class Cao extends Animal{
    function falar(){
        echo "<p>Au Au</p>";
    }
}

class Gato extends Animal{
    function falar(){
        echo "<p>Miau</p>";
    }
}


?>