<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main=Main::first();
        return view('admin.main',compact('main'));
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'title' =>'required|string',
            'subtitle' =>'required|string',
        ]);

        
        $main = Main::first();
        $main->title = $request->title;
        $main->subtitle = $request->subtitle;
       
        if($request->file('bc_img')){
            $img_file = $request->file('bc_img');
            $img_file->storeAs('public/img/','bc_img.' . $img_file->getClientOriginalExtension());
            $main->bc_img = 'storage/img/bc_img.' . $img_file->getClientOriginalExtension();
        }

        if($request->file('resume')){
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('public/pdf/','resume.' . $pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/resume.' . $pdf_file->getClientOriginalExtension();
        }

        $main->save();

        return redirect()->route('admin_main')->with('success', "Main Page data has been updated successfully");
   
    }

}
