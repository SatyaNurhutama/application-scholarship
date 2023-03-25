<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scholarship;

class ScholarshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scholarship::create([
            'name' => 'Beasiswa S1 Tahun 2023',
            'description' => 'Beasiswa S1 Tahun 2023 diselenggarakan oleh ITTP dan ditujukan untuk mahasiswa program S1 yang sedang aktif kuliah. Beasiswa ini bertujuan untuk meringankan beban biaya pendidikan mahasiswa dan memberikan dukungan finansial bagi mereka yang berprestasi. Beasiswa ini memiliki batas waktu pengajuan sampai dengan 30 Juni 2023.',
            'image_url' => 'b1.jpg',
        ]);

        Scholarship::create([
            'name' => 'Beasiswa Pendidikan Indonesia 2023',
            'description' => 'Beasiswa Pendidikan Indonesia 2023 adalah program beasiswa nasional yang diselenggarakan oleh Kementerian Pendidikan dan Kebudayaan Indonesia. Beasiswa ini ditujukan untuk mahasiswa berprestasi yang membutuhkan bantuan finansial untuk melanjutkan pendidikan di jenjang Kuliah. Pendaftaran dibuka pada tanggal 1 Januari 2023 dan ditutup pada tanggal 31 Maret 2023.',
            'image_url' => 'b2.jpg',
        ]);

        Scholarship::create([
            'name' => 'Beasiswa Teknik Informatika 2023',
            'description' => 'Beasiswa Teknik Informatika 2023 adalah program beasiswa yang diselenggarakan oleh Jurusan Teknik Informatika Universitas ABC untuk mahasiswa baru yang masuk di tahun ajaran 2023/2024. Beasiswa ini ditujukan untuk mahasiswa yang memiliki prestasi akademik yang baik dan kebutuhan finansial. Beasiswa ini mencakup biaya kuliah dan biaya hidup selama satu tahun. Pendaftaran dibuka pada tanggal 1 September 2023 dan ditutup pada tanggal 30 September 2023.',
            'image_url' => 'b3.jpg',
        ]);

    }
}
