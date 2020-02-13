<?php


namespace Modules\Artikel\Repositories;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Modules\Artikel\Entities\Banner;
use Modules\Artikel\Repositories\Core\BannerCoreRepository;
use Carbon\Carbon;
use Image;
use File;


class BannerRepository implements BannerCoreRepository
{
    // // model property on class instances
    // protected $article;

    // Constructor to bind model to repo
    public function __construct(Banner $banners)
    {
        $this->banners = $banners;
    }

    public function getBanner()
    {
        return $this->banners->get();
    }

    public function storeBanner($request)
    {
        $requestImage = $request->file('image');
        $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $requestImage->getClientOriginalName();
        Image::make($requestImage)->resize(340,340)->save(storage_path('app/public' . '/' . $fileName));

      

        $saveToDatabase = $this->banners->create([
            'file'          => $fileName,
            'name'          => $request->name,
            'description'   => $request->description,
            'location'      => $request->location,
        ]);
        
        return $saveToDatabase;
  
    }

    public function deleteBanner($request)
    {
        return $this->banners->find($request->id)->delete();
    }

    public function editBanner($id)
    {
        return $this->banners->find($id);
    }

    public function updateBanner($request,$id)
    {
        $requestImage = $request->file('image');
        $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $requestImage->getClientOriginalName();
        Image::make($requestImage)->resize(340,340)->save(storage_path('app/public' . '/' . $fileName));

        $findId = $this->banners->find($id);
        $findId->file = $fileName;
        $findId->name =$request->name;
        $findId->description =$request->description;
        $findId->location =$request->location;

       $findId->update();
    }


}