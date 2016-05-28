<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();

        User::create([
            'first_name' => 'Derek',
            'middle_name' => 'J.',
            'last_name' => 'Augustine',
            'email' => 'augshow@gmail.com',
            'password' => '$2a$06$DmSw2R5Qp67ysOQKPO6w8ePidTSTpl1as3fvtl9elAPsM8UKHfD0a'
        ]);

        User::reguard();
    }
}
