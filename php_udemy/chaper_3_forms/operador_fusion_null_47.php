<?php

//$name = isset($_GET ['name']) ? $_GET['name'] : 'Anonimo';

$name = $_GET['name'] ?? 'Anonimo';

echo $name;