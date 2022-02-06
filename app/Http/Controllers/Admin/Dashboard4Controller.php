<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section3;

class Dashboard4Controller extends Controller
{
    public function show() {
        $sections3 = Section3::all();

        return view('admin/section3', [
            'sections3' => $sections3
        ]);


    }
    public function add() {

        return view('admin/add-section3');
    }
    public function store(Request $request) {
        // dd($request->title);
        $this->validate($request, [
            'imagetitle' => 'required',
            'imagetext' => 'required',
            'image' => 'required|mimes:jpg, png, jpeg',
            'imagelink' => 'required',
        ]);
        $newImageName = time() .'-' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        $sections3 = Section3::create([
            'imagetitle' => $request->input('imagetitle'),
            'imagetext' => $request->input('imagetext'),
            'imagelink' => $request->input('imagelink'),
            'image' => $newImageName,
           
       
       ]);
       session()->flash('message','section3 has been updated successfully!');
       return view('admin/add-section3');
       
        
    }
    public function edit($id) {
      $sections3 = Section3::find($id);
            return view('admin/edit-section3')->with('sections3', $sections3);
        }
    public function update(Request $request, $id) {
        // dd($request->title);
        $this->validate($request, [
            'imagetitle' => 'required',
            'imagetext' => 'required',
            'image' => 'required|mimes:jpg, png, jpeg',
            'imagelink' => 'required',
        ]);

        $newImageName = time() .'-' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

       Section3::where('id',$id)->update([
              'imagetitle' => $request->input('imagetitle'),
            'imagetext' => $request->input('imagetext'),
            'imagelink' => $request->input('imagelink'),
            'image' => $newImageName,
       ]);
       session()->flash('message','section3 has been updated successfully!');
        return redirect('admin/section3');
    } 
    public function destroy($id) 
    {
        $section3 = Section3::find($id)->delete();
        return redirect('admin/section3');
    }
}
