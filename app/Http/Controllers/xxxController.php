<?php

namespace App\Http\Controllers;


use App\Imports\ExcelImport;
use App\zzz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class xxxController extends Controller
{
    public function index()
    {
        $data['title'] = 'List Page';
        $data['zzzs'] = zzz::withTrashed()->orderBy('id','desc')->get();
        $data['serial'] = 1;
        return view('nasheed.process.index',$data);
    }

    public function create()
    {
        $data['title'] = 'Create New User';
        return  view('nasheed.process.create',$data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:zzzs|email',
            'phone'=>'required',
            'address'=>'required'
        ]);
        $user = $request->except('_token');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'L3T_'.$file->getClientOriginalName();
            $file->move('images/nasheed/',$file_name);
            $user['image'] = 'images/nasheed/'.$file_name;
        }

        zzz::create($user);
        session()->flash('message','User Created successfully');
        return redirect::to('index');
    }
    //Excel upload start
    public function bulkdata()
    {
        $data['title'] = 'Bulk Upload';
        return  view('nasheed.process.bulkdata',$data);
    }
    public function bulk(Request $request)
    {
        $file = $request->file;
        Excel::import(new ExcelImport, $file);
        return redirect::to('index');
    }
    //Excel upload end
    public function edit($id)
    {
        $data['title'] = 'Edit User';
        $data['zzz'] = zzz::findOrFail($id);
        return  view('nasheed.process.edit',$data);
    }
    public function update(Request $request, zzz $zzz ,$id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'sometimes|required|email|unique:zzzs,email,'.$zzz->id,
            'phone'=>'required',
            'address'=>'required',
        ]);
        $zzz_data = $request->except('_token','_method');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = date('d.m.Y').'_'.time().'_'.rand(0000,9999).'_'.'L3T_'.$file->getClientOriginalName();
            $file->move('images/nasheed/',$file_name);
            File::delete($zzz->image);
            $zzz_data['image'] = 'images/nasheed/'.$file_name;
        }

        zzz::where('id',$id)->update($zzz_data);
        session()->flash('message','User Updated successfully');
        return redirect::to('index');
    }
    public function destroy($id)
    {
        $zzz = zzz::findOrFail($id);
        $zzz->delete();
        session()->flash('message','User Deleted successfully');
        return redirect::to('index');
    }
    public function restore($id)
    {
        $zzz = zzz::onlyTrashed()->findOrFail($id);
        $zzz->restore();
        session()->flash('message', 'User restore successfully');
        return redirect::to('index');
    }
    public function delete($id)
    {
        $zzz = zzz::onlyTrashed()->findOrFail($id);
        File::delete($zzz->image);
        $zzz->forceDelete();
        session()->flash('message','User has been deleted permanently');
        return redirect::to('index');
    }
}
