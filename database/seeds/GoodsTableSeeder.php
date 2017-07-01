<?php

use Illuminate\Database\Seeder;
use App\Models\Goods as Goods;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(Goods::class,10)->create();
    }
}
