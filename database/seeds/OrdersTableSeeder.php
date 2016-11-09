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
    $users = User::take(5);

    $users->each(function($u) {
      $date = new Carbon();
      $r = rand(1, 5);
      $date->subDays($r);
      $order = $u->orders()->create([
        'seller_id' => rand(1,3),
        'payment' => 'card',
        'buyer_approved_at' => $date,
        'seller_approved_at' => $date,
      ]);

      $ads = Ad::where('user_id', $order->seller_id)->get();

      for($i = 0; $i < $r; $i++)
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
