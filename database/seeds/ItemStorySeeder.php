<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   DB::table('items')->insert([
    
     [ 
          'id' =>1,
          'gender' => 1,
          'items' => 'bag',
          'story' => 'いいバッグ',
          'price' => 10000,
          'kind' => 1,
          'item_brand' => 'コーチ'
        ],
        [
          'id' =>2,
          'gender' => 1,
          'items' => 'hat',
          'story' => 'いいハット',
          'price' => 10000,
          'kind' => 2,
          'item_brand' => 'ハット'
        ],
        [
          'id' =>3,
          'gender' => 1,
          'items' => 'cap',
          'story' => 'いいキャップ',
          'price' => 10000,
          'kind' => 3,
          'item_brand' => 'キャップ'
        ],
         [
          'id' =>4,
          'gender' => 1,
          'items' => 'mac',
          'story' => 'いいマック',
          'price' => 10000,
          'kind' => 4,
          'item_brand' => 'マック'
        ],
        [
          'id' =>5,
          'gender' => 1,
          'items' => 'うちわ',
          'story' => 'いいうちわ',
          'price' => 300,
          'kind' => 5,
          'item_brand' => 'うちわ'
        ],
    
      ]);
    }
}