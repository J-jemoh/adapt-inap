<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParticipantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        \DB::table('participants')->delete();

        \DB::table('participants')->insert(array(
            0 => array(
                'id' => 1,
                'study_id' => 'KLM-0000-001',
                'participant_name'=>'John Doe Test',
                'UPN'=>'12345-0986',
                'age'=>'20',
                'gender'=>'M',
                'participant_nickname'=>'joho',
                'caregiver_name'=>'Joho Junior',
                'caregiver_contact_phone'=>'086574321',
                'caregiver_alt_phone'=>'076574321',
                'relationship_with_participant'=>'Biological mother',
                'location'=>'Kibuye',
                'location_description'=>'we are located in Kibos',
                'barrier_category'=>'1',
                'barriers'=>'2',
                'created_at' => '2022-03-26 13:40:40',
                'updated_at' => '2022-03-26 13:40:40',
            ),
            1 => array(
                'id' => 2,
                'study_id' => 'KLM-0002-002',
                'participant_name'=>'John Doe Test',
                'UPN'=>'12345-0987',
                'age'=>'25',
                'gender'=>'F',
                'participant_nickname'=>'John',
                'caregiver_name'=>'Joho Joh',
                'caregiver_contact_phone'=>'0016574321',
                'caregiver_alt_phone'=>'07657432156',
                'relationship_with_participant'=>'Biological Father',
                'location'=>'Kibos',
                'location_description'=>'we are located in Kibos',
                'barrier_category'=>'1',
                'barriers'=>'4',
                'created_at' => '2022-03-26 13:40:40',
                'updated_at' => '2022-03-26 13:40:40',
            ),
            2 => array(
                'id' => 3,
                'study_id' => 'KLM-0003-003',
                'participant_name'=>'Brayo',
                'UPN'=>'12345-0986',
                'age'=>'20',
                'gender'=>'M',
                'participant_nickname'=>'Brayo m',
                'caregiver_name'=>'Broko Junior',
                'caregiver_contact_phone'=>'0116574321',
                'caregiver_alt_phone'=>'07346574321',
                'relationship_with_participant'=>'Biological mother',
                'location'=>'Kibuye',
                'location_description'=>'we are located in Kibos',
                'barrier_category'=>'1',
                'barriers'=>'2',
                'created_at' => '2022-03-26 13:40:40',
                'updated_at' => '2022-03-26 13:40:40',
            ),

        ));
    }
}
