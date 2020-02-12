<?php


/**
    * created By    : Bimo Anugrah Prasetyo
    * @filename     : CategoryCoreRepositories
    * @lastModified : 22-01-2020, 15:05
 */


namespace Modules\Artikel\Repositories\Core;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

interface CategoryCoreRepositories
{
    public function getCat();

    // public function getCountArticle();

    // public function update($id, array $data);

    public function storeCategory(array $request);

    public function detailCategory($id);

    public function deleteCategory($request);
}


