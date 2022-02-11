<?php

$sub_modules = get_field('sub_modules');

foreach ($sub_modules as $sub_module) {
    $column = $sub_module['column'];

    if ((int)$column == (int)$which) {
      include 'module-tm-' . $sub_module['sub_type'] . ".php"; 
    }
}
