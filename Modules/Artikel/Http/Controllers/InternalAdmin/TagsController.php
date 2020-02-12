<?php

namespace Modules\Artikel\Http\Controllers\InternalAdmin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Artikel\Repositories\TagsRepository;
use Cache;
use DB;

class TagsController extends Controller
{

    protected $model;


    public function __construct(TagsRepository $repo)
    {
        // set the model
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(TagsRepository $repo)
    {
       $getTags = $this->repo->getTags();
        return view('artikel::internaladmin.indexTags', compact('getTags'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('artikel::internaladmin.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $insert = $this->repo->storeCategory($request);
        return back()->with('success', 'Kategori berhasil dibuat');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('artikel::show');
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
    public function destroy(Request $request)
    {
       $data['deleteTags'] =  $this->repo->deleteTags($request);
       return back()->with('failed', 'Tags berhasil dihapus');
    }
}
