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
use Modules\Admin\Entities\User;
use Modules\Artikel\Repositories\Core\ArticleCoreRepository;
use Modules\Artikel\Repositories\CategoryRepository;
use Modules\Artikel\Repositories\TagsRepository;
use Carbon\Carbon;
use Image;
use File;
use Str;

class ArtikelRepository implements ArticleCoreRepository
{
    // model property on class instances
    protected $article;

    public $path;
    public $dimensions;

    // Constructor to bind model to repo
    public function __construct(Article $article,CategoryRepository $category, TagsRepository $tags, User $user)
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

    public function storeArticleAdmin($request)
    {

        $request->validate([
            'tittle' => 'required|string|unique:articles|max:255',
            'slug' => 'required|string|min:5',
            'meta_tag_keyword' => 'required|string',
            'meta_tag_description' => 'required|string|min:50',
            'featured_image' => 'required | mimes:jpeg,jpg,png | max:1000',
            'focus_keyword' => 'required|string|unique:articles',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'status' => 'required',

         ],
         [
            'tittle.required' => 'Tittle wajib diisi',
            'meta_tag_keyword.required' => 'meta tittle wajib diisi' ,
            'meta_tag_description.required' => 'meta description minimal 50 karakter',
            'focus_keyword.required' => 'Focus keyword Sudah digunakan, Silahkan gunakan Focus Keyword yang lain'
         ]);
     
        // Image upload Process
        $reqImage = $request->file('featured_image');
        
        $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $reqImage->getClientOriginalName();
        Image::make($reqImage)->resize(640,360)->save(storage_path('app/public/' . '/' . $fileName));

        $storeData = $this->article->create([
            'tittle'                    => $request->tittle,
            'slug'                      => Str::slug($request->tittle),
            'meta_tag_keyword'          => $request->meta_tag_description,
            'meta_tag_keyword'          => $request->meta_tag_keyword,
            'content'                   => $request->content,
            'featured_image'            => $fileName,
            'featuredimage_description' => $request->featuredimage_description,
            'status'                    => 1,
            'date_published'            => Carbon::now(),   
            'category_id'               => $request->category_id,
            'user_id'                   => auth()->user()->id,
            'article_owner'             => 'internaladmin',
        ]);
         $storeData->tags()->sync((array)$request->input('tags'));
    }


    public function storeArticleMember($request)
    {
         // Image upload Process
         $reqImage = $request->file('featured_image');
        
         $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $reqImage->getClientOriginalName();
         Image::make($reqImage)->resize(640,360)->save(storage_path('app/public/' . '/' . $fileName));
 
         $storeData = $this->article->create([
             'tittle'                    => $request->tittle,
             'slug'                      => Str::slug($request->tittle),
             'content'                   => $request->content,
             'featured_image'            => $fileName,
             'featuredimage_description' => $request->featuredimage_description,
             'status'                    => 2,
             'date_published'            => Carbon::now(),   
             'category_id'               => $request->category_id,
             'user_id'                   => auth()->user()->id,
             'article_owner'             => 'member',
         ]);

          $storeData->tags()->sync((array)$request->input('tags'));
     }
    

    public function getCategory(CategoryRepository $category)
    {
        return $this->category->getCat();
    }

    public function getTagsline(TagsRepository $tags)
    {
        return $this->tags->getTags();
    }

    public function getArticleAdmin()
    {

        $getArticle = $this->article->where('user_id', auth()->user()->id)->with('users')->get();
        return $getArticle;
    }

    public function getArticleMember()
    {

        $getArticle = $this->article->where('article_owner', 'member')->with('users')->get();
        return $getArticle;
    }

    public function findArticle($slug)
    {
        $test = $this->article->where('slug', $slug)->first();
      return $test;
       
    }

    public function deleteArticle($request)
    {
        return $this->article->find($request->id)->delete();
    }

    public function updateArticle($request,$slug)
    {
        $find = $this->article->where('slug', $slug)->first();
        $image = $request->file('featured_image');
        
        $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $image->getClientOriginalName();
        Image::make($image)->resize(640,360)->save(storage_path('app/public/' . '/' . $fileName));
        $find->featured_image = $fileName;
        $find->tittle = $request->tittle;
        $find->slug = Str::slug($request->tittle);
        $find->content =$request->content;
        $find->featuredimage_description =$request->featuredimage_description;
        $find->status = 1;
        $find->category_id = $request->category_id;
        $find->user_id = auth()->user()->id;
        $find->article_owner = 'internaladmin';
        $find->save();
    
        // $update = $this->article->save([
        //     'tittle'                    => $request->tittle,
        //     'slug'                      => Str::slug($request->tittle),
        //     'content'                   => $request->content,
        //     'featured_image'            => $fileName,
        //     'featuredimage_description' => $request->featuredimage_description,
        //     'status'                    => 2,
        //     'date_published'            => Carbon::now(),   
        //     'category_id'               => $request->category_id,
        //     'user_id'                   => auth()->user()->id,
        //     'article_owner'             => 'member',
        // ]);
      
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