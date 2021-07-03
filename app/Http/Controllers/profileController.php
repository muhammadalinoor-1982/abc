<?php

namespace App\Http\Controllers;

use App\Imports\profile_import;
use App\profile;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
//use function PHPUnit\Framework\returnArgument;


class profileController extends Controller
{
    public function index(){
        $data['title'] = 'List Page';
        $data['profiles'] = profile::withTrashed()->orderBy('id','desc')->get();
        $data['serial'] = 1;
        return  view('profile.process.index',$data);
    }
    public function create()
    {
        $data['title'] = 'Create New Profile';
        return  view('profile.process.create',$data);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:profiles|email',
            'phone'=>'required',
            'address'=>'required',
            'image'=>'image|required'
        ]);
        $data = new profile();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if($request->file('image')){
            $file = $request->file('image');
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'L3T_'.$file->getClientOriginalName();
            $file->move(public_path('images/profile/'),$file_name);
            $data['image'] = $file_name;
        }
        $data->save();
        session()->flash('message','User Created successfully');
        return redirect()->route('profile.index');
    }

    //Excel upload start
    public function bulkupload()
    {
        $data['title'] = 'Bulk Upload';
        return  view('profile.process.bulkupload',$data);
    }
    public function bulk(Request $request)
    {
        $file = $request->file;
        Excel::import(new profile_import, $file);
        return redirect()->route('profile.index');
    }
    //Excel upload end

    //image upload start
    public function bulkimage()
    {
        $data['title'] = 'Bulk image';
        return  view('profile.process.bulkimage',$data);
    }
    public function multipleimage(Request $request)
    {
        $files = $request->file('image');
        foreach($files as $file){
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('images/profile/'),$file_name);
        }
        return redirect()->route('profile.index');
    }
    //image upload end

        public function edit($id)
    {
        $data['title'] = 'Edit User';
        $data['profile'] = profile::findOrFail($id);
        return  view('profile.process.edit',$data);
    }
    public function update(Request $request, profile $profile, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'sometimes|required|email|unique:profiles,email,'.$profile->id,
            'phone'=>'required',
            'address'=>'required',
            'image'=>'image|required'
        ]);
        $update_data = profile::find($id);
        $update_data->name = $request->name;
        $update_data->email = $request->email;
        $update_data->phone = $request->phone;
        $update_data->address = $request->address;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('images/profile/'.$update_data->image));
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'L3T_'.$file->getClientOriginalName();
            $file->move(public_path('images/profile/'),$file_name);
            $update_data['image'] = $file_name;
        }
        $update_data->save();
        session()->flash('message','User Created successfully');
        return redirect()->route('profile.index');
    }
    public function destroy($id)
    {
        $profile = profile::findOrFail($id);
        $profile->delete();
        session()->flash('message','User Deleted successfully');
        return redirect()->route('profile.index');
    }
    public function restore($id)
    {
        $profile = profile::onlyTrashed()->findOrFail($id);
        $profile->restore();
        session()->flash('message', 'User restore successfully');
        return redirect()->route('profile.index');
    }
    public function delete($id)
    {
        $profile = profile::onlyTrashed()->findOrFail($id);
        if(file_exists('images/profile/'.$profile->image) AND !empty($profile->image)){
            unlink('images/profile/'.$profile->image);
        }
        $profile->forceDelete();
        session()->flash('message','User has been deleted permanently');
        return redirect()->route('profile.index');
    }
    public function delete_all(Request $request, $profile)
    {
        dd('ok');
        $ids = $request->ids;
        if(file_exists('images/profile/'.$profile->image) AND !empty($profile->image)){
            unlink('images/profile/'.$profile->image);
        }
        profile::whereIn('id',$ids)->forceDelete();
        return response()->json(['success'=>"Profile has been deleted"]);
        //session()->flash('message','User has been deleted permanently');
        //return redirect()->route('profile.index');
    }
}
