<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('news')->insert([
            'news_name'=>'asdf',
            'news_title'=>'asdf ghjklş tyujkl fghjk',
            'news_category'=>'magazine',
            'news_content'=>'asdfsdfghjhgfdsdfgfdsdfgtyhgtfrdes sdfghygtrewqwerfgyhygtfrertgh sdfghgfd.',
        ]);
    }
}
