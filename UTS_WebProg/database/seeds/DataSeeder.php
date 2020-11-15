<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     * 
     * @return void
    */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => 'Drama'
            ],[
                'name' => 'Kids'
            ],[
                'name' => 'TV show'
            ]
        ]);

        DB::table('movies')->insert([
            [
                'genre_id' => '2',
                'title' => 'Spongebob Squarepants: Battle for Bikini Bottom',
                'photo' => '../images/spongebob.jpg',
                'description' => 'Spongebob Squarepants Fight for Bikini Bottom',
                'rating' => '86'

            ],[
                'genre_id' => '2',
                'title' => 'The Amazing World of Gumball',
                'photo' => '../images/gumball.jpg',
                'description' => 'Everyday around Gumball and his amazing world',
                'rating' => '94'
            ],[
                'genre_id' => '2',
                'title' => 'Blues Clues',
                'photo' => '../images/blues_clues.jpg',
                'description' => 'A kid show about blue dog and a guy',
                'rating' => '92'
            ],[
                'genre_id' => '2',
                'title' => 'Cyborg Kuro-chan',
                'photo' => '../images/cyborg_kuro.jpg',
                'description' => 'A cat with cyborg body',
                'rating' => '97'
            ],[
                'genre_id' => '1',
                'title' => 'Shutter Island',
                'photo' => '../images/shutter_island.jpg',
                'description' => 'A detective solving mystery on an island',
                'rating' => '89'
            ],[
                'genre_id' => '1',
                'title' => 'Kungfu Hustle',
                'photo' => '../images/kungfu_hustle.jpg',
                'description' => 'A comedy kungfu film',
                'rating' => '92'
            ],[
                'genre_id' => '1',
                'title' => 'Me Before You',
                'photo' => '../images/mebeforeyou.jpg',
                'description' => 'Drama movie about a girl and a boy',
                'rating' => '96'
            ],[
                'genre_id' => '1',
                'title' => 'Hachiko: A Dog Tale',
                'photo' => '../images/hachiko.jpg',
                'description' => 'A detective solving mystery on an island',
                'rating' => '96'
            ],[
                'genre_id' => '3',
                'title' => 'Game of Thrones',
                'photo' => '../images/game_of_thrones.jpg',
                'description' => 'TV Show about dragon and middle age',
                'rating' => '91'
            ],[
                'genre_id' => '3',
                'title' => 'Dark',
                'photo' => '../images/dark.jpg',
                'description' => 'TV Show about time travel and mystery',
                'rating' => '90'
            ],[
                'genre_id' => '3',
                'title' => 'Stranger Things',
                'photo' => '../images/stranger_things.jpg',
                'description' => 'TV Show about alien and supernatural',
                'rating' => '97'
            ],[
                'genre_id' => '3',
                'title' => 'The Boys',
                'photo' => '../images/theboys.jpg',
                'description' => 'TV Show about superhero but from realistic and dark view',
                'rating' => '100'
            ]
        ]);

        DB::table('episodes')->insert([
            [
                'movies_id' => '1',
                'episodes' => '1',
                'title' => 'Spongebob Squarepants: Battle for Bikini Bottom'
            ],[
                'movies_id' => '2',
                'episodes' => '1',
                'title' => 'The Amazing World of Gumball Episode 1'
            ],[
                'movies_id' => '2',
                'episodes' => '2',
                'title' => 'The Amazing World of Gumball Episode 2'
            ],[
                'movies_id' => '2',
                'episodes' => '3',
                'title' => 'The Amazing World of Gumball Episode 3'
            ],[
                'movies_id' => '3',
                'episodes' => '1',
                'title' => 'Blues Clues Episode 1'
            ],[
                'movies_id' => '3',
                'episodes' => '2',
                'title' => 'Blues Clues Episode 2'
            ],[
                'movies_id' => '3',
                'episodes' => '3',
                'title' => 'Blues Clues Episode 3'
            ],[
                'movies_id' => '4',
                'episodes' => '1',
                'title' => 'Cyborg Kuro-chan Episode 1'
            ],[
                'movies_id' => '4',
                'episodes' => '2',
                'title' => 'Cyborg Kuro-chan Episode 2'
            ],[
                'movies_id' => '4',
                'episodes' => '3',
                'title' => 'Cyborg Kuro-chan Episode 3'
            ],[
                'movies_id' => '5',
                'episodes' => '1',
                'title' => 'Shutter Island'
            ],[
                'movies_id' => '6',
                'episodes' => '1',
                'title' => 'Kungfu Hustle'
            ],[
                'movies_id' => '7',
                'episodes' => '1',
                'title' => 'Me Before You'
            ],[
                'movies_id' => '8',
                'episodes' => '1',
                'title' => 'Hachiko: A Dog Tale'
            ],[
                'movies_id' => '9',
                'episodes' => '1',
                'title' => 'Game of Thrones Episode 1'
            ],[
                'movies_id' => '9',
                'episodes' => '2',
                'title' => 'Game of Thrones Episode 2'
            ],[
                'movies_id' => '9',
                'episodes' => '3',
                'title' => 'Game of Thrones Episode 3'
            ],[
                'movies_id' => '10',
                'episodes' => '1',
                'title' => 'Dark Episode 1'
            ],[
                'movies_id' => '10',
                'episodes' => '2',
                'title' => 'Dark Episode 2'
            ],[
                'movies_id' => '10',
                'episodes' => '3',
                'title' => 'Dark Episode 3'
            ],[
                'movies_id' => '11',
                'episodes' => '1',
                'title' => 'Stranger Things Episode 1'
            ],[
                'movies_id' => '11',
                'episodes' => '2',
                'title' => 'Stranger Things Episode 2'
            ],[
                'movies_id' => '11',
                'episodes' => '3',
                'title' => 'Stranger Things Episode 3'
            ],[
                'movies_id' => '12',
                'episodes' => '1',
                'title' => 'The Boys Episode 1'
            ],[
                'movies_id' => '12',
                'episodes' => '2',
                'title' => 'The Boys Episode 2'
            ],[
                'movies_id' => '12',
                'episodes' => '3',
                'title' => 'The Boys Episode 3'
            ]
        ]);

    }
}