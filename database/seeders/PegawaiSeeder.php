<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data faker Indonesia
        $faker = Faker::create('id_ID');

        //membuat data dummy sebanyak 10 records
        for($x = 1; $x <= 10; $x++) {
            //insert data dummy pegawai dengan faker
            DB::table('pegawai')->insert([
                'nama' => faker -> name,
                'alamat' => $faker -> address,
            ]);
        }
    }
}
