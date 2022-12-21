<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        // for($a=1;$a<=4;$a++){
        //     DB::table('publishers')->insert([
        //         'id' => $a,
        //         'name' =>  $faker->name,
        //         'address' => $faker->address,
        //         'phone' => $faker->phoneNumber,
        //         'email' => $faker->freeEmail,
        //         'image' => $faker->imageUrl(100,100)
        //     ]);
        // }
        DB::table('publishers')->insert([
            [
                'id' => 1,
                'name' => "MAPPA",
                'address' =>  "Suginami, Tokyo, Japan",
                'phone' => "310082928",
                'email' => "mappastudios@mappa.com",
                'image' => "Mappa.jpg"
            ],
            [
                'id' => 2,
                'name' => "Gramedia Digital Publishing System",
                'address' =>  "Jl.Palmerah Barat No.29-37 Jakarta 10270",
                'phone' => "085236457383",
                'email' => "dps@gramedia.com",
                'image' => "Gramedia.jpg"
            ],
            [
                'id' => 3,
                'name' => "Andi Publisher",
                'address' =>  "Jl. Beo No.38-40, Mrican, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281",
                'phone' => "081138228928",
                'email' => "andipublisher@gmail.com",
                'image' => "AndiPub.jpg"
            ],
            [
                'id' => 4,
                'name' => "Tiga Serangkai Pustaka Mandiri",
                'address' =>  "Jl. Dr Supomo no.23 Solo",
                'phone' => "0271646994",
                'email' => "cdc@mail.uns.ac.id",
                'image' => "TigaSerangkaiMandiri.jpg"
            ],
        ]);
    }
}
