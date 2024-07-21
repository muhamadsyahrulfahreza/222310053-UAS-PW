<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            ['question' => 'What is the registration process?'],
            ['question' => 'How to access the campus resources?'],
            ['question' => 'What are the campus facilities?'],
            ['question' => 'Who can I contact for more information?'],
            ['question' => 'What are the deadlines for registration?'],
        ]);
    }
}
