<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user()
    {

        $data = User::all();

        return view('admin.users', compact('data'));
    }

    public function delete_user($id)
    {

        $data = User::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function foodmenu()
    {

        $data = Food::all();

        return view('admin.foodmenu', compact('data'));
    }


    public function upload(Request $request)
    {

        $data = new Food();

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }


    public function deletemenu($id)
    {

        $data = Food::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatemenu($id)
    {

        $data = Food::find($id);

        return view('admin.updateview', compact('data'));
    }

    public function updatefood(Request $request, $id)
    {

        $data = Food::find($id);

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }



    public function reservation(Request $request)
    {

        $data = new Reservation();


        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->guest = $request->guest;

        $data->date = $request->date;

        $data->time = $request->time;

        $data->message = $request->message;

        $data->save();

        return redirect()->back();
    }


    public function viewreservation()
    {

        if(Auth::id()){

            $data = Reservation::all();

            return view('admin.adminreservation', compact('data'));

        }   
        
        else{

            return redirect('login');

        }
      
    }



    public function viewchef()
    {

        $data = FoodChef::all();

        return view('admin.adminchef', compact('data'));
    }


    public function uploadchef(Request $request)
    {


        $data = new FoodChef();

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('chefimage', $imagename);

        $data->image = $imagename;

        $data->name = $request->name;

        $data->speciality = $request->speciality;


        $data->save();

        return redirect()->back();
    }


    public function updatechef($id)
    {

        $data = FoodChef::find($id);

        return view('admin.updatechef', compact('data'));
    }


    public function updatefoodchef(Request $request, $id)
    {

        $data = FoodChef::find($id);

        $image = $request->image;

        if ($image) {


            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('chefimage', $imagename);

            $data->image = $imagename;
        }



        $data->name = $request->name;

        $data->speciality = $request->speciality;


        $data->save();

        return redirect()->back();
    }



    public function deletechef($id)
    {

        $data = FoodChef::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function orders()
    {

        $data = Order::all();

        return view('admin.orders', compact('data'));
    }

    public function deleteorder($id)
    {

        $data = Order::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {

        $search = $request->search;

        $data = Order::where('name', 'like', '%' . $search . '%')
        ->orWhere('foodname', 'like', '%' . $search . '%')->get();

        return view('admin.orders', compact('data'));
    }
}
