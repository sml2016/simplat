<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = [
            [
             'name'                => 'Luis Garcia Alanis',
             'email'               => 'luis@garcia.tv',
             'password'            => Hash::make('secret'),
            ],
            [
             'name'                => 'Perla Mendoza',
             'email'               => 'perla.mendoza@gmail.com',
             'password'            => Hash::make('secret'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        Model::reguard();
    }
}
