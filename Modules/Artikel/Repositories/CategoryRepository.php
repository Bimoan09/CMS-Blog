<?php


namespace Modules\Artikel\Repositories;



/**
    * created By    : Bimo Anugrah Prasetyo
    * @filename     : CategoryRepositories
    * @lastModified : 22-01-2020, 15:05
 */


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Modules\Artikel\Entities\Category;
use Modules\Artikel\Repositories\Core\CategoryCoreRepositories;

class CategoryRepository implements CategoryCoreRepositories
{
    // model property on class instances
    protected $article;

    // Constructor to bind model to repo
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getCat()
    {
        return $this->category->get();
    }
    
    public function storeCategory($request)
    {
        return $this->category->create([
            'name'                  => $request->name,
            'slug'                  => $request->slug,
            'asigned'               => $request->asigned,
            'meta_tag_description'  => $request->meta_tag_description,
        ]);
        
    }


}