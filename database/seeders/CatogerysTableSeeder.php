<?php

namespace Database\Seeders;

use App\Models\Catogery;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatogerysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
             Event::create([
                'name' => 'منازل',
                
                'image' => 'catogery/1.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            Event::create([
                'name' => 'فنادق',
                
                'image' => 'catogery/2.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        

            Event::create([
                'name' => 'شاليهات',
                
                'image' => 'catogery/3.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            Event::create([
                'name' => 'فلل',
                
                'image' => 'catogery/4.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}