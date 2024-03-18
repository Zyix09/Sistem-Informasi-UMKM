<?php

namespace Database\Seeders;

use App\Models\KategoriItem;
use Illuminate\Database\Seeder;

class kategoriItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriItem::insert(
            [
                [
                    'nama_category' => 'jajan'
                ],
                [
                    'nama_category' => 'klambi'
                ],
                [
                    'nama_category' => 'makanan'
                ],

            ]
        );
    }
}
