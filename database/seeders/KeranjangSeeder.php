<?php

namespace Database\Seeders;

use App\Models\Keranjang;
use Illuminate\Database\Seeder;

class KeranjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keranjang::insert(
            [
                [
                    'user_id' => 3,
                    'item_id' => 1,
                    'ekspedisi_id' => 1,
                    'jarak' => '2000 km',
                    'total_harga' => '35000',
                ],

            ]
        );
    }
}
