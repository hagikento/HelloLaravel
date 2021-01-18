<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'yamamoto',
            'age' => 18
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'jiro',
            'mail' => 'nitta',
            'age' => 36
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'saburo',
            'mail' => 'kitajima',
            'age' => 60
        ];
        DB::table('people')->insert($param);
    }
}
