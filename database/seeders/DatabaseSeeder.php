<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Note;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'juan_ch1990@hotmail.com',
            'password' => bcrypt('abc123.')
        ]);
        
        Note::factory(30)->create();
    }
}
