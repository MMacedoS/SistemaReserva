<?php

use Illuminate\Database\Seeder;

use App\People;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person = People::create([
            'people_type' => 'LEGAL',
            'name' => 'Mauricio Macedo',
            'nickname' => 'MMSoluções',
            'nif' => '01.001.002/0001-08',
            'phone' => '(25) 1245-0001',
            'address' => 'centro',
        ]);

        $user = User::create([
            'people_id' => $person->id,
            'email' => 'macedo@mms.com',
            'name' => 'Mauricio Macedo',
            'password' => bcrypt('1234567o')
        ]);



        $this->command->info('User '.$user->name.' created');
    }

}
