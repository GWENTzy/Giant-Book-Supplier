<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // for($a=1;$a<=8;$a++){
        //     DB::table('books')->insert([
        //         'id' => $a,
        //         'publisher_id' => rand(1,4),
        //         'title' =>  $faker->words($nb = 3, $asText = true),
        //         'author' => $faker->name,
        //         'year' => $faker->numberBetween(2000, 2022),
        //         'synopsis' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        //         'image' => $faker->imageUrl(100,100)
        //     ]);
        // }

        // $faker = Faker::create();
        // for($a=1;$a<=8;$a++){
        //     DB::table('books')->insert([
        //         'book_id' => $a,
        //         'publisher_id' => rand(1,4),
        //         'title' =>  "Cantik Itu Luka",
        //         'author' => "Eka Kurniawan",
        //         'year' => "2002",
        //         'synopsis' => "Di akhir masa kolonial, seorang perempuan dipaksa menjadi pelacur. Kehidupan itu terus dijalaninya hingga ia memiliki tiga anak gadis yang kesemuanya cantik. Ketika mengandung anaknya yang keempat, ia berharap anak itu akan lahir buruk rupa. Itulah yang terjadi, meskipun secara ironik ia memberinya nama si Cantik.",
        //         'image' => "CantikItuLuka.jpg"
        //     ]);
        // }

            DB::table('books')->insert([
            [
                'id' => 1,
                'publisher_id' => rand(1,4),
                'title' =>  "Cantik Itu Luka",
                'author' => "Eka Kurniawan",
                'year' => 2002,
                'synopsis' => "Di akhir masa kolonial, seorang perempuan dipaksa menjadi pelacur. Kehidupan itu terus dijalaninya hingga ia memiliki tiga anak gadis yang kesemuanya cantik.",
                'image' => "CantikItuLuka.jpg"
            ],
            [
                'id' => 2,
                'publisher_id' => rand(1,4),
                'title' =>  "Saat Kita Jatuh Cinta",
                'author' => "Aiu Ahra",
                'year' => "2019",
                'synopsis' => "Setiap saat manusia bisa kehilangan apa-apa yang berharga untuk mereka, nggak peduli kapan, di mana, siapa.",
                'image' => "SaatKitaJatuhCinta.jpg"
            ],
            [
                'id' => 3,
                'publisher_id' => rand(1,4),
                'title' =>  "Nebula",
                'author' => "Tere Liye",
                'year' => "2019",
                'synopsis' => "SELENA dan NEBULA adalah buku ke-8 dan ke-9 yang menceritakan siapa orangtua Raib dalam serial petualangan dunia paralel. Dua buku ini sebaiknya dibaca berurutan.",
                'image' => "Nebula.jpg"
            ],
            [
                'id' => 4,
                'publisher_id' => rand(1,4),
                'title' =>  "Kisah Tanah Jawa : Tikungan Maut",
                'author' => "Mada Zidan, Bonaventura D. Genta",
                'year' => "2019",
                'synopsis' => "Jalan yang berkelok dan menanjak, cukup membuatku mual. Sampai pada ujung jalan menanjak, sebuah cahaya lampu menembus dari arah berlawanan.",
                'image' => "KisahTanahJawa.jpg"
            ],
            [
                'id' => 5,
                'publisher_id' => rand(1,4),
                'title' =>  "Misteri Rumah Kosong",
                'author' => "Glenn Alexei",
                'year' => "2019",
                'synopsis' => "Apakah makhluk itu yang berbicara padanya?",
                'image' => "MisteriRumahKosong.jpg"
            ],
            [
                'id' => 6,
                'publisher_id' => rand(1,4),
                'title' =>  "Misteri Batu Bertulis",
                'author' => "Yovita Siswati",
                'year' => "2017",
                'synopsis' => "Gawat! Bagja terbawa pergi mobil pick up penjahat! Mira dan Pak Ali pergi menyelamatkannya.",
                'image' => "MisteriBatuBertulis.jpg"
            ],
            [
                'id' => 7,
                'publisher_id' => rand(1,4),
                'title' =>  "Chainsaw Man",
                'author' => "Tatsuki Fujimoto",
                'year' => "2022",
                'synopsis' => "Kisah Denji, seorang pemuda miskin yang membuat kontrak yang menggabungkan tubuhnya dengan iblis seperti anjing bernama Pochita.",
                'image' => "ChainsawMan.jpg"
            ],
            [
                'id' => 8,
                'publisher_id' => rand(1,4),
                'title' =>  "Jujutsu Kaisen",
                'author' => "Gege Akutami",
                'year' => "2020",
                'synopsis' => "Mengisahkan tentang kehidupan Yuuji Itadori, seorang pelajar SMA yang ternyata memiliki kekuatan fisik luar biasa.",
                'image' => "JujutsuKaisen.jpg"
            ],
        ]);
    }
}
