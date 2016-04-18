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
            'Life is really simple, but we insist on making it complicated.',
            'Confucius'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'The most important thing is to enjoy your life - to be happy - it\'s all that matters.',
            'Audrey Hepburn'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'Do not dwell in the past, do not dream of the future, concentrate the mind on the present moment.',
            'Buddha'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'Life isn\'t about finding yourself. Life is about creating yourself.',
            'George Bernard Shaw'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'We do not remember days, we remember moments.',
            'Cesare Pavese'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'Very little is needed to make a happy life; it is all within yourself, in your way of thinking.',
            'Marcus Aurelius'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'In the end, it\'s not the years in your life that count. It\'s the life in your years.',
            'Abraham Lincoln'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'Life is not a problem to be solved, but a reality to be experienced.',
            'Soren Kierkegaard'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'Keep your face to the sunshine and you cannot see a shadow.',
            'Helen Keller'
        ]);

        app('db')->insert('insert into quotes (quote, author) values (?, ?)', [
            'You can\'t blame gravity for falling in love.',
            'Albert Einstein'
        ]);
    }
}
