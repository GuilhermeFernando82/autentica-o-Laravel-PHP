<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Guilherme',
            'email' => 'guilherme1@gmail.com',
            'cpf' => '08427728980',
            'password' => bcrypt('12345678'),
        ]);
    }
}
