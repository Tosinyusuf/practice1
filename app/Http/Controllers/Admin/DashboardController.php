<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FrontImage;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{

    public function dashboard() {
        return view('admin/dashboard');
    }
    public function show() {
        $frontimgs = FrontImage::all();

        return view('admin/frontimage', [
            'frontimgs' => $frontimgs
        ]);


    }
    public function add() {

        return view('admin/add-frontimage');
    }
    public function store(Request $request) {
        // dd('ok');
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'linktitle' => 'required',
            'image' => 'required|mimes:jpg, png, jpeg',
            'link' => 'required',
        ]);
        $newImageName = time() .'-' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
       
        $frontImgs = FrontImage::create([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'linktitle' => $request->input('linktitle'),
            'image' => $newImageName,
            'link' => $request->input('link'),
           
       
       ]);
       session()->flash('message','frontimg has been updated successfully!');
       return view('admin/add-frontimage');
       
        
    }
    public function edit($id) {
      $frontimg = FrontImage::find($id);
            return view('admin/edit-frontimage')->with('frontimg', $frontimg);
        }
    public function update(Request $request, $id) {
        // dd($request->title);
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'linktitle' => 'required',
            'image' => 'required|mimes:jpg, png, jpeg',
            'link' => 'required',
        ]);
        $newImageName = time() .'-' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

       FrontImage::where('id',$id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'linktitle' => $request->linktitle,
            'image' => $newImageName,
            'link' => $request->link,
       ]);
       session()->flash('message','frontimg has been updated successfully!');
        return redirect('admin/FrontImage');
    } 
    public function destroy($id) 
    {
        $frontimg = FrontImage::find($id)->delete();
        return redirect('admin/FrontImage');
    }
   
}
