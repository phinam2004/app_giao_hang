<?php


return [
    'title' => 'Cài đặt Food King',
    'next'  => 'Bước tiếp theo',
    'welcome' => [
        'templateTitle' => 'Chào mừng',
        'title'         => 'Cài đặt Food King',
        'message'       => 'Hướng dẫn cài đặt và thiết lập dễ dàng.',
        'next'          => 'Kiểm tra yêu cầu hệ thống',
    ],
    'requirement' => [
        'templateTitle' => 'Bước 1 | Yêu cầu hệ thống',
        'title'         => 'Yêu cầu hệ thống',
        'next'          => 'Kiểm tra phân quyền',
        'version'       => 'phiên bản',
        'required'      => 'bắt buộc'
    ],
    'permission' => [
        'templateTitle'       => 'Bước 2 | Phân quyền',
        'title'               => 'Phân quyền',
        'next'                => 'Thiết lập bản quyền',
        'permission_checking' => 'Đang kiểm tra phân quyền'
    ],
    'license' => [
        'templateTitle'       => 'Bước 3 | Bản quyền',
        'title'               => 'Thiết lập bản quyền',
        'next'                => 'Thiết lập trang web',
        'active_process'      => 'Đang kích hoạt',
        'label'               => [
            'license_key' => 'Mã bản quyền',
            'license_code' => 'Mã xác nhận bản quyền'
        ]
    ],
    'site'     => [
        'templateTitle' => 'Bước 4 | Thiết lập trang web',
        'title'         => 'Thiết lập trang web',
        'next'          => 'Thiết lập cơ sở dữ liệu',
        'label'         => [
            'app_name' => 'Tên ứng dụng',
            'app_url'  => 'Địa chỉ ứng dụng',
        ]
    ],
    'database' => [
        'templateTitle' => 'Bước 5 | Thiết lập cơ sở dữ liệu',
        'title'         => 'Thiết lập cơ sở dữ liệu',
        'next'          => 'Thiết lập cuối cùng',
        'fail_message'  => 'Không thể kết nối tới cơ sở dữ liệu.',
        'label'         => [
            'database_connection' => 'Kết nối cơ sở dữ liệu',
            'database_host'       => 'Máy chủ cơ sở dữ liệu',
            'database_port'       => 'Cổng cơ sở dữ liệu',
            'database_name'       => 'Tên cơ sở dữ liệu',
            'database_username'   => 'Tên đăng nhập',
            'database_password'   => 'Mật khẩu',
        ]
    ],
    'final'    => [
        'templateTitle'   => 'Bước 6 | Thiết lập cuối cùng',
        'title'           => 'Thiết lập cuối cùng',
        'success_message' => 'Ứng dụng đã được cài đặt thành công.',
        'login_info'      => 'Thông tin đăng nhập',
        'email'           => 'Email',
        'password'        => 'Mật khẩu',
        'email_info'      => 'admin@example.com',
        'password_info'   => '123456',
        'next'            => 'Hoàn tất',
    ],
    'installed' => [
        'success_log_message' => 'Cài đặt Food King thành công vào ',
        'update_log_message'  => 'Cập nhật Food King thành công vào ',
    ],
];
