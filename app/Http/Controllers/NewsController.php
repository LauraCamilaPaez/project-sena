<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::whereStatus(1)->get();
        //$news = News::where('status',1)->get();
        return view('pages.admin.news.index', compact('news'));
    }

    public function create()
    {
        $news = News::all();
        return view('pages.admin.news.create', compact('news'));
    }

    public function store(Request $request)
    {
        $news = News::create($request->all());
        return redirect()->route('news.index')
            ->with('status', 'Se ha creado la Noticia correctamente.');
    }

    public function edit($id)
    {
        $news = News::all();
        $new = News::find($id);
        return view('pages.admin.news.edit', compact('new', 'news'));
    }

    public function update(Request $request, $id)
    {
        $new = News::find($id)->update($request->all());
        return back()->with([
            'status' => 'Se ha editado la Noticia correctamente',
            'type' => 'warning',
        ]);
    }

    public function destroy($id)
    {
        $news = News::find($id)->delete();
        return back()->with([
            'status'=>'Se ha eliminado la Noticia correctamente',
            'type'=>'danger',
        ]);
    }
}
