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
        //
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
        ]);
    }
}
