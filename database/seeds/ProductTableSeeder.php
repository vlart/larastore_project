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
            'imagePath' => 'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwje96fhrfXTAhXJlCwKHXgEAMwQjRwIBw&url=https%3A%2F%2Fwww.discovered.us%2Fstories%2Ftags%2Fart-of-handmade&psig=AFQjCNFkOJwoCWFaNk2vTskd-MzZNyDW4A&ust=1495056531803420',
            'title' => 'Jewelery',
            'price' => '50'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwikq_LtrvXTAhVICZoKHWU1DGoQjRwIBw&url=http%3A%2F%2Fkeywordsuggest.org%2Fgallery%2F491389.html&psig=AFQjCNFkOJwoCWFaNk2vTskd-MzZNyDW4A&ust=1495056531803420',
            'title' => 'Bag',
            'price' => '70'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjRrKa8rvXTAhXHhywKHYdHB3QQjRwIBw&url=https%3A%2F%2Fwww.indiamart.com%2Fjivanjyothandicraft%2Fdiwali-handicraft-item.html&psig=AFQjCNFkOJwoCWFaNk2vTskd-MzZNyDW4A&ust=1495056531803420',
            'title' => 'Cup',
            'price' => '36'
        ]);
        $product->save();
    }
}
