<?php
return [
    'user' => [
        "label" => "Người dùng",
        "icon" => "email",
        "roles" => ["admin", "superadmin"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "user",
                "type" => "user",
                "function" => "all",
                "roles" => ['user'],
                "permission" => "view.user",
            ],
            [
                "label" => "Tạo mới",
                "module" => "user",
                "type" => "user",
                "function" => "all",
                "roles" => ['user'],
                "permission" => "create.user",
            ],
        ]
    ],
    'script-manager' => [
        "label" => "Quản lý mã nhúng",
        "icon" => "email",
        "roles" => ["admin", "superadmin"],
        "permission" => "view.menuadmin",
        "dropdown" => [
            [
                "label" => "Tất cả",
                "module" => "user",
                "type" => "script",
                "function" => "all",
                "roles" => ['user'],
                "permission" => "view.script-manager",
            ],
            [
                "label" => "Tạo mới",
                "module" => "user",
                "type" => "script",
                "function" => "all",
                "roles" => ['user'],
                "permission" => "create.script-manager",
            ],
            [
                "label" => "Danh mục",
                "module" => "categories",
                "type" => "script",
                "function" => "all",
                "roles" => ['user'],
                "permission" => "view.script-manager",
            ]
        ]
    ]
];
