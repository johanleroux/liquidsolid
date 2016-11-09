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
    factory(Ad::class, 50)->create()->each(function($u) {
      for($i = 0; $i < 1; $i++)
      {
        $file = storage_path('app/public') . '/dummy'.rand(1,9).'.jpg';

        $unique = md5(rand());
        $u->addMediaFromUrl($file)
        ->usingName($unique)
        ->usingFileName($unique . '.jpg')
        ->toCollection('images');
      }
    });
  }
}
