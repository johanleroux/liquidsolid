<?php

use Carbon\Carbon;
use App\Models\Ad;
use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $users = User::take(25)->get();

    $users->each(function($u) {
      $date = new Carbon();
      $date->subDays(rand(1, 14));
      $order = $u->orders()->create([
        'seller_id' => rand(1,3),
        'payment' => 'card',
        'buyer_approved_at' => $date,
        'seller_approved_at' => $date,
      ]);

      $ads = Ad::where('user_id', $order->seller_id)->get();

      for($i = 0; $i < rand(1, 10); $i++)
      {
        $ad = $ads->random();
        $order->order_details()->create([
          'ad_id'    => $ad->id,
          'quantity' => rand(1,3),
          'price'    => $ad->price,
        ]);
      }
    });
  }
}
