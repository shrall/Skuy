<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Marshall';
        $user->email = 'shrallvierdo@gmail.com';
        $user->password = Hash::make('wars1234');
        $user->email_verified_at = '2021-05-20 17:33:03';
        $user->save();
    }
}
