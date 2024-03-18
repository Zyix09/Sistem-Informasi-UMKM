<?php

namespace Database\Seeders;

use App\Models\Ekspedisi;
use Illuminate\Database\Seeder;

class EkspedisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ekspedisi::insert(
            [
                [
                    'nama_expedisi' => 'JNE',
                    'harga' => '2000'
                ],
                [
                    'nama_expedisi' => 'POS',
                    'harga' => '5000'
                ],

            ]
        );
    }
}
