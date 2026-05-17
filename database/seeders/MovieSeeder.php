<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            // Sci-Fi
            [
                'title' => 'Inception',
                'genre' => 'Sci-Fi',
                'year' => 2010,
                'rating' => 8.8,
                'description' => 'Seorang pencuri yang masuk ke alam mimpi untuk menanam sebuah ide.',
                'poster' => 'https://image.tmdb.org/t/p/w500/9gk7adHYeDvHkCSEqAvQNLV5Uge.jpg',
                'director' => 'Christopher Nolan',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Interstellar',
                'genre' => 'Sci-Fi',
                'year' => 2014,
                'rating' => 8.6,
                'description' => 'Perjalanan astronot melewati lubang cacing demi menyelamatkan manusia.',
                'poster' => 'https://image.tmdb.org/t/p/w500/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg',
                'director' => 'Christopher Nolan',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Dune',
                'genre' => 'Sci-Fi',
                'year' => 2021,
                'rating' => 8.0,
                'description' => 'Paul Atreides memimpin pemberontakan di planet gurun Arrakis demi menguasai rempah paling berharga di alam semesta.',
                'poster' => 'https://image.tmdb.org/t/p/w500/d5NXSklXo0qyIYkgV94XAgMIckC.jpg',
                'director' => 'Denis Villeneuve',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'The Matrix',
                'genre' => 'Sci-Fi',
                'year' => 1999,
                'rating' => 8.7,
                'description' => 'Seorang hacker menemukan bahwa dunia yang ia tinggali hanyalah sebuah simulasi komputer.',
                'poster' => 'https://image.tmdb.org/t/p/w500/f89U3ADr1oiB1s9GkdPOEpXUk5H.jpg',
                'director' => 'Wachowski Sisters',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Arrival',
                'genre' => 'Sci-Fi',
                'year' => 2016,
                'rating' => 7.9,
                'description' => 'Seorang ahli bahasa direkrut untuk berkomunikasi dengan alien yang mendarat di Bumi.',
                'poster' => 'https://image.tmdb.org/t/p/w500/x2FJsf1ElAgr63Y3PNPtJrcmpoe.jpg',
                'director' => 'Denis Villeneuve',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Action
            [
                'title' => 'The Dark Knight',
                'genre' => 'Action',
                'year' => 2008,
                'rating' => 9.0,
                'description' => 'Batman menghadapi Joker yang membawa kekacauan di Gotham City.',
                'poster' => 'https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
                'director' => 'Christopher Nolan',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Mad Max: Fury Road',
                'genre' => 'Action',
                'year' => 2015,
                'rating' => 8.1,
                'description' => 'Di dunia post-apokaliptik, Max bergabung dengan Furiosa untuk melarikan diri dari tiran kejam.',
                'poster' => 'https://image.tmdb.org/t/p/w500/8tZYtuWezp8JbcsvHYO0O46tFbo.jpg',
                'director' => 'George Miller',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'John Wick',
                'genre' => 'Action',
                'year' => 2014,
                'rating' => 7.4,
                'description' => 'Mantan pembunuh bayaran keluar dari masa pensiunnya untuk membalas dendam atas kematian anjingnya.',
                'poster' => 'https://image.tmdb.org/t/p/w500/fZPSd91yGE9fCcCe6OoQr6E3Bev.jpg',
                'director' => 'Chad Stahelski',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Top Gun: Maverick',
                'genre' => 'Action',
                'year' => 2022,
                'rating' => 8.3,
                'description' => 'Pete Mitchell kembali melatih para pilot Top Gun untuk misi berbahaya yang mempertaruhkan nyawa.',
                'poster' => 'https://image.tmdb.org/t/p/w500/62HCnUTziyWcpDaBO2i1DX17ljH.jpg',
                'director' => 'Joseph Kosinski',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Thriller
            [
                'title' => 'Parasite',
                'genre' => 'Thriller',
                'year' => 2019,
                'rating' => 8.5,
                'description' => 'Keluarga miskin perlahan menyusup ke kehidupan keluarga kaya.',
                'poster' => 'https://image.tmdb.org/t/p/w500/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
                'director' => 'Bong Joon-ho',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Gone Girl',
                'genre' => 'Thriller',
                'year' => 2014,
                'rating' => 8.1,
                'description' => 'Seorang pria menjadi tersangka utama setelah istrinya menghilang secara misterius.',
                'poster' => 'https://image.tmdb.org/t/p/w500/fSRb7vyIP8rQpL0I47P3qUsEKX3.jpg',
                'director' => 'David Fincher',
                'created_at' => now(), 'updated_at' => now()
            ],
        
            // Horror
            [
                'title' => 'Get Out',
                'genre' => 'Horror',
                'year' => 2017,
                'rating' => 7.7,
                'description' => 'Seorang pria kulit hitam mengunjungi keluarga kekasihnya yang kulit putih dan menemukan rahasia mengerikan.',
                'poster' => 'https://image.tmdb.org/t/p/w500/tFXcEccSQMf3lfhfXKSU9iRBpa3.jpg',
                'director' => 'Jordan Peele',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'A Quiet Place',
                'genre' => 'Horror',
                'year' => 2018,
                'rating' => 7.5,
                'description' => 'Sebuah keluarga berjuang untuk bertahan hidup di dunia yang dihuni makhluk pemburu suara.',
                'poster' => 'https://image.tmdb.org/t/p/w500/nAU74GmpUk7t5iklEp3bufwDq4n.jpg',
                'director' => 'John Krasinski',
                'created_at' => now(), 'updated_at' => now()
            ],

            // Drama
            [
                'title' => 'The Shawshank Redemption',
                'genre' => 'Drama',
                'year' => 1994,
                'rating' => 9.3,
                'description' => 'Seorang bankir yang dipenjara karena pembunuhan yang tidak dilakukannya membangun persahabatan luar biasa.',
                'poster' => 'https://image.tmdb.org/t/p/w500/lyQBXzOQSuE59IsHyhrp0qIiPAz.jpg',
                'director' => 'Frank Darabont',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Forrest Gump',
                'genre' => 'Drama',
                'year' => 1994,
                'rating' => 8.8,
                'description' => 'Kisah hidup luar biasa seorang pria sederhana dari Alabama yang tanpa sengaja terlibat dalam berbagai peristiwa bersejarah.',
                'poster' => 'https://image.tmdb.org/t/p/w500/arw2vcBveWOVZr6pxd9XTd1TdQa.jpg',
                'director' => 'Robert Zemeckis',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Whiplash',
                'genre' => 'Drama',
                'year' => 2014,
                'rating' => 8.5,
                'description' => 'Seorang drummer muda ambisius dilatih oleh instruktur musik yang kejam dan perfeksionis.',
                'poster' => 'https://image.tmdb.org/t/p/w500/7fn624j5lj3xTme2SgiLCeuedmO.jpg',
                'director' => 'Damien Chazelle',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'La La Land',
                'genre' => 'Drama',
                'year' => 2016,
                'rating' => 8.0,
                'description' => 'Seorang aktris dan musisi jazz jatuh cinta di Los Angeles sambil mengejar impian mereka.',
                'poster' => 'https://image.tmdb.org/t/p/w500/uDO8zWDhfWwoFdKS4fzkUJt0Rf0.jpg',
                'director' => 'Damien Chazelle',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Comedy
            [
                'title' => 'The Truman Show',
                'genre' => 'Comedy',
                'year' => 1998,
                'rating' => 8.2,
                'description' => 'Seorang pria perlahan menyadari bahwa seluruh hidupnya adalah acara reality show televisi.',
                'poster' => 'https://image.tmdb.org/t/p/w500/vuza0WqY239yBXOadKlGwJsZJFE.jpg',
                'director' => 'Peter Weir',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Animation
            [
                'title' => 'Your Name',
                'genre' => 'Animation',
                'year' => 2016,
                'rating' => 8.4,
                'description' => 'Dua remaja bertukar tubuh secara misterius dan saling jatuh cinta.',
                'poster' => 'https://image.tmdb.org/t/p/w500/q719jXXEzOoYaps6babgKnONONX.jpg',
                'director' => 'Makoto Shinkai',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Spider-Man: Into the Spider-Verse',
                'genre' => 'Animation',
                'year' => 2018,
                'rating' => 8.4,
                'description' => 'Miles Morales menjadi Spider-Man dan bertemu versi lain dari dirinya dari dimensi paralel.',
                'poster' => 'https://image.tmdb.org/t/p/w500/iiZZdoQBEYBv6id8su7ImL0oCbD.jpg',
                'director' => 'Bob Persichetti',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Spirited Away',
                'genre' => 'Animation',
                'year' => 2001,
                'rating' => 8.6,
                'description' => 'Seorang gadis kecil tersesat di dunia roh dan harus bekerja untuk menyelamatkan orang tuanya.',
                'poster' => 'https://image.tmdb.org/t/p/w500/39wmItIWsg5sZMyRUHLkWBcuVCM.jpg',
                'director' => 'Hayao Miyazaki',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Fantasy
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'genre' => 'Fantasy',
                'year' => 2001,
                'rating' => 7.6,
                'description' => 'Seorang anak yatim piatu mengetahui bahwa dia adalah penyihir dan memulai petualangan di Hogwarts.',
                'poster' => 'https://image.tmdb.org/t/p/w500/wuMc08IPKEatf9rnMNXvIDxqP4W.jpg',
                'director' => 'Chris Columbus',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'genre' => 'Fantasy',
                'year' => 2001,
                'rating' => 8.8,
                'description' => 'Seorang hobbit memulai perjalanan epik bersama Fellowship untuk menghancurkan Cincin Satu.',
                'poster' => 'https://image.tmdb.org/t/p/w500/6oom5QYQ2yQTMJIbnvbkBL9cHo6.jpg',
                'director' => 'Peter Jackson',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'Doctor Strange',
                'genre' => 'Fantasy',
                'year' => 2016,
                'rating' => 7.5,
                'description' => 'Seorang ahli bedah brilian mempelajari seni mistis setelah mengalami kecelakaan yang mengubah hidupnya.',
                'poster' => 'https://image.tmdb.org/t/p/w500/uGBVl7xCM1aEY4kJFbOVWFDEuGU.jpg',
                'director' => 'Scott Derrickson',
                'created_at' => now(), 'updated_at' => now()
            ],
            // Romance
            [
                'title' => 'Titanic',
                'genre' => 'Romance',
                'year' => 1997,
                'rating' => 7.9,
                'description' => 'Kisah cinta tragis antara penumpang kelas satu dan kelas tiga di atas kapal Titanic yang karam.',
                'poster' => 'https://image.tmdb.org/t/p/w500/9xjZS2rlVxm8SFx8kPC3aIGCOYQ.jpg',
                'director' => 'James Cameron',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'title' => 'The Notebook',
                'genre' => 'Romance',
                'year' => 2004,
                'rating' => 7.8,
                'description' => 'Kisah cinta epik antara Noah dan Allie yang terpisah oleh perbedaan kelas sosial namun tetap saling mencintai.',
                'poster' => 'https://image.tmdb.org/t/p/w500/qom1SZSENdmHFNZBXbtLAGselJK.jpg',
                'director' => 'Nick Cassavetes',
                'created_at' => now(), 'updated_at' => now()
            ],
        ]);
    }
}