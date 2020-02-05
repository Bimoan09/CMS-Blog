<?php

namespace Modules\Artikel\Http\Controllers\Member;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Artikel\Repositories\ArtikelRepository;
use Modules\Artikel\Repositories\CategoryRepository;
use Modules\Artikel\Entities\Article;
use Modules\Artikel\Entities\Category;

class ArtikelController extends Controller
{

    protected $model;


    public function __construct(ArtikelRepository $repo)
    {
        // set the model
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $article = $this->repo->getArticle();
        return view('artikel::Member.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(CategoryRepository $category)
    {
        $getCategory = $this->repo->getCategory($category);
        return view('artikel::Member.create', compact('getCategory'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $storeData = $this->repo->storeArticle($request);
        return back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id=1)
    {
        return view('artikel::Member.detail');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('artikel::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    // public function getImage()
    // {
    //     $article = Article::select('featured_image')->get();
    //     return view('welcome', compact('article'));
    // }

    // public function testingData($slug)
    // {
        
    //     $data  = Category::where('slug', $slug)->first();
    //     $relations = $data->articles;
    //     // $data = \DB::table('articles')->where('category_id', $id)->get();
        
    //     return view('artikel::member.testing', compact('data', 'relations'));
    // }
}
