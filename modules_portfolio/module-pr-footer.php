<?php

    $footers = get_field('footer');

    foreach ($footers as $footer) {
        $column = $footer['column'];
        if ($column == $which) {
            include 'module-pr-footer-' . $footer['type'] . ".php"; 
        }
    }

