<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 10
        DB::table('categories')->insert([
            'Name' => 'ANALGESTIK NARKOTIK',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => 'ANALGESIK NON NARKOTIK',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => 'NYERI NEUROPATIK',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => 'ANESTETIK LOKAL',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => 'ANESTETIK UMUM dan OKSIGEN',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => 'ANTIDOT dan OBAT LAIN untuk KERACUNAN',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => 'ANTIEPILEPSI - ANTIKONVULSI',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
        ]);

        DB::table('categories')->insert([
            'Name' => ' Antelmintik Intestinal',
            'Description' => 'lorem ipsum dolor sit amet, consectetur adip',
            'Name' => 'Fentanil',
            'Description' => 'a) inj:Hanya untuk nyeri berat danharus',
        ]);
    }
}
