<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => 'Administrator',
            'email' => 'admin@nis.com',
            'password' => bcrypt('star_net2016'),
            'roles_id' => 1,
            'created_at' => Carbon::now(),
        ];

        User::insert($users);
    }
}
