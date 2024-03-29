<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Order;

class AdminController extends Controller
{
    public function user(){

        $data = user::all();
        return view('admin.user',compact('data'));
    }

    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();

        return redirect()->back();

    }

    public function foodmenu(){

        $data = Food::all();
        return view('admin.foodmenu',compact('data'));
    }

    public function deletemenu($id){

        $data = Food::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updatemenu($id){

        $data = Food::find($id);
        return view('admin.updatemenu',compact('data'));

    }
    //    form data catchup
    public function update(Request $request, $id){

        $data = food::find($id);

        $image = $request->image;
       $imagename = time(). '.'.$image->getClientOriginalExtension();
       $request->image->move('foodimage',$imagename);
       $data->image=$imagename;

       $data->title = $request->title;
       $data->price = $request->price;
       $data->description = $request->desc;

       $data->save();
       return redirect()->back();


    }

    public function uploadfood(Request $request){
       $data = new food;

       $image = $request->image;
       $imagename = time(). '.'.$image->getClientOriginalExtension();
       $request->image->move('foodimage',$imagename);
       $data->image=$imagename;

       $data->title = $request->title;
       $data->price = $request->price;
       $data->description = $request->desc;

       $data->save();
       return redirect()->back();
    }

    public function reservation(Request $request){
       $data = new reservation;

       $data->name = $request->name;
       $data->email = $request->email;
       $data->phone = $request->phone;
       $data->guest = $request->guest;
       $data->date = $request->date;
       $data->time = $request->time;
       $data->message= $request->message;


       $data->save();
       return redirect()->back();
    }

    public function adminreservation(){

        if(Auth::id()){


        $data = reservation::all();
        return view('admin.adminreservation',compact('data'));
        }
        else{
            return redirect('login');
        }
    }

    public function foodchef(){
        $data = Foodchef::all();
        return view('admin.foodchef',compact('data'));
    }

    public function uploadchef(Request $request){

        $data = new foodchef;

        $image = $request->image;
        $imagename = time(). '.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;


        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();
        return redirect()->back();
    }

    public function deletechef($id){

        $data = Foodchef::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updatechef($id){

        $data = Foodchef::find($id);
        return view('admin.updatechef',compact('data'));
    }

    public function updatechefdata(Request $request, $id){
        $data = Foodchef::find($id);

        $image = $request->image;
       $imagename = time(). '.'.$image->getClientOriginalExtension();
       $request->image->move('chefimage',$imagename);
       $data->image=$imagename;

       $data->name = $request->name;
       $data->speciality = $request->speciality;


       $data->save();
       return redirect()->back();

    }

    public function order()
    {
        $data = Order::all();
        return view('admin.order',compact('data'));
    }

    public function search(Request $request){
        $search = $request->search;
        $data = Order::where('name','Like','%'.$search.'%')->orWhere('foodname','Like','%'.$search.'%')->get();

        return view('admin.order',compact('data'));

    }


}
