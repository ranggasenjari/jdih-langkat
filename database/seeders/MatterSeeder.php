<?php

namespace Database\Seeders;

use App\Models\Matter;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Matter::factory()->count(32)->create();

        Matter::create(['name' => 'Pendidikan', 'slug' => Str::slug('Pendidikan')]);
        Matter::create(['name' => 'Kesehatan', 'slug' => Str::slug('Kesehatan')]);
        Matter::create(['name' => 'Pekerjaan Umum dan Penataan Ruang', 'slug' => Str::slug('Pekerjaan Umum dan Penataan Ruang')]);
        Matter::create(['name' => 'Perumahan Kawasan Permukiman', 'slug' => Str::slug('Perumahan Kawasan Permukiman')]);
        Matter::create(['name' => 'Ketentraman dan Ketertiban Umum serta Perlindungan Masyarakat', 'slug' => Str::slug('Ketentraman dan Ketertiban Umum serta Perlindungan Masyarakat')]);
        Matter::create(['name' => 'Sosial', 'slug' => Str::slug('Sosial')]);
        Matter::create(['name' => 'Tenaga Kerja', 'slug' => Str::slug('Tenaga Kerja')]);
        Matter::create(['name' => 'Pemberdayaan Perempuan dan Perlindungan Anak', 'slug' => Str::slug('Pemberdayaan Perempuan dan Perlindungan Anak')]);
        Matter::create(['name' => 'Pangan', 'slug' => Str::slug('Pangan')]);
        Matter::create(['name' => 'Pertanahan', 'slug' => Str::slug('Pertanahan')]);
        Matter::create(['name' => 'Lingkungan Hidup', 'slug' => Str::slug('Lingkungan Hidup')]);
        Matter::create(['name' => 'Administrasi Kependudukan dan Pencatatan Sipil', 'slug' => Str::slug('Administrasi Kependudukan dan Pencatatan Sipil')]);
        Matter::create(['name' => 'Pemberdayaan Masyarakat dan Desa', 'slug' => Str::slug('Pemberdayaan Masyarakat dan Desa')]);
        Matter::create(['name' => 'Pengendalian Penduduk dan Keluarga Berencana', 'slug' => Str::slug('Pengendalian Penduduk dan Keluarga Berencana')]);
        Matter::create(['name' => 'Perhubungan', 'slug' => Str::slug('Perhubungan')]);
        Matter::create(['name' => 'Komunikasi dan Informatika', 'slug' => Str::slug('Komunikasi dan Informatika')]);
        Matter::create(['name' => 'Koperasi, Usaha Kecil dan Menengah', 'slug' => Str::slug('Koperasi, Usaha Kecil dan Menengah')]);
        Matter::create(['name' => 'Penanaman Modal', 'slug' => Str::slug('Penanaman Modal')]);
        Matter::create(['name' => 'Kepemudaan dan Olahraga', 'slug' => Str::slug('Kepemudaan dan Olahraga')]);
        Matter::create(['name' => 'Statistik', 'slug' => Str::slug('Statistik')]);
        Matter::create(['name' => 'Persandian', 'slug' => Str::slug('Persandian')]);
        Matter::create(['name' => 'Kebudayaan', 'slug' => Str::slug('Kebudayaan')]);
        Matter::create(['name' => 'Perpustakaan', 'slug' => Str::slug('Perpustakaan')]);
        Matter::create(['name' => 'Kearsipan', 'slug' => Str::slug('Kearsipan')]);
        Matter::create(['name' => 'Kelautan dan Perikanan', 'slug' => Str::slug('Kelautan dan Perikanan')]);
        Matter::create(['name' => 'Pariwisata', 'slug' => Str::slug('Pariwisata')]);
        Matter::create(['name' => 'Pertanian', 'slug' => Str::slug('Pertanian')]);
        Matter::create(['name' => 'Kehutanan', 'slug' => Str::slug('Kehutanan')]);
        Matter::create(['name' => 'Energi dan Sumber Daya Mineral', 'slug' => Str::slug('Energi dan Sumber Daya Mineral')]);
        Matter::create(['name' => 'Perdagangan', 'slug' => Str::slug('Perdagangan')]);
        Matter::create(['name' => 'Perindustrian', 'slug' => Str::slug('Perindustrian')]);
        Matter::create(['name' => 'Transmigrasi', 'slug' => Str::slug('Transmigrasi')]);
        Matter::create(['name' => 'Politik Luar Negeri', 'slug' => Str::slug('Politik Luar Negeri')]);
        Matter::create(['name' => 'Keamanan', 'slug' => Str::slug('Keamanan')]);
        Matter::create(['name' => 'Yustisi', 'slug' => Str::slug('Yustisi')]);
        Matter::create(['name' => 'Moneter dan Fiskal Nasional', 'slug' => Str::slug('Moneter dan Fiskal Nasional')]);
        Matter::create(['name' => 'Agama', 'slug' => Str::slug('Agama')]);
        Matter::create(['name' => 'Pertahanan', 'slug' => Str::slug('Pertahanan')]);
    }
}