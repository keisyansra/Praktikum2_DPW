<?php
$menu = [
   [
    "nama" => "beranda"
   ],
   [
    "nama" => "berita",
    "submenu" => [
        [
            "nama" => "wisata",
            "submenu" => [
                [
                    "nama" => "pantai"
                ],
                [
                    "nama" => "gunung"
                ]
            ]
        ],
        [
            "nama" => "kuliner"
        ],
        [
            "nama" => "hiburan"
        ]
    ]
    ],
    [
        "nama" => "tentang"
    ],
    [
        "nama" => "kontak"
    ]
];

function tampilkanMenuBertingkat (array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item){
        echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);

?>