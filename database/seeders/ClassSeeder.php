<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            'XII-RPL', 'XI-PPLG1', 'XI-PPLG2', 'X-PPLG1', 'X-PPLG2',
            'XII-MM', 'XI-DKV1', 'XI-DKV2', 'X-DKV1', 'X-DKV2',
            'XII-PFTV', 'XI-BCF1', 'XI-BCF2', 'X-BCF1', 'X-BCF2'
        ];

        foreach ($data as $item) {
            Classes::create([
                'name' => $item,
            ]);
        };

    }
}
