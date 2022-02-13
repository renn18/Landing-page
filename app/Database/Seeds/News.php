<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        // Membuat data
        $news_data = [
            [
                'title' => 'Selamat datang di CodeIgniter4',
                'slug' => 'codeigniter-intro',
                'content' => 'Pengenalan CodeIgniter untuk pemula.'
            ],
            [
                'title' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga vel magni nam ea necessitatibus atque? Minus perspiciatis accusantium temporibus optio quo exercitationem incidunt ex commodi. Saepe commodi atque facere quisquam.',
                'slug' => 'hello world',
                'content' => 'Halo dunia'
            ],
            [
                'title' => 'Meetup komunitas COdeIgniter Indonesia',
                'slug' => 'CodeIgniter-meetup',
                'content' => 'Seru sekali meetup perdana komunitas codeigniter indonesia'
            ]
        ];

        foreach($news_data as $data){
            // insert semua data ke tabel
            $this->db->table('news')->insert($data);
        }
    }
}
