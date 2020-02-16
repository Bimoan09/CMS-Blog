<?php

namespace Modules\Artikel\Http\Controllers\InternalAdmin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Artikel\Repositories\BannerRepository;


class BannerController extends Controller
{



    protected $model;


    public function __construct(BannerRepository $repo)
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
        $data['banner'] = $this->repo->getBanner();
        return view('artikel::Internaladmin.indexBanner', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $data['mode'] = 'create';
        return view('artikel::Internaladmin.createBanner');

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $saveToDatabase = $this->repo->storeBanner($request);
        return redirect()->route('admin.banner.index')->with('success', 'Banner berhasil dibuat');
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
        $data['mode'] = 'edit';
        $data['findBanner'] = $this->repo->editBanner($id);
        return view('artikel::Internaladmin.createBanner', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $this->repo->updateBanner($request,$id);
        return redirect()->route('admin.banner.index')->with('success', 'Banner berhasil diupdate');
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
