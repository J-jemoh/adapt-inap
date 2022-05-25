<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2022-03-26 00:57:50',
                'password' => '$2a$12$zh5l1/XTqyEmu0W8ob4XtOvHsK8EbImApWv323dgMLWLDR51dKkxy',
                'remember_token' => 'Hm9c1390EEtNGkNkQslDzYlxUZ07JNsVG2JgHMHUKsFPeBrYEHzJEkiKK3V6',
                'created_at' => '2022-03-26 00:57:50',
                'updated_at' => '2022-03-26 00:57:50',
            ),
            1 => array(
                'id' => 2,
                'name' => 'User Owner',
                'email' => 'user@gmail.com',
                'email_verified_at' => '2022-03-26 00:57:50',
                'password' => '$2a$12$zh5l1/XTqyEmu0W8ob4XtOvHsK8EbImApWv323dgMLWLDR51dKkxy',
                'remember_token' => 'Hm9c1390EEtNGkNkQslDzYlxUZ07JNsVG2JgHMHUKsFPeBrYEHzJEkiKK3V6',
                'created_at' => '2022-03-26 00:57:50',
                'updated_at' => '2022-03-26 00:57:50',
            ),
        ));
    }
}
