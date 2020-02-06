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
use Modules\Artikel\Repositories\TagsRepository;
use Carbon\Carbon;
use Image;
use File;

class ArtikelRepository implements ArticleCoreRepository
{
    // model property on class instances
    protected $article;

    public $path;
    public $dimensions;

    // Constructor to bind model to repo
    public function __construct(Article $article,CategoryRepository $category, TagsRepository $tags)
    {
        $this->article = $article;
        $this->category = $category;
        $this->tags = $tags;

        //image path
        // $this->path = public_path('/images');
        //image dimension
       
        
    }

    // Get all instances of model
    public function get()
    {
        return $this->article->select('tittle', 'content')->get();
    }

    public function storeArticle($request)
    {

     
        // Image upload Process
        $reqImage = $request->file('featured_image');
        
        $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $reqImage->getClientOriginalName();
        Image::make($reqImage)->resize(200,300)->save(storage_path('app/public/' . '/' . $fileName));

        $storeData = $this->article->create([
            'tittle'                    => $request->tittle,
            'content'                   => $request->content,
            'featured_image'            => $fileName,
            'featuredimage_description'  => $request->featuredimage_description,
            'status'                => 1,
            'category_id'               => $request->category_id,
        ]);
         $storeData->tags()->sync((array)$request->input('tags'));
         return $storeData;
    }

    public function getCategory(CategoryRepository $category)
    {
        return $this->category->getCat();
    }

    public function getTagsline(TagsRepository $tags)
    {
        return $this->tags->getTags();
    }



    // public function UploadManyImage()
    // {
    //     $image = $request->file('image');
    //     $desc = $request->description;
      

    //     foreach($image as $value){
    //         $name = $value->getClientOriginalName();
    //         $path = $value->move(public_path(). '/image', $name);
          
    //     }

    //     Image::create([
    //         'filename' => $path,
    //         'descriotion' => $desc,
    //     ]);

    //     return back();
    // }

   
    

}