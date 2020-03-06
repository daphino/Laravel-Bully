<?php

use Illuminate\Database\Seeder;
use App\Questionare;

class QuestionareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questionare::truncate();

        Questionare::create(['question' => 'Usia', 'type' => 'input','order'=> 1]);
        Questionare::create(['question' => 'Tingkat Pendidikan', 'options' => json_encode(['SD/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'Diploma I/II', 'Diploma III', 'Diploma IV/S1', 'S2', 'S3']), 'type' => 'select','order'=> 2]);
        Questionare::create(['question' => 'Jenis Kelamin', 'options' => json_encode(['Laki-Laki', 'Perempuan']), 'type' => 'radio','order'=> 3]);
        Questionare::create(['question' => 'Wilayah Sekolah', 'type' => 'input','order'=> 4]);
        Questionare::create(['question' => 'Pilih perangkat teknologi yang kamu miliki!', 'options' => json_encode(['HP','Komputer (PC)', 'Laptop', 'Tablet', 'Lainnya']), 'type' => 'select','order'=> 5]);
        Questionare::create(['question' => 'Seberapa sering kamu mengakses internet dalam seminggu?', 'options' => json_encode(['< 1 kali seminggu','2-5 kali seminggu','Setiap hari']), 'type' => 'select','order'=> 6]);
        Questionare::create(['question' => 'Berapa lama rata-rata waktu yang kamu habiskan dalam sekali mengakses internet?', 'options' => json_encode(['< 1 jam', '2-4 jam', '> 4 jam']), 'type' => 'select','order'=> 7]);
        Questionare::create(['question' => 'Apakah kamu mengetahui terjadinya penyebaran informasi memalkukan mengenai seseorang di sekitarmu secara online dan berulang dalam kurun waktu 1 tahun terakhir?', 'options' => json_encode(['Ya', 'Tidak']), 'type' => 'radio','order'=> 8]);
        Questionare::create(['question' => 'Apakah kamu mengetahui seseorang di sekitarmu yang di kucilkan dari pergaulan online secara berulang dalam kurun waktu 1 tahun terakhir?', 'options' => json_encode(['Ya', 'Tidak']), 'type' => 'radio','order'=> 9]);
        Questionare::create(['question' => 'Apakah kamu mengetahui terjadinya penghinaan online secara berulang terhadap seseorang di sekitarmu dalam kurun waktu 1 tahun terakhir?', 'options' => json_encode(['Ya', 'Tidak']), 'type' => 'radio','order'=> 10]);
        Questionare::create(['question' => 'Apakah pernah terjadi penyebaran informasi palsu tentang dirimu secara online berulang dalam kurun waktu 1 tahun terakhir?', 'options' => json_encode(['Ya', 'Tidak']), 'type' => 'radio','order'=> 11]);
        Questionare::create(['question' => 'Apakah akun pribadimu pernah di akses oleh orang lain yang kemudian mengaku sebagai dirimu secara berulang dalam kurun waktu 1 tahun terakhir?', 'options' => json_encode(['Ya', 'Tidak']), 'type' => 'radio','order'=> 12]);
        Questionare::create(['question' => 'Apakah pernah terjadi penyebaran informasi memalukan tentang dirimu secara online dan berulang dalam kurun waktu 1 tahun terakhir?', 'options' => json_encode(['Ya', 'Tidak']), 'type' => 'radio','order'=> 13]);
        Questionare::create(['question' => 'Apakah kamu pernah di hina secara online berulang kali dalam kurun waktu 1 tahun terakhir?', 'options' => json_encode(['Ya', 'Tidak']), 'type' => 'radio','order'=> 14]);
        Questionare::create(['question' => 'Apakah pernah tersebar video tentang dirimu yang sedang di kerjai sambil direkam dalam kurun waktu 1 tahun terakhir?', 'options' => json_encode(['Ya', 'Tidak']), 'type' => 'radio','order'=> 15]);
        Questionare::create(['question' => 'Sebutkan media tempat kamu paling sering menyaksikan terjadinya tindakan-tindakan penghinaan?', 'options' => json_encode(['Jejaring Sosial', 'Chat (Line, Whatsapp, Yahoo Messanger)', 'Email', 'Blog', 'Lainnya']), 'type' => 'select','order'=> 16]);
    }
}
