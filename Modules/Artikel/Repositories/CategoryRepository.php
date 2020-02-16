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
use Modules\Artikel\Entities\Article;
use Modules\Artikel\Repositories\Core\CategoryCoreRepositories;
use Modules\Artikel\Repositories\ArticleRepository;

class CategoryRepository implements CategoryCoreRepositories
{
    // model property on class instances
    protected $article;

    // Constructor to bind model to repo
    public function __construct(Category $category, Article $article)
    {
        $this->category = $category;
        $this->article = $article;
    }

    public function getCat()
    {
        return $this->category->withCount('articles')->get();
    }
    
    public function storeCategory($request)
    {
        return $this->category->create([
            'name'                  => $request->name,
            'slug'                  => $request->slug,
            'asigned'               => $request->asigned,
            'meta_tag_description'  => $request->meta_tag_description,
            'user_id'               => auth()->user()->id,
        ]);
        
    }

    public function deleteCategory($request)
    {
        $delete = $this->category->find($request->id)->delete();
        return $delete;
       
    }

    public function detailCategory($id)
    {
        $details = $this->category->where('id', $id)->first();
     
        return $details;
    }

    public function updateCategory($request,$id)
    {
        $findCategory = $this->category->find($id);
        $findCategory->name = $request->name;
        $findCategory->meta_tag_description = $request->meta_tag_description;
        $findCategory->asigned = $request->asigned;
        $findCategory->user_id = auth()->user()->id;
        $findCategory->update();
    }

    public function detailCategoryFrontend($slug)
    {
        $detail = $this->category->where('slug', $slug)->first();
        return $detail;
    }

    // public function bindingData($slug)
    // {
    //     $data['getCategory'] = $this->repo->detailCategoryFrontend($slug);
    //     $data['getRelatedArticle'] = $data['getCategory']->articles;
    //     return view('frontend::Timeline.beranda', $data);
    // }


}