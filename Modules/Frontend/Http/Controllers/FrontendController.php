<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Artikel\Repositories\ArtikelRepository;
use Modules\Artikel\Repositories\CategoryRepository;
use Modules\Artikel\Repositories\TagsRepository;
use Modules\Artikel\Entities\Article;
use Modules\Artikel\Entities\Category;

class FrontendController extends Controller
{


    protected $model;


    public function __construct(CategoryRepository $repo)
    {
        // set the model
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(CategoryRepository $category)
    {
        $data['getCategory'] = $this->repo->getCat($category);
        return view('frontend::Timeline.beranda', $data);
    }

    
     public function getArticleAppendCategory($slug)
     {
         $data['getCategory'] = $this->repo->detailCategoryFrontend($slug);
         $data['getRelatedArticle'] = $data['getCategory']->articles;
         return view('frontend::Timeline.articleList', $data);
     }
    

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    
    public function create()
    {
        return view('frontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('frontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('frontend::edit');
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
}
