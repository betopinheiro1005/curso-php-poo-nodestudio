<?php

include_once 'classes/aula12/Noticia.php';

$noticia = New Noticia();
$noticia->create();
$noticia->read();
$noticia->update(3);
$noticia->delete();
