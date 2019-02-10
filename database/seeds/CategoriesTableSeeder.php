<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert(['name'=>'Allergology‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Andrology‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Anesthesia‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Anesthesia‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Bibliographies‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Bone fractures‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Child development stages','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Cherokee ethnobotany','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Child development stages','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Military medicine‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Men health‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Nephrology‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Neurology‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::table('categories')->insert(['name'=>'Nuclear medicine‎','parent_id'=>0,'created_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
