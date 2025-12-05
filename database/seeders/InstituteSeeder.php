<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstituteSeeder extends Seeder
{
    public function run()
    {
        $institutes = [
            ["name"=>"SEKRETARIAT DAERAH","slug"=>"sekretariat-daerah","abbrev"=>"setda","desc"=>"SEKRETARIAT DAERAH"],
            ["name"=>"SEKRETARIAT DPRD","slug"=>"sekretariat-dprd","abbrev"=>"setwan","desc"=>"SEKRETARIAT DPRD"],
            ["name"=>"INSPEKTORAT","slug"=>"inspektorat","abbrev"=>"inspektorat","desc"=>"INSPEKTORAT"],
            ["name"=>"DINAS PENDIDIKAN","slug"=>"dinas-pendidikan","abbrev"=>"disdik","desc"=>"DINAS PENDIDIKAN"],
            ["name"=>"DINAS KESEHATAN","slug"=>"dinas-kesehatan","abbrev"=>"dinkes","desc"=>"DINAS KESEHATAN"],
            ["name"=>"DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN","slug"=>"dinas-perumahan-dan-kawasan-permukiman","abbrev"=>"perkim","desc"=>"DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN"],
            ["name"=>"SATUAN POLISI PAMONG PRAJA","slug"=>"satuan-polisi-pamong-praja","abbrev"=>"polpp","desc"=>"SATUAN POLISI PAMONG PRAJA"],
            ["name"=>"DINAS SOSIAL","slug"=>"dinas-sosial","abbrev"=>"dinsos","desc"=>"DINAS SOSIAL"],
            ["name"=>"DINAS KOPERASI","slug"=>"dinas-koperasi","abbrev"=>"diskop","desc"=>"DINAS KOPERASI"],
            ["name"=>"DINAS KETENAGAKERJAAN","slug"=>"dinas-ketenagakerjaan","abbrev"=>"disnaker","desc"=>"DINAS KETENAGAKERJAAN"],
            ["name"=>"DINAS PERTANIAN DAN KETAHANAN PANGAN","slug"=>"dinas-pertanian-dan-ketahanan-pangan","abbrev"=>"pertanian","desc"=>"DINAS PERTANIAN DAN KETAHANAN PANGAN"],
            ["name"=>"DINAS LINGKUNGAN HIDUP","slug"=>"dinas-lingkungan-hidup","abbrev"=>"dlh","desc"=>"DINAS LINGKUNGAN HIDUP"],
            ["name"=>"DINAS PENGENDALIAN PENDUDUK, KELUARGA BERENCANA DAN PEREMPUAN, PERLINDUNGAN ANAK","slug"=>"dinas-pengendalian-penduduk-keluarga-berencana-dan-perempuan-perlindungan-anak","abbrev"=>"ppkbppa","desc"=>"DINAS PENGENDALIAN PENDUDUK, KELUARGA BERENCANA DAN PEREMPUAN, PERLINDUNGAN ANAK"],
            ["name"=>"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL","slug"=>"dinas-kependudukan-dan-pencatatan-sipil","abbrev"=>"disdukcapil","desc"=>"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"],
            ["name"=>"DINAS PEMBERDAYAAN MASYARAKAT DAN DESA","slug"=>"dinas-pemberdayaan-masyarakat-dan-desa","abbrev"=>"pmd","desc"=>"DINAS PEMBERDAYAAN MASYARAKAT DAN DESA"],
            ["name"=>"DINAS PERHUBUNGAN","slug"=>"dinas-perhubungan","abbrev"=>"disbuh","desc"=>"DINAS PERHUBUNGAN"],
            ["name"=>"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN","slug"=>"dinas-komunikasi-informatika-statistik-dan-persandian","abbrev"=>"diskominfo","desc"=>"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"],
            ["name"=>"DINAS PENANAMAN MODAL DAN PELAYANAN PERIZINAN TERPADU SATU PINTU","slug"=>"dinas-penanaman-modal-dan-pelayanan-perizinan-terpadu-satu-pintu","abbrev"=>"dpmp2tsp","desc"=>"DINAS PENANAMAN MODAL DAN PELAYANAN PERIZINAN TERPADU SATU PINTU"],
            ["name"=>"DINAS PEMUDA DAN OLAHRAGA","slug"=>"dinas-pemuda-dan-olahraga","abbrev"=>"dispora","desc"=>"DINAS PEMUDA DAN OLAHRAGA"],
            ["name"=>"DINAS KEARSIPAN DAN PERPUSTAKAAN","slug"=>"dinas-kearsipan-dan-perpustakaan","abbrev"=>"arsip","desc"=>"DINAS KEARSIPAN DAN PERPUSTAKAAN"],
            ["name"=>"DINAS KELAUTAN DAN PERIKANAN","slug"=>"dinas-kelautan-dan-perikanan","abbrev"=>"diskanla","desc"=>"DINAS KELAUTAN DAN PERIKANAN"],
            ["name"=>"BADAN PENGELOLAAN KEUANGAN DAN ASSET DAERAH","slug"=>"badan-pengelolaan-keuangan-dan-asset-daerah","abbrev"=>"bpkad","desc"=>"BADAN PENGELOLAAN KEUANGAN DAN ASSET DAERAH"],
            ["name"=>"BADAN PENDAPATAN DAERAH","slug"=>"badan-pendapatan-daerah","abbrev"=>"bapenda","desc"=>"BADAN PENDAPATAN DAERAH"],
            ["name"=>"BADAN KEPEGAWAIAN DAERAH","slug"=>"badan-kepegawaian-daerah","abbrev"=>"bkd","desc"=>"BADAN KEPEGAWAIAN DAERAH"],
            ["name"=>"BADAN PENANGGULANGAN BENCANA DAERAH","slug"=>"badan-penanggulangan-bencana-daerah","abbrev"=>"bpbd","desc"=>"BADAN PENANGGULANGAN BENCANA DAERAH"],
            ["name"=>"BADAN KESATUAN BANGSA DAN POLITIK","slug"=>"badan-kesatuan-bangsa-dan-politik","abbrev"=>"kesbangpol","desc"=>"BADAN KESATUAN BANGSA DAN POLITIK"],
            ["name"=>"BADAN PERENCANAAN PEMBANGUNAN DAERAH, PENELITIAN DAN PENGEMBANGAN","slug"=>"badan-perencanaan-pembangunan-daerah-penelitian-dan-pengembangan","abbrev"=>"bappedalitbang","desc"=>"BADAN PERENCANAAN PEMBANGUNAN DAERAH, PENELITIAN DAN PENGEMBANGAN"],
            ["name"=>"DINAS PERINDUSTRIAN DAN PERDAGANGAN","slug"=>"dinas-perindustrian-dan-perdagangan","abbrev"=>"perindag","desc"=>"DINAS PERINDUSTRIAN DAN PERDAGANGAN"],
            ["name"=>"DINAS KEBUDAYAAN DAN PARIWISATA","slug"=>"dinas-kebudayaan-dan-pariwisata","abbrev"=>"budpar","desc"=>"DINAS KEBUDAYAAN DAN PARIWISATA"],
            ["name"=>"DINAS PEKERJAAN UMUM DAN TATA RUANG","slug"=>"dinas-pekerjaan-umum-dan-tata-ruang","abbrev"=>"putr","desc"=>"DINAS PEKERJAAN UMUM DAN TATA RUANG"],
        ];

        DB::table('institutes')->truncate();
        DB::table('institutes')->insert($institutes);
    }
}
