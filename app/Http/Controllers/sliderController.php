<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=slider::all();
        return view('admin.viewsliders',compact('sliders'));
    }

    public function addslider()
    {
        return view('admin.addsliders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider=new slider();
        $this->validate($request,[
            'sliderImage'=>'required',
            'title'=>'required',
            'subtitle1'=>'required',
            'subtitle2'=>'required',
            'content'=>'required'
        ]);

        if($request->hasFile('sliderImage')){
            $filename=$request->sliderImage->getClientOriginalName();
            $request->sliderImage->move(public_path('sliderImages'),$filename);
            $slider->image=$filename;
        }
        $slider->title=$request->title;
        $slider->subtitle1=$request->subtitle1;
        $slider->subtitle2=$request->subtitle2;
        $slider->content=$request->content;
        $slider->save();
        return redirect(route('slider'))->with('message','Slider Added Successfully');
    }

    public function updateslider(Request $request,$id)
    {
        $slider=slider::find($id);
        $this->validate($request,[
            'title'=>'required',
            'subtitle1'=>'required',
            'subtitle2'=>'required',
            'content'=>'required'
        ]);

        if($request->hasFile('sliderImage')){
            $filename=$request->sliderImage->getClientOriginalName();
            $request->sliderImage->storeAs('sliderImages',$filename);
            $slider->image=$filename;
        }
        $slider->title=$request->title;
        $slider->subtitle1=$request->subtitle1;
        $slider->subtitle2=$request->subtitle2;
        $slider->content=$request->content;
        $slider->save();
        return redirect(route('slider'))->with('message','Slider updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteslider($id){
        slider::find($id)->delete();
        return redirect(route('slider'))->with('message',"Slider Deleted Successfully");
    }

    public function editslider($id){
        $slider=slider::find($id);
        return view('admin.editslider',compact('slider'));
    }
}
