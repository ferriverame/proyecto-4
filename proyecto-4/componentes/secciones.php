<?php

$inicio = [
    'titulo' => 'Inicio',
    'contenido' => 'Hola, este es el inicio. Que bonito inicio.',
    'imagen' => 'https://www.guidedogs.org/wp-content/uploads/2015/05/Dog-Im-Not.jpg',
];

$shop = [
    'titulo' => 'Shop',
    'contenido' => 'Hola, esta es la tienda. Que tienda más espectacular.',
    'imagen' => 'http://img5.zergnet.com/2309662_300.jpg',
];

$contacto = [
    'titulo' => 'Contacto',
    'contenido' => 'Hola, aquí nos puedes contactar. Wow!',
    'imagen' => 'https://cdn.kinsights.com/cache/84/b0/84b0cf6206203c769e60d12dff2c80d9.jpg',
];

$about = [
    'titulo' => 'About',
    'contenido' => 'Hola, esta es la sección about. Que interesante sección.',
    'imagen' => 'http://img4.zergnet.com/843315_300.jpg',
];

$secciones = [
    'p1' => $inicio,
    'p2' => $shop,
    'p3' => $contacto,
    'p4' => $about,
];

if(isset($_GET['seccion'])){
    $seccion = $_GET['seccion'];
}

if(!isset($_GET['seccion'])){
    $seccion = 'p1';
}

$titulo = $secciones[$seccion]['titulo'];
$contenido = $secciones[$seccion]['contenido'];
$imagen = $secciones[$seccion]['imagen'];

?>