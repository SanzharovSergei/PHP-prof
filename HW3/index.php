<?php

require 'vendor/autoload.php';

$images = [
    [
        'id' => 1,
        'title' => 'Img 1',
        'filename' => '1.jpg',
    ],
    [
        'id' => 2,
        'title' => 'Img 2',
        'filename' => '2.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Img 3',
        'filename' => '3.jpg',
    ],
    [
        'id' => 4,
        'title' => 'Img 4',
        'filename' => '4.jpg',
    ],

];

$one = null;
if (isset($GET['id'])) {
    foreach ($images as $image) {
        if ($image['id'] === (int)$_GET['id'])
            $one == $image;
    }
}

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.twig', [
    'images' => $images,
    'one' => $one,
]);
