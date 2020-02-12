<?php

namespace Modules\Artikel\Http\Controllers\InternalAdmin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Artikel\Repositories\ArtikelRepository;
use Modules\Artikel\Repositories\CategoryRepository;
use Modules\Artikel\Repositories\TagsRepository;
use Modules\Artikel\Entities\Article;
use Modules\Artikel\Entities\Category;
use Str;

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
        $data['articleAdmin'] = $this->repo->getArticleAdmin();
        return view('artikel::Internaladmin.indexArticle', $data);
    }

    public function indexArticleMember()
    {
        $data['articleMember'] = $this->repo->getArticleMember();
        return view('artikel::Internaladmin.indexArticleMember', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(CategoryRepository $category, TagsRepository $tags)
    {
        $data['getCategory'] = $this->repo->getCategory($category);
        $data['getTags'] = $this->repo->getTagsline($tags);
        return view('artikel::Internaladmin.createArticle', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $storeData = $this->repo->storeArticleAdmin($request);
        return back()->with('success', 'Artikel berhasil diupload');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($tittle)
    {
        $data['detail'] = $this->repo->findArticle($tittle);
        return view('artikel::Internaladmin.detailArticle', $data);
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
}
