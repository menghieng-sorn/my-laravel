<?php
namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    //Query Builder Relationship
    function indexQueryBulder(){
        //Query Builder Inner Join
        // $userWithOrders = DB::table('users')
        // ->join('orders','users.id', '=', 'orders.user_id')
        // ->select('users.name','orders.product_name')
        // ->get();

        //Query Builder Outer Join - left join
        // $userWithOrders = DB::table('users')
        // ->leftJoin('orders','users.id', '=', 'orders.user_id')
        // ->select('users.name','orders.product_name')
        // ->get();

        //Query Builder Outer Join - right  join
        // $userWithOrders = DB::table('orders')
        // ->rightJoin('users','users.id', '=', 'orders.user_id')
        // ->select('orders.product_name','users.name')
        // ->get();

        //Query Builder Outer Join - Full join
        $userWithOrders = DB::table('users')
        ->leftJoin('orders','users.id', '=', 'orders.user_id')
        ->select('users.name','orders.product_name')
        ->unionAll(
            DB::table('users')
            ->rightJoin('orders','users.id', '=', 'orders.user_id')
            ->select('users.name','orders.product_name')
        )->get();
        dd($userWithOrders);
    }

    //Query Builder Relationship
    function indexORM(){
        $users = User::all();
        $addresses = Address::all();
        return view('address', compact('users','addresses'));
    }
}
