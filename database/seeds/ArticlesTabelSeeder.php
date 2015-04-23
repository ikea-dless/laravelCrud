<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->truncate();
        DB::table('articles')->insert([
           [
               'title'      => 'Laozi',
               'body'       => 'laozilaozilaozi',
               'created_at' => '2015-04-20 18:42:00',
               'updated_at' => '2015-04-20 18:43:00'
           ],
           [
               'title'      => 'vincivinci',
               'body'       => 'vincivinci',
               'created_at' => '2015-04-20 18:42:00',
               'updated_at' => '2015-04-20 18:43:00'
           ],
           [
               'title'      => 'bledsoe',
               'body'       => 'bledsoebledsoe',
               'created_at' => '2015-04-20 18:42:00',
               'updated_at' => '2015-04-20 18:43:00'
           ]
        ]);
    }
}