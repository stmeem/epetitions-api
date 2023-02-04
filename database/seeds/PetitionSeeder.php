<?php

use Illuminate\Database\Seeder;
use App\Petition;
class PetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Petition::class, 50)->create();
    }
}
