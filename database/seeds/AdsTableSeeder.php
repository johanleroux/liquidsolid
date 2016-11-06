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
    factory(Ad::class, 15)->create()->each(function($u) {
      for($i = 0; $i < 3; $i++)
      {
        $url = 'http://liquidsolid.app/dummy/dummy'.rand(1,9).'.jpg';

        $unique = md5(rand());
        $u->addMediaFromUrl($url)
        ->usingName($unique)
        ->usingFileName($unique . '.jpg')
        ->toCollection('images');
      }
    });
  }
}
