<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      User::factory(1)->create([
        'email' => 'admin@realestate.com',
        'password' => Hash::make('0000')
      ]);
      Property::factory(10)->create();
    }
}
