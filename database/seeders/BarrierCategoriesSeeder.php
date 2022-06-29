<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarrierCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         \DB::table('barrier_categories')->delete();

        \DB::table('barrier_categories')->insert(array(
            0 => array(
                'id' => 1,
                'category_name' => 'Medical',
                'created_at' => '2022-03-26 13:40:40',
                'updated_at' => '2022-03-26 13:40:40',
            ),
            1 => array(
                'id' => 2,
                'category_name' => 'Transport',
                'created_at' => '2022-03-26 13:40:53',
                'updated_at' => '2022-03-26 13:40:53',
            ),
            2 => array(
                'id' => 3,
                'category_name' => 'Pyscho-social',
                'created_at' => '2022-03-26 13:41:16',
                'updated_at' => '2022-03-26 13:41:16',
            ),
            3 => array(
                'id' => 4,
                'category_name' => 'Clinic Quality',
                'created_at' => '2022-03-27 12:23:00',
                'updated_at' => '2022-03-27 12:23:00',
            ),

            4 => array(
                'id' => 5,
                'category_name' => 'Work,School, and Family',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),
            5 => array(
                'id' => 6,
                'category_name' => 'Access to Care',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),
        ));
    }
}
