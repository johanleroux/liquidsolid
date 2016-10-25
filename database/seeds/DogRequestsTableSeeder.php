<?php

use Illuminate\Database\Seeder;

class DogRequestsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $DogRequest = new \App\Models\DogRequest;
    $DogRequest->user_id          = 1;
    $DogRequest->gender           = 0;
    $DogRequest->breed            = 'Labrador';
    $DogRequest->location         = 'Noordheuwel';
    $DogRequest->price_range_low  = 2000;
    $DogRequest->price_range_high = 5000;
    $DogRequest->notes            = 'No additional notes';
    $DogRequest->save();

    factory(App\Models\DogRequest::class, 50)->create();
  }
}
