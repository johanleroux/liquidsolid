<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Ad;
use App\Models\User;
use App\Models\Breed;
use App\Models\Order;
use App\Models\OrderDetail;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    abort_unless(Auth::user()->hasRole('admin'), 404);

    $data = array();

    $data['num_users'] = User::count();
    $data['num_breeds'] = Breed::count();

    $data['num_breeders'] = DB::table('role_user')->where('role_id', 1)->count();
    $data['num_moderator'] = DB::table('role_user')->where('role_id', 2)->count();
    $data['num_admin'] = DB::table('role_user')->where('role_id', 3)->count();

    $data['num_ads_overall'] = Ad::withTrashed()->count();
    $data['num_ads_active'] = Ad::count();

    $weekBack = Carbon::today()->subWeek();
    $data['orders'] = Order::orderByQuantity()->take(5)->get();

    $data['orders_week'] = Order::where('created_at', '>=', $weekBack)->get();

    return view('report.index', compact('data'));
  }
}

/**
* Number of Users: 150
* Number of Breeders: 150
* Number of Breeds: 150
* Overall Number of Ads: 150
* Active Number of Ads: 150
*/
