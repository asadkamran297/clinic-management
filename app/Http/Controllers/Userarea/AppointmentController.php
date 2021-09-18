<?php

namespace App\Http\Controllers\Userarea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AppointmentRequest;
use App\Models\{
    User,
    Appointment
};
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['models'] = Appointment::orderBy('id','desc')->get();
        $data['today_appointments'] =  Appointment::whereDate('visit_datetime', Carbon::today())->count();
        $data['admin_users'] =  User::where('role_id','1')->count();
        $data['other_users'] =  User::where('role_id','2')->count();
        return view('appointments.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $token = Appointment::orderBy('token_no','desc')->first();
        $data['token_no'] = isset($token) && $token->token_no ? $token->token_no : '1';
        return view('appointments.add_edit',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppointmentRequest $request)
    {
        $data = $request->all();
        if(isset($request->token_no) && $request->token_no=='0'){
            $data['token_no'] = '1';
        }
        if(isset($request->token_no) && $request->token_no=='1'){
            $ch = Appointment::orderBy('token_no','desc')->first();
            $data['token_no'] = isset($ch) && $ch->token_no ?  $ch->token_no+1 : '1';
        }
        $data['visit_datetime'] = date('d-m-y h:i:s');;
        $model = new Appointment;
        $model->fill($data);
        $model->save();
        return redirect()->route('userarea.appointments.show',['appointment'=>$model->id]);
        // return redirect()->route('userarea.appointments.index')->with('success','Appointment created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(isset($id)){
            $data['model'] = Appointment::find($id);
            return view('appointments.slip',$data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['model'] = Appointment::find($id);
        return view('appointments.add_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppointmentRequest $request, $id)
    {
        $data = $request->all();
        $model = Appointment::find($id);
        $model->update($data);
        return redirect()->route('userarea.appointments.index')->with('success','Appointment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::find($id)->delete();
        return redirect()->route('userarea.appointments.index')->with('success','Appointment deleted successfully');
    }
}
