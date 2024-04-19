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
            'A' => 'Hiu',
            'B' => 'Paus',
            'C' => 'Lumba-lumba',
            'D' => 'Tuna',
            'jawabanBenar' => 'C',
            'nilai'=> '10',
            'penjelasan' => 'Paus adalah hewan mamalia yang bernafas dengan paru-paru.',
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

        PertanyaanIPA::create([
            'pertanyaan' => 'Ikan yang bernafas dengan paru-paru adalah ...',
            'A' => 'Hiu',
            'B' => 'Paus',
            'C' => 'Lumba-lumba',
            'D' => 'Tuna',
            'jawabanBenar' => 'C',
            'nilai'=> '10',
            'penjelasan' => 'Paus adalah hewan mamalia yang bernafas dengan paru-paru.',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        
    }
}
