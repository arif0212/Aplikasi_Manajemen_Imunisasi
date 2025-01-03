<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'admin',
            'password' => Hash::make('123'),
            'role' => '1',
        ]);

        DB::table('pegawai')->insert([
            'user_id' => '1',
            'nip' => '2232222',
            'nama' => 'Admin',
            'alamat' => 'jogja',
            'jk' => 'Laki-laki',
            'tempat_lahir' => 'jogja',
            'no_hp' => '087771787133',
            'tgl_lahir' => Carbon::parse('2000-01-01'),
        ]);

    }
}
