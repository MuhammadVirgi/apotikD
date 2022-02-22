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
            'category_name' => 'Alat Kesehatan',
            'category_name' => 'Alat Kesehatan',
            'category_name' => 'Alat Kesehatan',
            //data ada pada file
        ]);
    }
}
