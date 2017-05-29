<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'imagePath' => 'images/prod/Antique-Syrian-Inlaid-Card-Games-Table.jpg',
            'title' => 'Antique Syrian table',
            'price' => '120'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/desklamp.jpg',
            'title' => 'Steampunk desklamp',
            'price' => '55'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/Garden-Furniture-Patio-Set-table.jpg',
            'title' => 'Garden set',
            'price' => '200'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/Leather-Journal-Handmade.jpg',
            'title' => 'Leather journal',
            'price' => '43'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/wooden-rack.jpg',
            'title' => 'Wooden rack',
            'price' => '17'
        ]);
        $product->save();


        $product = new Product([
            'imagePath' => 'images/prod/jewelery1.jpg',
            'title' => 'Crearstone jewelery',
            'price' => '29'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/leatherstrap.jpg',
            'title' => 'Leather watch strap',
            'price' => '14'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/jewelery3.jpg',
            'title' => 'Perl earings',
            'price' => '20'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/towel-template-large.jpg',
            'title' => 'Shower carpet large',
            'price' => '23'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/circlelamp1.jpg',
            'title' => 'Circle metal lamp',
            'price' => '27'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/greenstone-earings.jpg',
            'title' => 'Greenstone earings',
            'price' => '13'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'images/prod/handmade-bag.jpg',
            'title' => 'Mesh bag',
            'price' => '18'
        ]);
        $product->save();


    }
}
