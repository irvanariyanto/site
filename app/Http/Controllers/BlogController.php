<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Blog;
use PDF;


class BlogController extends Controller
{


    //
    public function index()
    {
        
        // $blogs=Blog::withTrashed()->find(3);
        // $blogs->restore();
    	$blogs=Blog::all();

    	return view('blog/home',['blogs' => $blogs]);
    }

    public function show($id)
    {
    	$blog = Blog::find($id);
        if(!$blog)
            abort(404);
    	return view('blog/single', ['blog' => $blog]);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'description' =>'required|min:5|max:10'
            ]);
        //insert biasa
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description =$request->description;
        $blog->save();

        return redirect('blog');

        //insert mass assigment
        // Blog::create([
        //     'title'=>'Halo Bandung',
        //     'description' => "Halo putra bandung",
        //     'created_at' => '2016-12-23 02:09:12'
        //     ]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        if(!$blog)
            abort(404);
        return view('blog/edit', ['blog' => $blog]);   
    }

    public function update(Request $request, $id)
    {
        //update
        $blog=Blog::find($id);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->save();
        return redirect('blog/'.$id);
        //update mass assigment
        // Blog::find(3)->update([
        //     'title'=> 'Halo Lampung',
        //     'description' => 'Halo ini isi lampung'
        //     ]);   
    }

    public function destroy($id){
        //delete
        // $blog=Blog::find(1);
        // $blog->delete();

        //delete
        // Blog::destroy(2);

        //soft delete
        $blog=Blog::find($id);
        $blog->delete();

        return redirect('blog');
    }

    public function pdf(Request $request){
        $items = Blog::all();

        view()->share('items',$items);


        if($request->has('download')){

            $pdf = PDF::loadView('pdfview');

            return $pdf->download('pdfview.pdf');

        }


        return view('pdfview');
    }
}
