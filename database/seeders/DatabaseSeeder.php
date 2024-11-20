<?php

namespace Database\Seeders;

use App\Models\Loker;
use App\Models\Perusahaan;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create(
            [
                'name' => 'tlsi',
                'email' => 'tlsi@gmail.com',
                'password' => bcrypt('12345'),
            ]
        );

        Perusahaan::create(
            [
                'id' => 1,
                'user_id' => 1,
                'nama_perusahaan' => 'PT. Tri Lestari Sandang Industri',
                'no_hp' => '088828282828',
                'email' => 'tlsi@gmail.com',
            ]
        );

        Loker::create(
            [
                'id' => 1,
                'user_id' => 1,
                'nama_perusahaan' => 'PT. Tri Lestari Sandang Industri',
                'nama_posisi' => 'staff akuntansi',
                'jobdesk' => 'hasdwfdwdfwfdwdwvdwdwsh',
                'salary' => '10000000',
                'jenis_pekerjaan' => 'kontrak',
            ]
        );
    }
}
