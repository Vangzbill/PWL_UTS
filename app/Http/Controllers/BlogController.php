<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Illuminate\Support\Facades\Request::get('query') !== null){
            $query = \Illuminate\Support\Facades\Request::get('query');
            $blogs = BlogModel::where('author', 'LIKE', '%'.$query.'%')
                ->paginate(5);
        } else {
            $blogs = BlogModel::paginate(5);
        }
        return view('blog.blogs', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create_blog', ['url_form' => url('/blog')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:50',
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        BlogModel::create($request->all());
        return redirect('/blog')->with('success', 'Blog Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\BlogModel $blog
     * @return \Illuminate\Http\Response
     */
    public function show(BlogModel $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\BlogModel $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = BlogModel::find($id);
        return view('blog.create_blog', ['blog' => $blog, 'url_form' => url('/blog/' . $id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BlogModel $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'author' => 'required|string|max:50',
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        BlogModel::where('id', $id)->update($request->except('_token', '_method'));
        return redirect('/blog')->with('success', 'Blog Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\BlogModel $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        BlogModel::destroy($id);
        return redirect('/blog')->with('success', 'Blog Berhasil Dihapus!');
    }
}
