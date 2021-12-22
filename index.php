<?php

    // echo "Olá mundo!";

    require_once 'vendor/autoload.php';

    use Cocur\Slugify\Slugify;

    $slug = new Slugify();
    $slug->addRule('geração de', 'criar');
    echo $slug->slugify('Teste com acentuação para geração de slug!');
    // echo $slug->slugify('Teste com acentuação para geração de slug!', '_');
