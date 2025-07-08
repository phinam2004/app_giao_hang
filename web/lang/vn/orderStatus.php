<?php

use App\Enums\OrderStatus;

return [
    OrderStatus::PENDING          => 'Chờ xử lý',
    OrderStatus::ACCEPT           => 'Đã chấp nhận',
    OrderStatus::PREPARING        => 'Đang chuẩn bị',
    OrderStatus::PREPARED         => 'Đã chuẩn bị',
    OrderStatus::OUT_FOR_DELIVERY => 'Đang giao hàng',
    OrderStatus::DELIVERED        => 'Đã giao',
    OrderStatus::CANCELED         => 'Đã hủy',
    OrderStatus::REJECTED         => 'Từ chối',
    OrderStatus::RETURNED         => 'Đã trả lại',


];
