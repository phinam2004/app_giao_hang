<?php

return [
    'label'   => [
        'name'             => 'Tên',
        'email'            => 'Email',
        'phone'            => 'Số điện thoại',
        'item_category_id' => 'Danh mục',
        'tax_id'           => 'Thuế',
        'code'             => 'Mã',
        'discount'         => 'Giảm giá',
        'discount_type'    => 'Loại giảm giá',
        'start_date'       => 'Ngày bắt đầu',
        'end_date'         => 'Ngày kết thúc',
        'amount'           => 'Số tiền',
        'status'           => 'Trạng thái',
        'price'            => 'Giá',
        'item_type'        => 'Loại món',
        'is_featured'      => 'Nổi bật',
        'featured'         => 'Nổi bật',
        'role'             => 'Vai trò',
        'order_serial_no'  => 'Mã đơn hàng',
        'date'             => 'Ngày',
        'total'            => 'Tổng cộng',
        'delivery_charge'  => 'Phí giao hàng',
        'payment_type'     => 'Hình thức thanh toán',
        'payment_status'   => 'Trạng thái thanh toán',
        'quantity'         => 'Số lượng',
        'order_type'       => 'Loại đơn hàng',
        'customer'         => 'Khách hàng',
        'confirm'          => 'Xác nhận',
        'congratulations'  => 'Chúc mừng!',
        'transaction_id'   => 'Mã giao dịch',
        'back_to_home'     => 'Về trang chủ',
        'payment_method'   => 'Phương thức thanh toán',
        'now'              => 'Bây giờ',
        'balance'          => 'Số dư',
        'advance'          => 'Tạm ứng',
        'all_roles'        => 'Tất cả vai trò',
        'all_users'        => 'Tất cả người dùng',
        'user'             => 'Người dùng',
        'title'            => 'Tiêu đề',
        'all_items'        => 'Tất cả món',
        'size'             => 'Kích thước',
        'caution'          => 'Chú ý',
        'description'      => 'Mô tả',
        'online_orders'    => 'Đơn hàng online',
        'sales_report'     => 'Báo cáo doanh số',
        'items_report'     =>  'Báo cáo món ăn',
    ],
    'message' => [
        'validation_error'            => 'Lỗi xác thực.',
        'credentials_error'           => 'Lỗi thông tin đăng nhập.',
        'credentials_invalid'         => 'Thông tin đăng nhập không hợp lệ hoặc bạn đã bị khóa',
        'role_error'                  => 'Lỗi vai trò.',
        'role_exist'                  => 'Vai trò không tồn tại.',
        'login_success'               => 'Đăng nhập thành công.',
        'logout_success'              => 'Đăng xuất thành công.',
        'account_delete_success'      => 'Xóa tài khoản thành công.',
        'account_not_delete'          => 'Bạn không thể xóa tài khoản nếu còn đơn hàng đang hoạt động.',
        'invalid_api_key'             => 'API Key không hợp lệ.',
        'user_match'                  => 'Người dùng không khớp.',
        'something_wrong'             => 'Đã xảy ra lỗi.',
        'permission_denied'           => 'Bạn không có quyền truy cập.',
        'item_match'                  => 'Món ăn không khớp.',
        'offer_item_exist'            => 'Món này đã được thêm vào ưu đãi khác. Khi ưu đãi kết thúc bạn có thể thêm lại món này.',
        'minimum_order_amount'        => 'Số tiền đặt hàng tối thiểu là ',
        'coupon_date_expired'         => 'Mã giảm giá đã hết hạn',
        'coupon_not_exist'            => 'Mã giảm giá không tồn tại',
        'code_is_invalid'             => 'Mã không hợp lệ.',
        'code_is_expired'             => 'Mã đã hết hạn.',
        'you_can_reset_your_password' => 'Bạn có thể đặt lại mật khẩu.',
        'check_your_email_for_code'   => 'Vui lòng kiểm tra email để lấy mã.',
        'check_your_phone_for_code'   => 'Vui lòng kiểm tra điện thoại để lấy mã.',
        'token_created_fail'          => 'Tạo token thất bại.',
        'email_does_not_exist'        => 'Email này không tồn tại.',
        'phone_exist'                 => 'Số điện thoại đã tồn tại.',
        'otp_verify_success'          => 'Xác thực OTP thành công.',
        'register_successfully'       => 'Đăng ký thành công.',
        'select_your_payment_method'  => 'Chọn phương thức thanh toán',
        'payment_successful'          => 'Thanh toán thành công',
        'payment_canceled'            => 'Thanh toán đã bị hủy',
        'payment_gateway_disable'     => 'Cổng thanh toán đang tạm ngưng',
        'token_save'                  => 'Lưu token thành công.',
        'token_is_invalid'            => 'Token không hợp lệ.',
        'order_accept'                => 'Đơn hàng đã được chấp nhận.',
        'feature_disable'             => 'Tính năng này bị tắt ở chế độ demo.',
        'time_slot_exist'             => 'Khung giờ đã tồn tại.',
        'resource_already_used'       => 'Không thể xóa tài nguyên này vì đang liên kết với tài nguyên khác.',
        "only_customer_delete"        => 'Chỉ tài khoản khách hàng mới được xóa',
        'coupon_limit_exceeded'       => 'Đã vượt quá giới hạn sử dụng mã giảm giá',
        'guest_login_is_not_allowed'  => 'Không cho phép đăng nhập khách.',
        'out_of_service_area'         => 'Xin lỗi, địa chỉ này nằm ngoài khu vực phục vụ của chúng tôi.',
        'kiosk_machine_not_found'     => 'Không tìm thấy máy Kiosk.',
        'already_logged_in'           => 'Bạn đã đăng nhập trên thiết bị khác. Vui lòng đăng xuất trước.',
    ]
];