<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->nom = 'SEGUEDA';
        $user->prenom = 'Kevin';
        $user->role = 'user';
        $user->email = 'seguedakevin@gmail.com';
        $user->password = bcrypt('12082000');
        $user->confirmationpassword = bcrypt('12082000');
        $user->numero = '76115747';
        $user->save();


        $user2 = new User();
        $user2->nom = 'BESSIN';
        $user2->prenom = 'Ivan';
        $user2->role = 'admin';
        $user2->email = 'bessinivan@gmail.com';
        $user2->password = bcrypt('password');
        $user2->confirmationpassword = bcrypt('password');
        $user2->numero = '76260804';
        $user2->save();


        $user3 = new User();
        $user3->nom = 'BOUDA';
        $user3->prenom = 'Danielle';
        $user3->role = 'admin';
        $user3->email = 'boudadanielle@gmail.com';
        $user3->password = bcrypt('password');
        $user3->confirmationpassword = bcrypt('password');
        $user3->numero = '69626162';
        $user3->save();




        $user4 = new User();
        $user4->nom = 'SEGUEDA';
        $user4->prenom = 'Audrey';
        $user4->role = 'user';
        $user4->email = 'seguedaaudrey@gmail.com';
        $user4->password = bcrypt('password');
        $user4->confirmationpassword = bcrypt('password');
        $user4->numero = '76115347';
        $user4->save();
    }
}
