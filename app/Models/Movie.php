<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
        [
            'id' => 'tt1745961',
            'judul' => 'Dilan 1990',
            'sinopsis' => 'Kisah tentang seorang perempuan bernama Milea ini baru saja pindah ke Bandung. Saat datang ke sekolah baru, Milea tidak sengaja bertemu dengan Dilan.',
            'tahun' => 2018,
            'pemain' => ['Iqbaal Ramadhan', 'Vanesha Prescilla',],
            'foto_sampul' => 'Dilan.jpg',
        ],
        [
            'id' => 'tt1745962',
            'judul' => 'KKN Di Desa Penari',
            'sinopsis' => 'Kisah enam orang mahasiswa Nur, Widya, Ayu, Bima, Anton, dan Wahyu saat melaksanakan kuliah kerja nyata (KKN) di sebuah desa terpencil yang dipilih mereka tanpa mengetahui bahwa desa tersebut menyimpan misteri yang tidaklah biasa.',
            'tahun' => 2022,
            'pemain' => ['Tissa Biani', 'Adinda Thomas', 'Achmad Megantara'],
            'foto_sampul' => 'KKN.jpg',
        ],
        [
            'id' => 'tt1745963',
            'judul' => 'Sewu Dino',
            'sinopsis' => 'Film horor ini mengisahkan seorang Sri yang menghadapi kesulitan ekonomi, lalu ia mendapat pekerjaan di keluarga Atmodjo. Sri memiliki keunikan lahir di hari Jumat Kliwon.',
            'tahun' => 2023,
            'pemain' => ['Mikha Tambayong', 'Gisellma Firmansyah', 'Rio Dewanto', 'Marthino Lio', 'Givina Lukita Dewi'],
            'foto_sampul' => 'Sewu.jpg',
        ],
        [
            'id' => 'tt1745964',
            'judul' => 'Susah Sinyal',
            'sinopsis' => 'Film yang mengisahkan Ellen, seorang ibu tunggal yang sukses sebagai pengacara di Jakarta. Namun jarang meluangkan waktu untuk anaknya, Kiara. Ibunda Ellen yang paling dekat dengan Kiara, menyarankan mereka berlibur ke Sumba.',
            'tahun' => 2023,
            'pemain' => ['Adinia Wirasti', 'Ernest Prakasa', 'Aurora Ribero', 'Refal Hady', 'Valerie Thomas'],
            'foto_sampul' => 'Susah.jpg',
        ],
    ];

    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
}
