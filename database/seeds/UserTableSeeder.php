<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr = User::create([
            'name'=>"Admin",
            'priv'=>'A',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin@123')      
        ]); 

        $usr = User::create([
            'name' => "Pedro Monteiro",
            'priv' => 'A',
            'email' => 'pers2087@gmail.com',
            'password' =>bcrypt('hitchcock')
        ]);  
        
        $usr = User::create([
            'name'=>"Receita Federal",
            'priv'=>'O',
            'email'=>'receita@receita.com',
            'password'=>bcrypt('receita@123')      
        ]);
        
         $usr = User::create([
            'name' => "Juliana Leal",
            'priv' => 'A',
            'email' => 'juliana.leal.alves@gmail.com',
            'password' =>bcrypt('123@mudar')
        ]); 
    }
}
