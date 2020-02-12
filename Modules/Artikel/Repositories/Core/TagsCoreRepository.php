<?php


/**
    * created By    : Bimo Anugrah Prasetyo
    * @filename     : CategoryCoreRepositories
    * @lastModified : 22-01-2020, 15:05
 */


namespace Modules\Artikel\Repositories\Core;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

interface TagsCoreRepository
{
    // public function getTags();

    public function storeTags($request);

    public function deleteTags($request);

  
}


