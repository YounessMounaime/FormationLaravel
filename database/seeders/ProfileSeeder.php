<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     \App\Models\Profile::factory()->create([
            'name' => 'testFFF',
            'email' => 'ba',
            'password' =>'1ss23',
            'bio' => 'AAsssBsssB',
        ]);
  
  

    }
    
}
