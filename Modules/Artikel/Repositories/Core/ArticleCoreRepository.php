<?php


/**
    * created By    : Bimo Anugrah Prasetyo
    * @filename     : ArticleCoreRepositories
    * @lastModified : 22-01-2020, 15:05
 */


use Illuminate\Http\Request;
namespace Modules\Artikel\Repositories\Core;
use Modules\Artikel\Repositories\CategoryRepository;

interface ArticleCoreRepository
 {
//     public function create(array $data);
public function get();

public function getCategory(CategoryRepository $category);

public function storeArticle($request);

// public function edit($id);

// public function delete($id);

}