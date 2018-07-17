<?php

spl_autoload_register(function () {
    echo 'spl 1';
});

spl_autoload_register(function () {
    echo 'spl 2';
});


$a = new ClassA();