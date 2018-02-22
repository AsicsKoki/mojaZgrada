<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building as Building;
use App\Admin as Admin;
use App\User as User;
use Session;
use Illuminate\Support\Facades\Auth as Auth;


class AdminController extends Controller
{
    //

    public function getInvoices(Building $building)
    {
        //Ne treba sve usere da uzme vec one za koju zgradu admin hoce da salje
        //Treba da se zna building_id za koji se salji racuni
        $admin = Admin::where('id', Session::get('admin')->id)->first();
        if($building->admin_id==$admin->id)
        {
            $users = User::where('building_id',$building->id)->get();
            return view('admin.invoices')->with('users',$users);
        }
        else
        {
            return redirect('/adminDashboard');
        }
    }

    public function getEditUsers()
    {
        $admin = Admin::where('id' , Session::get('admin')->id)->first();
        $building = $admin->building;
        return view('editusers' , ['building' => $building]);
    }

    public function getEditUserAccount($uid)
    {
        $user = User::where('id',$uid)->first();
        return view('admin.edituser',['user' => $user]);
    }

    public function postEditUserAccount(Request $request)
    {
        $user = User::where('id',$request->id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->number_of_occupants = $request->number_of_occupants;
        $user->phone = $request->phone;
        $user->apartment_number= $request->apartment_number;
        $user->password = Hash::make(Input::get('password'));
        $user->username = "Stan".$request->apartment_number;
        $user->save();

        return redirect()->back();
    }

    public function deleteUserAccount(Request $request)
    {
        $user = User::where('id',$request->id)->first();
        $user->delete();
        return redirect()->route('getEditUserAccounts');
    }

    public function getAdminDashboard()
    {
        $admin = Admin::where('id', Session::get('admin')->id)->first();
        $buildings=$admin->buildings;
        return view('admin.dashboard')->with("buildings",$buildings);
    }




}
