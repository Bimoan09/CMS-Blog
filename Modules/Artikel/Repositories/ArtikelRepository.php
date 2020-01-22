<?php


/**
    * created By    : Bimo Anugrah Prasetyo
    * @filename     : ArtikelRepository
    * @lastModified : 22-01-2020, 15:05
 */


namespace Modules\Artikel\Repositories;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Modules\Artikel\Entities\Article;
use Modules\Artikel\Repositories\Core\ArticleCoreRepository;
use Modules\Artikel\Repositories\CategoryRepository;

class ArtikelRepository implements ArticleCoreRepository
{
    // model property on class instances
    protected $article;

    // Constructor to bind model to repo
    public function __construct(Article $article,CategoryRepository $category)
    {
        $this->article = $article;
        $this->category = $category;
    }

    // Get all instances of model
    public function get()
    {
        return $this->article->select('tittle', 'content')->get();
    }

    public function storeArticle($request)
    {
        $storeData = $this->article->create($request->all());
        return $storeData;
    }

    public function getCategory(CategoryRepository $category)
    {
        return $this->category->getCat();
    }


}