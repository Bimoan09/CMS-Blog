<?php




namespace Modules\Artikel\Repositories\Core;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


interface BannerCoreRepository
{
    public function getBanner();

    public function storeBanner($request);

    // public function update($id, array $data);

    public function deleteBanner($request);

    public function editBanner($id);

    public function updateBanner($request,$id);

  
}


