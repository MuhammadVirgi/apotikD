<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 3 product for each kategori, misal 3 product dari kategori analgesik, dst

        // ANALGESIK NARTKOTIK
        DB::table('medicines')->insert([
            'generic_name' => 'Fentamil',
            'med_desc' => 'Hanya untuk nyeri berat...',
            'formula' => '10 Patch/bulan',
            'formula_desc' => 'inj 0,05 mg/ML',
            'category' => 'ANALGESIK NARTKOTIK',
            'faskes_TK1' => '',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
<<<<<<< HEAD
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'hidromorfon',
            'med_desc' => '-',
            'formula' => '30 tab/bulan.',
            'formula_desc' => 'tab lepas lambat 16 mg ',
            'category' => 'ANALGESIK NARTKOTIK',
            'faskes_TK1' => '',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
        ]);

        DB::table('medicines')->insert([
            'generic_name' => '3 kodein',
            'med_desc' => '-',
            'formula' => '30 tab/bulan.',
            'formula_desc' => 'tab 10 mg',
            'category' => 'ANALGESIK NARTKOTIK',
            'faskes_TK1' => '✓',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
        ]);
        // ANALGESIK NON NARTKOTIK
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'med_desc' => '',
            'formula' => '30 kaps/bulan.',
            'formula_desc' => 'kaps 250 mg',
            'category' => 'ANALGESIK NON NARTKOTIK',
            'faskes_TK1' => '✓',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen',
            'med_desc' => '',
            'formula' => '30 tab/bulan',
            'formula_desc' => 'tab 200 mg',
            'category' => 'ANALGESIK NON NARTKOTIK',
            'faskes_TK1' => '✓',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'ketoprofen',
            'med_desc' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan anal gesik secara oral. ',
            'formula' => '2 sup/hari, maks 3 hari',
            'formula_desc' => '2. sup 100 mg',
            'category' => 'ANALGESIK NON NARTKOTIK',
            'faskes_TK1' => '',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
        ]);

        // NYERI NEUROPATIK
        DB::table('medicines')->insert([
            'generic_name' => 'amitriptilin',
            'med_desc' => 'Hanya untuk nyeri berat...',
            'formula' => '10 Patch/bulan',
            'formula_desc' => 'inj 0,05 mg/ML',
            'category' => 'NYERI NEUROPATIK',
            'faskes_TK1' => '',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'gabapentin',
            'med_desc' => 'HHanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'formula' => '60 kaps/bulan.',
            'formula_desc' => 'kaps 100 mg',
            'category' => 'NYERI NEUROPATIK',
            'faskes_TK1' => '',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'karbamazepin',
            'med_desc' => 'Hanya untuk neuralgia trigeminal.',
            'formula' => '10 Patch/bulan',
            'formula_desc' => '60 tab/bulan.',
            'category' => 'NYERI NEUROPATIK',
            'faskes_TK1' => '✓',
            'faskes_TK2' => '✓ ',
            'faskes_TK3' => '✓ ',
            // data ada pada file
=======
>>>>>>> 231df880489363c9edacff5db721c7fa271c0fd4
        ]);
    }
}
