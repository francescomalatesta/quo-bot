<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'Good, better, best. Never let it rest. \'Til your good is better and your better is best.',
            'St. Jerome'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'Life is 10% what happens to you and 90% how you react to it.',
            'Charles R. Swindoll'
        ]);
    }
}
