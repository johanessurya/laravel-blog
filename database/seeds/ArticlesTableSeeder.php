<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fill articles table
        $rows = array(
          array(
            'title' => 'Title 1',
            'content' => 'Content 1'
          ),
          array(
            'title' => 'Title 2',
            'content' => 'Content 2'
          ),
          array(
            'title' => 'Title 3',
            'content' => 'Content 3'
          ),
          array(
            'title' => 'Title 4',
            'content' => 'Content 4'
          ),
          array(
            'title' => 'Title 5',
            'content' => 'Content 5'
          )
        );

        DB::table('articles')->insert($rows);
    }
}
