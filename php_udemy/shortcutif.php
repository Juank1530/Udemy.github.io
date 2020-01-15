<?php

// isset sirve para saber si una variable tiene valor o no.

// Este tipo de condicional funciona igual que el de excel: condición;valor NO; valor No
$age = (isset($age)) ?: 'El usuario no ha indicado su edad';

echo 'Edad: ' . $age;








