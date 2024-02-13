<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->get();

        return view("article.index", [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $levels = Level::all();

        return view('article.create', [
            "levels" => $levels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $banner = $request->file('banner');
        $extensionBanner = $banner->getClientOriginalExtension();
        $bannerName = time() . "." . $extensionBanner;

        $banner->move("articles", $bannerName);


        Article::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "writer" => $request->writer,
            "for" => $request->for,
            "content" => $request->content,
            "banner" => $bannerName
        ]);

        return redirect()->to('/article');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {

        $article = Article::whereSlug($slug)->first();

        return view("article.show", [
            "article" => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $article = Article::whereSlug($slug)->first();
        $levels = Level::all();

        return view("article.edit", [
            "article" => $article,
            "levels" => $levels
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {

        $article = Article::whereSlug($slug)->first();
        $bannerName = $article->banner;

        if ($request->file('banner')) {

            $imagePath = public_path('articles/' . $bannerName);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }

            $banner = $request->file('banner');
            $extensionBanner = $banner->getClientOriginalExtension();
            $bannerName = time() . "." . $extensionBanner;

            $banner->move("articles", $bannerName);
        }


        $article->update([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "writer" => $request->writer,
            "for" => $request->for,
            "content" => $request->content,
            "banner" => $bannerName
        ]);

        return redirect()->to('/article');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $imagePath = public_path('articles/' . $article->banner);
        if (File::exists($imagePath)) {
            unlink($imagePath);
        }
        $article->delete();

        return true;
    }
}
