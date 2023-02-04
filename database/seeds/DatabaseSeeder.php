<?php


use Illuminate\Database\Seeder;
use App\Petition;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PetitionSeeder::class);
    }
}
