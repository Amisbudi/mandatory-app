<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asset_statuses')->insert([
            [
                'name' => 'Bagus',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],[
                'name' => 'Cacat',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],[
                'name' => 'Hilang',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],[
                'name' => 'Dipinjam',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],[
                'name' => 'Direservasi',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],[
                'name' => 'Sedang dalam pengembalian',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],[
                'name' => 'Diperbaiki',
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ],
        ]);
    }
}
