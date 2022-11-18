<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $profile=Profile::all();
        return view('profile.list',['profile'=>$profile]);
    }

    public function create(){
        return view('profile.create');
    }
    
    public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'username'=>'required',
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'image'=>'image:gif,png,jpeg,jpg'
        ]);
        if($validator->passes()){
            $profile=new Profile();
            $profile->username=$request->username;
            $profile->email=$request->email;
            $profile->first_name=$request->first_name;
            $profile->last_name=$request->last_name;
            $profile->age=$request->age;

            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('profile_image',$imagename);
            $profile->image=$imagename;
            $profile->save();
            $request->session()->flash('success','Profile added successfully.');
            return redirect()->route('profile.index');

        }
        else{
            return redirect()->route('profile.create')->withErrors($validator);
        }
    }

    public function edit($id){
        $data=Profile::find($id);
        //dd("$profile");
        return view('profile.edit',['data'=>$data]);
    }

    public function update($id, Request $request){
            $profile=Profile::find($id);
            $profile->username=$request->username;
            $profile->email=$request->email;
            $profile->first_name=$request->first_name;
            $profile->last_name=$request->last_name;
            $profile->age=$request->age;

            
            $profile->update();
            $request->session()->flash('success','Profile Updated successfully.');
            return redirect()->route('profile.index');
    }

    public function destroy($id, Request $request){
        $profile=Profile::find($id);
        $profile->delete();
        $request->session()->flash('s','Profile delete successfully.');

        return redirect()->back();
    }

}
