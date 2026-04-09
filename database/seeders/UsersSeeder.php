<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([[
            "name" => "João Vitor Garcia",
            "cpf" => "70324512415",
            "date_birth" => "2005-06-21",
            "email" => "vitor@gmail.com",
            "password" => bcrypt("123456"),
            "role_id" => "1"
        ],
        [
            "name" => "Cliente",
            "cpf" => "70324512412",
            "date_birth" => "2005-06-21",
            "email" => "cliente@gmail.com",
            "password" => bcrypt("123456"),
            "role_id" => "2"
        ],
        [
            "name" => "Admin",
            "cpf" => "70324512413",
            "date_birth" => "2005-06-21",
            "email" => "admin@gmail.com",
            "password" => bcrypt("123456"),
            "role_id" => "3"
        ]
        ]);
    }
}
