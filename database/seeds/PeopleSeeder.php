<?php

use Illuminate\Database\Seeder;
use App\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = People::create([
            'id' => 4,
            'people_type' => 'LEGAL',
            'name' => 'Doutor 4',
            'nif' => '13.446.509/0001-04',
            'email' => 'contato@inased.com.br',
            'zip_code' => null,
            'district' => null,
            'address' => 'Quadra 606 Sul, Al. Oscar Niemeyer, QI - 02, HM',
            'phone' => '(63) 3213-1328'
        ]);
        //$this->command->info('People '.$people->name.' created');

    }
}
