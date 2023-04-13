<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'product_code' => 'PRD001',
                'product_name' => 'Indomie Goreng',
                'product_category' => 'Food',
                'price' => '3000',
                'quantity' => '100',
            ],
            [
                'product_code' => 'PRD002',
                'product_name' => 'Pocari Sweat',
                'product_category' => 'Drink',
                'price' => '6000',
                'quantity' => '50',
            ], 
            [
                'product_code' => 'PRD003',
                'product_name' => 'Silverqueen',
                'product_category' => 'Snack',
                'price' => '12500',
                'quantity' => '45',
            ], 
            [
                'product_code' => 'PRD004',
                'product_name' => 'Smartphone Samsung Galaxy A52',
                'product_category' => 'Electronic',
                'price' => '4999000',
                'quantity' => '3',
            ], 
            [
                'product_code' => 'PRD005',
                'product_name' => 'Canned Sardines',
                'product_category' => 'Food',
                'price' => '22900',
                'quantity' => '17',
            ], 
            [
                'product_code' => 'PRD006',
                'product_name' => 'Teh Pucuk Harum',
                'product_category' => 'Drink',
                'price' => '3500',
                'quantity' => '20',
            ], 
            [
                'product_code' => 'PRD007',
                'product_name' => 'Bubble Gum',
                'product_category' => 'Snack',
                'price' => '5000',
                'quantity' => '55',
            ], 
            [
                'product_code' => 'PRD008',
                'product_name' => 'Laptop ASUS Vivobook S14',
                'product_category' => 'Electronic',
                'price' => '9999000',
                'quantity' => '7',
            ], 
            [
                'product_code' => 'PRD009',
                'product_name' => 'Pop Mie',
                'product_category' => 'Food',
                'price' => '6000',
                'quantity' => '70',
            ], 
            [
                'product_code' => 'PRD010',
                'product_name' => 'Luwak White Coffee',
                'product_category' => 'Drink',
                'price' => '7000',
                'quantity' => '14',
            ], 
            [
                'product_code' => 'PRD011',
                'product_name' => 'Chitato Lite',
                'product_category' => 'Snack',
                'price' => '11500',
                'quantity' => '18',
            ], 
            [
                'product_code' => 'PRD012',
                'product_name' => 'Sony Mirrorless A6400 Canmera',
                'product_category' => 'Electronic',
                'price' => '16999000',
                'quantity' => '1',
            ], 
            [
                'product_code' => 'PRD013',
                'product_name' => 'Corned Beef Pronas',
                'product_category' => 'Food',
                'price' => '18500',
                'quantity' => '5',
            ], 
            [
                'product_code' => 'PRD014',
                'product_name' => 'Cadbury Chocolate Drink 3 in 1',
                'product_category' => 'Drink',
                'price' => '79900',
                'quantity' => '89000',
            ], 
            [
                'product_code' => 'PRD015',
                'product_name' => 'Choco Pie',
                'product_category' => 'Snack',
                'price' => '17500',
                'quantity' => '18',
            ], 
            [
                'product_code' => 'PRD016',
                'product_name' => 'Smartwatch Apple Watch Series 7',
                'product_category' => 'Electronic',
                'price' => '7999000',
                'quantity' => '3',
            ], 
            [
                'product_code' => 'PRD017',
                'product_name' => 'KOBE Mi Bon Cabe Lv 15',
                'product_category' => 'Food',
                'price' => '5500',
                'quantity' => '22',
            ], 
            [
                'product_code' => 'PRD018',
                'product_name' => 'Milo Less Sugar',
                'product_category' => 'Drink',
                'price' => '129900',
                'quantity' => '19',
            ], 
            [
                'product_code' => 'PRD019',
                'product_name' => 'Oat Choco',
                'product_category' => 'Snack',
                'price' => '20000',
                'quantity' => '9',
            ], 
            [
                'product_code' => 'PRD00',
                'product_name' => 'Speaker Bluetooth JBL Flip 5',
                'product_category' => 'Electronic',
                'price' => '1999000',
                'quantity' => '9',
            ],
        ];
        DB::table('products')->insert($data);
    }
}
