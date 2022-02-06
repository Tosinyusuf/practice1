<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section2;

class Dashboard3Controller extends Controller
{
    public function show() {
        $sections = Section2::all();

        return view('admin/section2', [
            'sections' => $sections
        ]);


    }
    public function add() {

        return view('admin/add-section2');
    }
    public function store(Request $request) {
        // dd($request->title);
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
        ]);
       
        $sections = Section2::create([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'link' => $request->input('link'),
           
       
       ]);
       session()->flash('message','section has been updated successfully!');
       return view('admin/add-section2');
       
        
    }
    public function edit($id) {
      $sections = Section2::find($id);
            return view('admin/edit-section2')->with('sections', $sections);
        }
    public function update(Request $request, $id) {
        // dd($request->title);
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
        ]);

       Section2::where('id',$id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
       ]);
       session()->flash('message','section has been updated successfully!');
        return redirect('admin/section');
    } 
    public function destroy($id) 
    {
        $section = Section2::find($id)->delete();
        return redirect('admin/section');
    }
}
