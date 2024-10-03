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

function tampilkanMenuBertingkat (array $menu, $level = 0){
    echo str_repeat("\t", $level) . "<ul>";
    foreach ($menu as $item){
        echo str_repeat("\t", $level + 1). "<li>";
        echo $item['nama'];

        if (isset($item['submenu'])){
            tampilkanMenuBertingkat($item['submenu'], $level + 1);
        }
        echo "</li>";
    }
    echo str_repeat("\t", $level). "</ul>";
}

tampilkanMenuBertingkat($menu);

?>