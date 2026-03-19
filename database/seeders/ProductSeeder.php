<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Thêm thư viện gọi Database
use Carbon\Carbon; // Thêm thư viện xử lý thời gian

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Xóa sạch kho cũ (nếu có) để test không bị trùng lặp
        DB::table('products')->truncate();

        // 2. Tạo danh sách 8 sản phẩm ảo với link ảnh Unsplash siêu đẹp
        $products = [
            [
                'name' => 'Áo Khoác Denim Nam',
                'price' => 550000,
                'image' => 'https://images.unsplash.com/photo-1559551409-dadc959f76b8?auto=format&fit=crop&w=400&q=80',
                'created_at' => Carbon::now(), // Vừa up xong (Sẽ hiện đầu tiên)
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Váy Đỏ Thời Trang Nữ',
                'price' => 1500000,
                'image' => 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?auto=format&fit=crop&w=400&q=80',
                'created_at' => Carbon::now()->subMinutes(10), // Up 10 phút trước
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Áo Thun Cổ Tròn Basic',
                'price' => 250000,
                'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=400&q=80',
                'created_at' => Carbon::now()->subMinutes(20),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Túi Xách Da Cao Cấp',
                'price' => 890000,
                'image' => 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=400&q=80',
                'created_at' => Carbon::now()->subMinutes(30),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Quần Jean Nữ Ống Rộng',
                'price' => 450000,
                'image' => 'https://images.unsplash.com/photo-1541099649105-f69ad21f3246?auto=format&fit=crop&w=400&q=80',
                'created_at' => Carbon::now()->subMinutes(40),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Áo Sơ Mi Nam Công Sở',
                'price' => 350000,
                'image' => 'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?auto=format&fit=crop&w=400&q=80',
                'created_at' => Carbon::now()->subMinutes(50),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mắt Kính Thời Trang',
                'price' => 150000,
                'image' => 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=400&q=80',
                'created_at' => Carbon::now()->subHour(1),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Giày Sneaker Thể Thao',
                'price' => 750000,
                'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=400&q=80',
                'created_at' => Carbon::now()->subHour(2), // Cũ nhất (Sẽ hiện cuối cùng)
                'updated_at' => Carbon::now(),
            ],
        ];

        // 3. Nhét toàn bộ mảng này vào bảng products
        DB::table('products')->insert($products);
    }
}