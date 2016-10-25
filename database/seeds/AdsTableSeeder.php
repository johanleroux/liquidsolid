<?php

use App\Models\Ad;
use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    factory(Ad::class, 50)->create();
  }
}
