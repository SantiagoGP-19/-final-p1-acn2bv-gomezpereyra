<?php 
session_start();
$albums = [
    [
        'id' => 1,
        'title' => 'Hybrid Theory',
        'artist' => 'Linkin Park',
        'categoria' => 'Nu-metal',
        'descripcion' => 'Álbum debut con himnos alternativos y riffs potentes.',
        'imagen' => 'https://picsum.photos/seed/hybrid/400/250',
        'anio' => 2000,
    ],

    [
        'id' => 2,
        'title' => 'Meteora',
        'artist' => 'Linkin Park',
        'categoria' => 'Nu-metal',
        'descripcion' => 'Continuación del sonido característico con producción pulida.',
        'imagen' => 'https://picsum.photos/seed/meteora/400/250',
        'anio' => 2003,
    ],

    [
        'id' => 3,
        'title' => 'In Rainbows',
        'artist' => 'Radiohead',
        'categoria' => 'Alternativo',
        'descripcion' => 'Una exploración íntima y electrónica del rock alternativo.',
        'imagen' => 'https://picsum.photos/seed/inrainbows/400/250',
        'anio' => 2007,
    ],

    [
        'id' => 4,
        'title' => 'OK Computer',
        'artist' => 'Radiohead',
        'categoria' => 'Alternativo',
        'descripcion' => 'Clásico moderno que mezcla electrónica y rock de forma única.',
        'imagen' => 'https://picsum.photos/seed/okcomputer/400/250',
        'anio' => 1997,
    ],

    [
        'id' => 5,
        'title' => 'Back in Black',
        'artist' => 'AC/DC',
        'categoria' => 'Rock clásico',
        'descripcion' => 'Álbum icónico con riffs inolvidables y energía pura.',
        'imagen' => 'https://picsum.photos/seed/backinblack/400/250',
        'anio' => 1980,
    ],

    [
        'id' => 6,
        'title' => 'Demon Days',
        'artist' => 'Gorillaz',
        'categoria' => 'Electrónico',
        'descripcion' => 'Mezcla de electrónica, hip-hop y melodías oscuras.',
        'imagen' => 'https://picsum.photos/seed/demondays/400/250',
        'anio' => 2005,
    ],

    [
        'id' => 7,
        'title' => 'Is This It',
        'artist' => 'The Strokes',
        'categoria' => 'Indie',
        'descripcion' => 'Un referente del indie rock con canciones cortas y pegadizas.',
        'imagen' => 'https://picsum.photos/seed/isthisit/400/250',
        'anio' => 2001,
    ],

    [
        'id' => 8,
        'title' => "Whatever People Say I Am, That's What I'm Not",
        'artist' => 'Arctic Monkeys',
        'categoria' => 'Indie',
        'descripcion' => 'Debut feroz y observador que lanzó a la banda al estrellato.',
        'imagen' => 'https://picsum.photos/seed/arctic/400/250',
        'anio' => 2006,
    ]
];

if (!isset($_SESSION['sugerencias'])) {
    $_SESSION['sugerencias'] = [];
}

$items = array_merge($albums, $_SESSION['sugerencias']);
?>