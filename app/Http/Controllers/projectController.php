<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(){
        $projects=project::paginate(5);
        return view('admin.viewprojects',compact('projects'));
    }

    public function store(Request $request){
        $project=new project();
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required'
        ]);

        if($request->hasFile('image')){
            $filename=$request->image->getClientOriginalName();
            $request->image->move(public_path('gal1'),$filename);
            $project->image=$filename;
        }




        $project->name=$request->name;


        $project->save();
        return redirect(route('viewproject'))->with('message',' Added Successfully');
    }

    public function addproject(){
        return view('admin.addprojects');
    }

    public function viewprojectid($id){
        $project=project::find($id);
        return view('admin.viewprojectid',compact('project'));
    }

    public function deleteproject($id){
        project::find($id)->delete();
        return redirect()->back()->with('message'," Deleted Successfully");
    }

    public function editproject($id){
        $project=project::find($id);
        return view('admin.editproject',compact('project'));
    }

    public function updateproject(Request $request,$id){
        $project=project::find($id);
        $this->validate($request,[
            'name'=>'required',


        ]);

        if($request->hasFile('image')){
            $filename=$request->image->getClientOriginalName();
            $request->image->storeAs('projectImages',$filename);
            $project->image=$filename;
        }




        $project->projectName=$request->name;


        $project->save();
        return redirect(route('viewproject'))->with('message','Updated Successfully');
    }
}
