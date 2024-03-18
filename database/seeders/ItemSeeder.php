<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert(
            [
                [
                    'user_id' => 3,
                    'categoryitem_id' => 1,
                    'nama_barang' => 'Kripik Jagung',
                    'harga_barang' => '20000',
                    'deskripsi' => 'Kripik enak',
                    'stok' => '2',
                    'berat_satuan' => '2'
                ],
                [
                    'user_id' => 3,
                    'categoryitem_id' => 2,
                    'nama_barang' => 'Baju Huwwai',
                    'harga_barang' => '50000',
                    'deskripsi' => 'Baju enak',
                    'stok' => '2',
                    'berat_satuan' => '3'
                ],

            ]
        );
    }
}
