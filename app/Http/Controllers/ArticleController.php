<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = Category::with(['articles', 'articles.category'])->get();
        // return response()->json(['data' => $users]);
        $data = Category::all();
        return view('admin/berita/index')->with('data', $data);
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
        $id_kat = $request->kategori;
        DB::table('articles')->insert([
            'id_category' => $request->kategori,
            'judul' => $request->judul,
            'paragraf' => $request->content,
            'headlings' => $request->trending,
        ]);

        return redirect('/berita');

        // dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('articles')
            ->where('id_article',$id)
            ->get();
            
        return view('admin/berita/show')->with('data', $data);
        // dd($data);
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

    public function showRedaksi()
    {
        return view('redaksi/index');
    }
}
