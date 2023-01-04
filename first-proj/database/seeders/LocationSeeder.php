<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('locations')->truncate();
        DB::table('locations')->insert([
            [
                'name' => 'Hà Nội',
                'description' => 'Hà Nội là thủ đô, thành phố trực thuộc trung ương và là một đô thị loại đặc biệt của nước Cộng hòa Xã hội chủ nghĩa Việt Nam',
                'image' => 'https://images.unsplash.com/photo-1616486410185-81af2d32a2af?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=686&q=80',
                'region_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Sài Gòn',
                'description' => 'Sài Gòn là một thành phố đông đúc, và có vẻ như nó là nơi không bao giờ ngủ. Vì đây là nơi tập hợp nhiều người với nhiều nên văn hóa trên khắp cả nước',
                'image' => 'https://images.unsplash.com/photo-1599292098336-638c39983054?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=626&q=80',
                'region_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Quảng Bình',
                'description' => 'Tỉnh Quảng Bình nằm ở Bắc Trung Bộ, Việt Nam, với diện tích tự nhiên là 8.065 km2, dân số năm 2019 là 895.430 người.',
                'image' => 'https://images.unsplash.com/photo-1638793771530-a2de5712385a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
                'region_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Tam Đảo',
                'description' => 'Tam Đảo là một dãy núi đá ở vùng Đồng bằng Bắc Bộ Việt Nam, nằm trên địa bàn thành phố Hà Nội và ba tỉnh Vĩnh Phúc, Thái Nguyên, Tuyên Quang',
                'image' => 'https://images.unsplash.com/photo-1588559353556-4356caea551f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80',
                'region_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Cà Mau',
                'description' => 'Cà Mau là vùng đất thấp, thường xuyên bị ngập nước. Cà Mau có 5 nhóm đất chính gồm: đất phèn, đất than bùn, đất bãi bồi, đất mặn và đất kênh rạch',
                'image' => 'https://images.unsplash.com/photo-1601106835242-df0921bad4f3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80',
                'region_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Đà Nẵng',
                'description' => 'Đà Nẵng là thành phố lớn thứ 4 ở Việt Nam sau Thành phố Hồ Chí Minh, Hà Nội và Hải Phòng về đô thị hóa và phát triển kinh tế – xã hội',
                'image' => 'https://images.unsplash.com/photo-1603852452378-a4e8d84324a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
                'region_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Quảng Ninh',
                'description' => 'Quảng Ninh là tỉnh miền núi, trung du nằm ở vùng duyên hải, với hơn 80% đất đai là đồi núi',
                'image' => 'https://images.unsplash.com/photo-1573270689103-d7a4e42b609a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                'region_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
