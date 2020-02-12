<?php


/**
    * created By    : Bimo Anugrah Prasetyo
    * @filename     : ArticleCoreRepositories
    * @lastModified : 22-01-2020, 15:05
 */


use Illuminate\Http\Request;
namespace Modules\Artikel\Repositories\Core;
use Modules\Artikel\Repositories\CategoryRepository;
use Modules\Artikel\Repositories\TagsRepository;

interface ArticleCoreRepository
 {
//     public function create(array $data);
public function get();

public function getCategory(CategoryRepository $category);

public function storeArticleAdmin($request);

public function getTagsline(TagsRepository $tags);

public function getArticleMember();

public function findArticle($id);


// public function edit($id);

// public function delete($id);

}