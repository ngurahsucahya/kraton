<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PertanyaanUmum;
use App\Models\PertanyaanIPA;

class PertanyaanSeeder extends Seeder
{
    public function run(): void
    {
        PertanyaanUmum::create([
            'pertanyaan' => 'Ikan yang bernafas dengan paru-paru adalah ...',
            'A' => 'Lumba-lumba',
            'B' => 'Gerang',
            'C' => 'Hiu',
            'D' => 'Tuna',
            'jawabanBenar' => 'A',
            'nilai'=> '10',
            'penjelasan' => 'Lumba-lumba adalah hewan mamalia yang bernafas dengan paru-paru.',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        PertanyaanUmum::create([
            'pertanyaan' => 'Hari Pahlawan nasional jatuh pada tanggal ...',
            'A' => '10 November',
            'B' => '2 November',
            'C' => '20 Mei',
            'D' => '17 Agustus',
            'jawabanBenar' => 'A',
            'nilai'=> '10',
            'penjelasan' => 'Hari Pahlawan nasional jatuh pada tanggal 10 November',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        PertanyaanUmum::create([
            'pertanyaan' => 'Sungai terpanjang di dunia adalah ...',
            'A' => 'Sungai Bengawan Solo',
            'B' => 'Sungai Wal Seputih',
            'C' => 'Sungai Nil',
            'D' => 'Sungai Berantas',
            'jawabanBenar' => 'C',
            'penjelasan' => 'Sedang dibuat',
            'nilai'=> '10',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        PertanyaanUmum::create([
            'pertanyaan' => 'Tokoh yang mengetik naskah proklamasi adalah ...',
            'A' => 'Sayuti Melik',
            'B' => 'Ir. Soekarno',
            'C' => 'Moh. Hatta',
            'D' => 'I Gusti Ngurah Rai',
            'jawabanBenar' => 'A',
            'nilai'=> '10',
            'penjelasan' => 'Belum dibuat',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        PertanyaanUmum::create([
            'pertanyaan' => 'Negara yang pertama kali mengakui kemerdekaan indonesia adalah ...',
            'A' => 'Jepang',
            'B' => 'Jerman',
            'C' => 'Mesir',
            'D' => 'Belanda',
            'jawabanBenar' => 'C',
            'nilai'=> '10',
            'penjelasan' => 'Pengakuan Mesir itu terjadi pada 22 Maret 1946. Sejak pengakuan kemerdekaan tersebut, Indonesia dan Mesir terus menjalin hubungan diplomatik sampai saat ini.',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        PertanyaanIPA::create([
            'pertanyaan' => 'Negara yang pertama kali mengakui kemerdekaan indonesia adalah ...',
            'A' => 'Jepang',
            'B' => 'Jerman',
            'C' => 'Mesir',
            'D' => 'Belanda',
            'jawabanBenar' => 'C',
            'nilai'=> '10',
            'penjelasan' => 'Pengakuan Mesir itu terjadi pada 22 Maret 1946. Sejak pengakuan kemerdekaan tersebut, Indonesia dan Mesir terus menjalin hubungan diplomatik sampai saat ini.',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        
    }
}
