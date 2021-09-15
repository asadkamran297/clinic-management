<?php

namespace App\Http\Controllers\Userarea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userarea/orders/index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function awaitingPayment()
    {
        $data['orders'] = [1,2,3,4,5];
        return view('userarea.orders.awaiting_payment',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pending()
    {
        $data['orders'] = [1,2,3,4,5];
        return view('userarea.orders.pending',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function completed()
    {
        $data['orders'] = [1,2,3,4,5];
        return view('userarea.orders.completed',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        if(isset($id)){
            // $users = \DB::connection('mysql2')->select('select * from users');
            // dd($users);

            $data['order'] = curlGetRequest('http://127.0.0.1:8000/website-data/1/order/'.$id);
            // dd($data['order']);
            return view('userarea/orders/detail');
        }else{
            abort('404');
        }
    }
}
