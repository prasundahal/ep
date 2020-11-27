<?php

namespace App\Http\Controllers;

use App\Models\partner;
use Illuminate\Http\Request;

class partnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners=partner::all();
        return view('admin.viewpartners',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addpartners');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner=new Partner();
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required'
        ]);

        if($request->hasFile('image')){
            $filename=$request->image->getClientOriginalName();
            $request->image->move(public_path('gal3'),$filename);
            $partner->image=$filename;
        }
        $partner->name=$request->name;

        $partner->save();
        return redirect(route('viewpartners'))->with('message',"Added Successfully");
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
        $partner=Partner::find($id);
        $this->validate($request,[
            'name'=>'required'

        ]);

        if($request->hasFile('image')){
            $filename=$request->image->getClientOriginalName();
            $request->image->move(public_path('gal3'),$filename);
            $partner->image=$filename;
        }
        $partner->name=$request->name;

        $partner->save();
        return redirect(route('viewpartners'))->with('message',"Updated Successfully");
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

    public function editpartner($id){
        $partner=partner::find($id);
        return view('admin.editpartner',compact('partner'));
    }

    public function deletepartner($id){
        partner::find($id)->delete();
        return redirect()->back()->with('message',"Deleted Successfully");
    }
}
