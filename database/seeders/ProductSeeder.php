<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Acne Cream',
            'price' => 350,
            'description' => '100% Natural Acne Cream.',
            'category' => 'Skincare',
            'image' => 'https://novaclear.eu/wp-content/uploads/2018/12/Acne-Ceram-Pude%C5%82ko-Tuba-Wizualizacja-EN.png',
            'availability' => true,
        ]);
        Product::create([
            'name' => 'Anti-dandruff shampoo',
            'price' => 250,
            'category' => 'Haircare',
            'description' => 'Anti-dandruff shampoo for sensitive scalps.',
            'image' => 'https://static.beautytocare.com/media/catalog/product/cache/global/image/650x650/85e4522595efc69f496374d01ef2bf13/v/i/vichy-dercos-anti-dandruff-shampoo-sensitive-scalps-200ml_2.jpg',
            'availability' => true,
        ]);
        Product::create([
            'name' => 'Eucerin Dry Skin Lotion',
            'price' => 150,
            'category' => 'Skincare',
            'description' => 'Eucerin Dry Skin Lotion for extra dry skin.',
            'image' => 'https://i5.walmartimages.com/asr/5409b1c7-0c3c-49ce-bfb9-1354487dcb1c_1.f87faa170292fdad2c79e8d3b5c88136.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF',
            'availability' => true,
        ]);
        Product::create([
            'name' => 'Taft Hair Spray',
            'price' => 500,
            'category' => 'Haircare',
            'description' => 'Taft Power Hairspray',
            'image' => 'https://dm.henkel-dam.com/is/image/henkel/taft_com_power_cashmere_hairspray_970x1400-wcms-international?scl=1&fmt=png-alpha',
            'availability' => true,
        ]);
    }
}
