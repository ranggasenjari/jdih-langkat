<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ["name"=>"Monografi Hukum","slug"=>"monografi-hukum","abbrev"=>"MONOGRAFI HUKUM","code"=>"monograf","sort"=>1,"user_id"=>1],
            ["name"=>"Putusan","slug"=>"putusan","abbrev"=>"PUTUSAN","code"=>"putusan","sort"=>3,"user_id"=>1],
            ["name"=>"KETETAPAN MPR","slug"=>"ketetapan-mpr","abbrev"=>"TAP MPR","code"=>"tapmpr","sort"=>5,"user_id"=>1],
            ["name"=>"PERATURAN PEMERINTAH","slug"=>"peraturan-pemerintah","abbrev"=>"PP","code"=>"pp","sort"=>7,"user_id"=>1],
            ["name"=>"PERATURAN PRESIDEN","slug"=>"peraturan-presiden","abbrev"=>"PERPRES","code"=>"perpres","sort"=>8,"user_id"=>1],
            ["name"=>"PERATURAN/ KEPUTUSAN MENTERI","slug"=>"peraturan-keputusan-menteri","abbrev"=>"PERMEN/ KEP","code"=>"permen","sort"=>9,"user_id"=>1],
            ["name"=>"PERATURAN PERUNDANG-UNDANGAN","slug"=>"peraturan-perundang-undangan","abbrev"=>"PERATURAN PERUNDANG-UNDANGAN","code"=>"uu","sort"=>10,"user_id"=>1],
            ["name"=>"PERATURAN K/L","slug"=>"peraturan-kl","abbrev"=>"PERATURAN K/L","code"=>"pkl","sort"=>11,"user_id"=>1],
            ["name"=>"PERATURAN/ KEPUTUSAN BERSAMA","slug"=>"peraturan-keputusan-bersama","abbrev"=>"PERBER","code"=>"pkb","sort"=>12,"user_id"=>1],
            ["name"=>"PERATURAN DAERAH","slug"=>"peraturan-daerah","abbrev"=>"PERDA","code"=>"perda","sort"=>13,"user_id"=>1],
            ["name"=>"PERATURAN DESA","slug"=>"peraturan-desa","abbrev"=>"PERDES","code"=>"perdes","sort"=>14,"user_id"=>1],
            ["name"=>"Bunga Rampai","slug"=>"bunga-rampai","abbrev"=>"BUNGA RAMPAI","code"=>"bungarampai","sort"=>15,"user_id"=>1],
            ["name"=>"Tesis","slug"=>"tesis","abbrev"=>"TESIS","code"=>"tesis","sort"=>16,"user_id"=>1],
            ["name"=>"Dissertasi","slug"=>"dissertasi","abbrev"=>"DISSERTASI","code"=>"dissertasi","sort"=>17,"user_id"=>1],
            ["name"=>"Buku","slug"=>"buku","abbrev"=>"BUKU","code"=>"buku","sort"=>18,"user_id"=>1],
            ["name"=>"Kamus/Ensiklopedia","slug"=>"kamusensiklopedia","abbrev"=>"KAMUS/ENSIKLOPEDIA","code"=>"kamus","sort"=>19,"user_id"=>1],
            ["name"=>"Bibliografi","slug"=>"bibliografi","abbrev"=>"BIBLIOGRAFI","code"=>"bibliografi","sort"=>20,"user_id"=>1],
            ["name"=>"Jurnal","slug"=>"jurnal","abbrev"=>"JURNAL","code"=>"jurnal","sort"=>21,"user_id"=>1],
            ["name"=>"Artikel","slug"=>"artikel","abbrev"=>"ARTIKEL","code"=>"artikel","sort"=>22,"user_id"=>1],
            ["name"=>"Makalah","slug"=>"makalah","abbrev"=>"MAKALAH","code"=>"makalah","sort"=>23,"user_id"=>1],
            ["name"=>"Putusan Mahkamah Agung","slug"=>"putusan-mahkamah-agung","abbrev"=>"PUTUSAN MA","code"=>"ma","sort"=>24,"user_id"=>1],
            ["name"=>"Putusan Mahkamah Konstitusi","slug"=>"putusan-mahkamah-konstitusi","abbrev"=>"PUTUSAN MK","code"=>"mk","sort"=>25,"user_id"=>1],
            ["name"=>"PERATURAN BUPATI","slug"=>"peraturan-bupati","abbrev"=>"PERBUP","code"=>"pb","sort"=>0,"user_id"=>1],
            ["name"=>"KEPUTUSAN BUPATI","slug"=>"keputusan-bupati","abbrev"=>"SK","code"=>"sk","sort"=>0,"user_id"=>1],
            ["name"=>"EDARAN BUPATI","slug"=>"edaran-bupati","abbrev"=>"SE","code"=>"se","sort"=>0,"user_id"=>1],
            ["name"=>"PERJANJIAN KERJASAMA / MoU / MoA","slug"=>"perjanjian-kerjasama-mou-moa","abbrev"=>"KS","code"=>"ks","sort"=>0,"user_id"=>1],
        ];

        DB::table('categories')->truncate();
        DB::table('categories')->insert($categories);
    }
}