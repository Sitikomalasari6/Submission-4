<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('guestbook')->insert([
        //     'name' => 'Andi',
        //     'from' => 'Cimahi',
        //     'agenda' => 'Tamu Khusus',
        // ]);
        \App\Models\Guesbook::factory(10)->create();

    }
}
