<?php
return [
    [
        "label" => "Hệ thống",
        "icon" => "email",
        "roles" => ["admin", "superadmin"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Người dùng",
                "module" => "user",
                "type" => "user",
                "function" => "all",
                "roles" => ['user'],
                "permission" => "view.user",
            ],
            [
                "label" => "Cấu hình nhanh",
                "module" => "configuration",
                "type" => "",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.configuration",
            ],
            [
                "label" => "Chuyển hướng 301",
                "module" => "redirector",
                "type" => "",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.redirector",
            ],
            [
                "label" => "Tạo Site-map",
                "module" => "sitemap",
                "type" => "",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.sitemap",
            ],
        ]
    ],
    [
        "label" => "Liên hệ tư vấn",
        "icon" => "email",
        "roles" => ["user"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "contact",
                "type" => "consultant",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.contact",
            ],
            [
                "label" => "Tạo mới",
                "module" => "contact",
                "type" => "consultant",
                "function" => "new",
                "roles" => ["admin", "superadmin"],
                "permission" => "create.contact",
            ],
        ]
    ],
    [
        "label" => "Chuyển mạng giữ số",
        "icon" => "email",
        "roles" => ["admin"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "contact",
                "type" => "network",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.contact",
            ],
            [
                "label" => "Tạo mới",
                "module" => "contact",
                "type" => "network",
                "function" => "new",
                "roles" => ["admin", "superadmin"],
                "permission" => "create.contact",
            ],
        ]
    ],
    [
        "label" => "Thay sim 4G",
        "icon" => "email",
        "roles" => ["user"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "contact",
                "type" => "subscribes",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.contact",
            ],
            [
                "label" => "Tạo mới",
                "module" => "contact",
                "type" => "subscribes",
                "function" => "new",
                "roles" => ["admin", "superadmin"],
                "permission" => "create.contact",
            ],
        ]
    ],
    [
        "label" => "Các bài viết",
        "icon" => "email",
        "roles" => ["admin"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "posts",
                "type" => "pages",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.posts",
            ],
            [
                "label" => "Tạo mới",
                "module" => "posts",
                "type" => "pages",
                "function" => "new",
                "roles" => ["admin", "superadmin"],
                "permission" => "create.posts",
            ],
        ]
    ],
    [
        "label" => "Menu",
        "icon" => "email",
        "roles" => ["user"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "menu",
                "type" => "",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.menu",
            ],
        ]
    ],
    [
        "label" => "Điện thoại",
        "icon" => "email",
        "roles" => ["user"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "products",
                "type" => "phone",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.product",
            ],
            [
                "label" => "Tạo mới",
                "module" => "products",
                "type" => "phone",
                "function" => "new",
                "roles" => ["admin", "superadmin"],
                "permission" => "create.product",
            ],
            [
                "label" => "Danh mục",
                "module" => "categories",
                "type" => "phone",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.product",
            ],
        ]
    ],
    [
        "label" => "Sim",
        "icon" => "email",
        "roles" => ["admin"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "products",
                "type" => "sim",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.product",
            ],
            [
                "label" => "Tạo mới",
                "module" => "products",
                "type" => "sim",
                "function" => "new",
                "roles" => ["admin", "superadmin"],
                "permission" => "create.product",
            ],
            [
                "label" => "Danh mục",
                "module" => "categories",
                "type" => "sim",
                "function" => "all",
                "roles" => ["admin", "superadmin"],
                "permission" => "view.product",
            ],
        ]
    ],

];
