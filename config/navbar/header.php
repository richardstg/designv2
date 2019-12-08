<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom04",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport för Kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport för Kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport för Kmom06.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "rapport/designelement",
                        "title" => "Rapport för Kmom06.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "rapport/designprinciper",
                        "title" => "Rapport för Kmom06.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogginlägg.",
            /*"submenu" => [
                "items" => [
                    [
                        "text" => "Mitt tredje inlägg",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Mitt tredje inlägg.",
                    ],
                    [
                        "text" => "Mitt andra inlägg",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Mitt andra inlägg.",
                    ],
                    [
                        "text" => "Mitt första inlägg",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Mitt första inlägg.",
                    ],
                ],
            ],*/
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Testsida för olika konstruktioner.",
        ],
    ],
];
