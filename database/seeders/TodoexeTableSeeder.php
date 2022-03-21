<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoexeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => '目薬を買う'
        ];
        DB::table('todoexe')->insert($param);
        $param = [
            'content' => '掃除機を買う'
        ];
        DB::table('todoexe')->insert($param);
    }
}
