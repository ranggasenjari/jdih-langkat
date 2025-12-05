<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            ["name"=>"Monografi Hukum","slug"=>"monografi-hukum","abbrev"=>"MONOGRAFI HUKUM","code"=>"monograf","user_id"=>1],
            ["name"=>"Putusan","slug"=>"putusan","abbrev"=>"PUTUSAN","code"=>"putusan","user_id"=>1],
            ["name"=>"KETETAPAN MPR","slug"=>"ketetapan-mpr","abbrev"=>"TAP MPR","code"=>"tapmpr","user_id"=>1],
            ["name"=>"PERATURAN PEMERINTAH","slug"=>"peraturan-pemerintah","abbrev"=>"PP","code"=>"pp","user_id"=>1],
            ["name"=>"PERATURAN PRESIDEN","slug"=>"peraturan-presiden","abbrev"=>"PERPRES","code"=>"perpres","user_id"=>1],
            ["name"=>"PERATURAN/ KEPUTUSAN MENTERI","slug"=>"peraturan-keputusan-menteri","abbrev"=>"PERMEN/ KEP","code"=>"permen","user_id"=>1],
            ["name"=>"PERATURAN PERUNDANG-UNDANGAN","slug"=>"peraturan-perundang-undangan","abbrev"=>"PERATURAN PERUNDANG-UNDANGAN","code"=>"uu","user_id"=>1],
            ["name"=>"PERATURAN K/L","slug"=>"peraturan-kl","abbrev"=>"PERATURAN K/L","code"=>"pkl","user_id"=>1],
            ["name"=>"PERATURAN/ KEPUTUSAN BERSAMA","slug"=>"peraturan-keputusan-bersama","abbrev"=>"PERBER","code"=>"pkb","user_id"=>1],
            ["name"=>"PERATURAN DAERAH","slug"=>"peraturan-daerah","abbrev"=>"PERDA","code"=>"perda","user_id"=>1],
            ["name"=>"PERATURAN DESA","slug"=>"peraturan-desa","abbrev"=>"PERDES","code"=>"perdes","user_id"=>1],
            ["name"=>"Bunga Rampai","slug"=>"bunga-rampai","abbrev"=>"BUNGA RAMPAI","code"=>"bungarampai","user_id"=>1],
            ["name"=>"Tesis","slug"=>"tesis","abbrev"=>"TESIS","code"=>"tesis","user_id"=>1],
            ["name"=>"Dissertasi","slug"=>"dissertasi","abbrev"=>"DISSERTASI","code"=>"dissertasi","user_id"=>1],
            ["name"=>"Buku","slug"=>"buku","abbrev"=>"BUKU","code"=>"buku","user_id"=>1],
            ["name"=>"Kamus/Ensiklopedia","slug"=>"kamusensiklopedia","abbrev"=>"KAMUS/ENSIKLOPEDIA","code"=>"kamus","user_id"=>1],
            ["name"=>"Bibliografi","slug"=>"bibliografi","abbrev"=>"BIBLIOGRAFI","code"=>"bibliografi","user_id"=>1],
            ["name"=>"Jurnal","slug"=>"jurnal","abbrev"=>"JURNAL","code"=>"jurnal","user_id"=>1],
            ["name"=>"Artikel","slug"=>"artikel","abbrev"=>"ARTIKEL","code"=>"artikel","user_id"=>1],
            ["name"=>"Makalah","slug"=>"makalah","abbrev"=>"MAKALAH","code"=>"makalah","user_id"=>1],
            ["name"=>"Putusan Mahkamah Agung","slug"=>"putusan-mahkamah-agung","abbrev"=>"PUTUSAN MA","code"=>"ma","user_id"=>1],
            ["name"=>"Putusan Mahkamah Konstitusi","slug"=>"putusan-mahkamah-konstitusi","abbrev"=>"PUTUSAN MK","code"=>"mk","user_id"=>1],
            ["name"=>"PERATURAN BUPATI","slug"=>"peraturan-bupati","abbrev"=>"PERBUP","code"=>"pb","user_id"=>1],
            ["name"=>"KEPUTUSAN BUPATI","slug"=>"keputusan-bupati","abbrev"=>"SK","code"=>"sk","user_id"=>1],
            ["name"=>"EDARAN BUPATI","slug"=>"edaran-bupati","abbrev"=>"SE","code"=>"se","user_id"=>1],
            ["name"=>"PERJANJIAN KERJASAMA / MoU / MoA","slug"=>"perjanjian-kerjasama-mou-moa","abbrev"=>"KS","code"=>"ks","user_id"=>1],
        ];

        DB::table('fields')->truncate();
        DB::table('fields')->insert($fields);
    }
}