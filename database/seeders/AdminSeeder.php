<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->where('role','admin')->delete();
        DB::table('account')->insert([
            [
                'email' => 'admin@api-glu-eye.azurewebsites.net',
                'name' => 'Super Admin',
                'password' => '$2y$10$r3uZ8j/QdkpkrAylOyIOVupQ1ywm4UxiO6iNFe03WRLMKosaJTkFS',
                'role' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
