<?php

use App\Models\Breed;
use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    factory(Breed::class, 20)->create();
  }
}
