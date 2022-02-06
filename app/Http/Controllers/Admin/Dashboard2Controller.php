<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class Dashboard2Controller extends Controller
{
    public function show() {
        $articles = Article::all();

        return view('admin/article', [
            'articles' => $articles
        ]);


    }
    public function add() {

        return view('admin/add-article');
    }
    public function store(Request $request) {
        // dd($request->title);
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required|mimes:jpg, png, jpeg',
            'link' => 'required',
        ]);
        $newImageName = time() .'-' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
       
        $articles = Article::create([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'image' => $newImageName,
            'link' => $request->input('link'),
           
       
       ]);
       session()->flash('message','article has been updated successfully!');
       return view('admin/add-article');
       
        
    }
    public function edit($id) {
      $articles = Article::find($id);
            return view('admin/edit-article')->with('articles', $articles);
        }
    public function update(Request $request, $id) {
        // dd($request->title);
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required|mimes:jpg, png, jpeg',
            'link' => 'required',
        ]);
        $newImageName = time() .'-' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

       Article::where('id',$id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $newImageName,
            'link' => $request->link,
       ]);
       session()->flash('message','article has been updated successfully!');
        return redirect('admin/article');
    } 
    public function destroy($id) 
    {
        $article = Article::find($id)->delete();
        return redirect('admin/article');
    }
}
