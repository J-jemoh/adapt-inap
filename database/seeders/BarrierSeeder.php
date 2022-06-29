<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('barriers')->delete();

        \DB::table('barriers')->insert(array(
            0 => array(
                'id' => 1,
                'category_id' => '1',
                'barrier_name'=>'Felt too sick to come to clinic',
                'created_at' => '2022-03-26 13:40:40',
                'updated_at' => '2022-03-26 13:40:40',
            ),
            1 => array(
                'id' => 2,
                'category_id' => '1',
                'barrier_name'=>'Caregiver felt too sick to come to clinic ',
                'created_at' => '2022-03-26 13:40:53',
                'updated_at' => '2022-03-26 13:40:53',
            ),
            2 => array(
                'id' => 3,
                'category_id' => '2',
                'barrier_name'=>'Transportation problems ',
                'created_at' => '2022-03-26 13:41:16',
                'updated_at' => '2022-03-26 13:41:16',
            ),
            3 => array(
                'id' => 4,
                'category_id' => '3',
                'barrier_name'=>'Because I went to someone who tried / is trying to cure me by prayer / religious rituals.',
                'created_at' => '2022-03-27 12:23:00',
                'updated_at' => '2022-03-27 12:23:00',
            ),

            4 => array(
                'id' => 5,
                'category_id' => '3',
                'barrier_name'=>'Alcohol consumption',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),
            5 => array(
                'id' => 6,
                'category_id' => '5',
                'barrier_name'=>'Work interference ',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),
             6 => array(
                'id' => 7,
                'category_id' => '5',
                'barrier_name'=>'AYA/Caregiver attended funeral',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),
             7 => array(
                'id' => 8,
                'category_id' => '4',
                'barrier_name'=>'Transition to the adult clinic',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),
             8 => array(
                'id' => 9,
                'category_id' => '4',
                'barrier_name'=>'The clinic was too crowded',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),
             9 => array(
                'id' => 10,
                'category_id' => '6',
                'barrier_name'=>'Funds to get to the clinic ',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),
             10 => array(
                'id' => 11,
                'category_id' => '6',
                'barrier_name'=>'Didn’t have enough time for the clinic',
                'created_at' => '2022-03-27 12:43:34',
                'updated_at' => '2022-03-27 12:43:34',
            ),

        ));
    }
}
