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
use Modules\Account\Entities\User;
use Modules\Artikel\Repositories\Core\ArticleCoreRepository;
use Modules\Artikel\Repositories\CategoryRepository;
use Modules\Artikel\Repositories\TagsRepository;
use Carbon\Carbon;
use Image;
use File;
use Str;
use Queue;

class ArtikelRepository implements ArticleCoreRepository
{
    // model property on class instances
    protected $article;

    // Constructor to bind model to repo
    public function __construct(Article $article,CategoryRepository $category, TagsRepository $tags, User $user)
    {
        $this->article = $article;
        $this->category = $category;
        $this->tags = $tags;


    }

    // Get all instances of model
    public function get()
    {
        return $this->article->select('tittle', 'content')->get();
    }

    public function storeArticleAdmin($request)
    {

        // $request->validate([
        //     'tittle' => 'required|string|unique:articles|max:255',
        //     'meta_tag_keyword' => 'required|string',
        //     'meta_tag_description' => 'required|string|min:50',
        //     'featured_image' => 'required | mimes:jpeg,jpg,png | max:1000',
        //     'featuredimage_description' => 'required|min:25',
        //     'category_id' => 'required',
        //     'content' => 'required',

        //  ],
        //  [
        //     'tittle.required' => 'Tittle wajib diisi',
        //     'meta_tag_keyword.required' => 'meta tittle wajib diisi' ,
        //     'meta_tag_description.required' => 'meta description minimal 50 karakter',
        //     'featuredimage_description' => 'Deskipsi ini Gambar harus diisi',
        //     'content.required'  => 'Konten tidak boleh kosong',
        //  ]);

        // Image upload Process
        $reqImage = $request->file('featured_image');

        $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $reqImage->getClientOriginalName();
        Image::make($reqImage)->resize(640,360)->save(storage_path('app/public/' . '/' . $fileName));

        $storeData = $this->article->create([
            'tittle'                    => $request->tittle,
            'slug'                      => Str::slug($request->tittle),
            'meta_tag_description'      => $request->meta_tag_description,
            'meta_tag_keyword'          => $request->meta_tag_keyword,
            'content'                   => $request->content,
            'featured_image'            => $fileName,
            'featuredimage_description' => $request->featuredimage_description,
            'status'                    => 1,
            'view_count'                => 0,
            'category_id'               => $request->category_id,
            'user_id'                   => auth()->user()->id,
            'article_owner'             => 'internaladmin',
        ]);
         $storeData->tags()->sync((array)$request->input('tags'));
    }


    public function storeArticleMember($request)
    {

        // $request->validate([
        //     'tittle' => 'required|string|unique:articles|max:255',
        //     'meta_tag_keyword' => 'required|string',
        //     'meta_tag_description' => 'required|string|min:50',
        //     'featured_image' => 'required | mimes:jpeg,jpg,png | max:1000',
        //     'featuredimage_description' => 'required|min:25',
        //     'category_id' => 'required',
        //     'content' => 'required',

        //  ],
        //  [
        //     'tittle.required' => 'Tittle wajib diisi',
        //     'meta_tag_keyword.required' => 'meta tittle wajib diisi' ,
        //     'meta_tag_description.required' => 'meta description minimal 50 karakter',
        //     'featuredimage_description' => 'Deskipsi ini Gambar harus diisi',
        //     'content.required'  => 'Konten tidak boleh kosong',
        //  ]);

         // Image upload Process
         $reqImage = $request->file('featured_image');
         $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $reqImage->getClientOriginalName();
         Image::make($reqImage)->resize(640,360)->save(storage_path('app/public/' . '/' . $fileName));

         $storeData = $this->article->create([
             'tittle'                    => $request->tittle,
             'slug'                      => Str::slug($request->tittle),
             'meta_tag_description'      => $request->meta_tag_description,
             'meta_tag_keyword'          => $request->meta_tag_keyword,
             'content'                   => $request->content,
             'featured_image'            => $fileName,
             'featuredimage_description' => $request->featuredimage_description,
             'status'                    => 2,
             'view_count'                => 0,
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

        $getArticle = $this->article->where('article_owner', 'member')->with('category')->get();
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

    public function updateArticleAdmin($request,$slug)
    {

        $request->validate([
            'tittle' => 'required|string|unique:articles|max:255',
            'meta_tag_keyword' => 'required|string',
            'meta_tag_description' => 'required|string|min:50',
            'featured_image' => 'required | mimes:jpeg,jpg,png | max:1000',
            'featuredimage_description' => 'required|min:25',
            'category_id' => 'required',
            'content' => 'required',

         ],
         [
            'tittle.required' => 'Tittle wajib diisi',
            'meta_tag_keyword.required' => 'meta tittle wajib diisi' ,
            'meta_tag_description.required' => 'meta description minimal 50 karakter',
            'featuredimage_description' => 'Deskipsi ini Gambar harus diisi',
            'content.required'  => 'Konten tidak boleh kosong',
         ]);

        $find = $this->article->where('slug', $slug)->first();
        $image = $request->file('featured_image');

        $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $image->getClientOriginalName();
        Image::make($image)->resize(640,360)->save(storage_path('app/public/' . '/' . $fileName));
        $find->featured_image = $fileName;
        $find->tittle = $request->tittle;
        $find->slug = Str::slug($request->tittle);
        $find->meta_tag_keyword = $request->meta_tag_keyword;
        $find->meta_tag_description = $request->meta_tag_description;
        $find->content =$request->content;
        $find->featuredimage_description =$request->featuredimage_description;
        $find->status = 1;
        $find->category_id = $request->category_id;
        $find->user_id = auth()->user()->id;
        $find->article_owner = 'internaladmin';
        $find->save();


    }

    public function updateArticleMember($request,$slug)
    {

        $request->validate([
            'tittle' => 'required|string|unique:articles|max:255',
            'meta_tag_keyword' => 'required|string',
            'meta_tag_description' => 'required|string|min:50',
            'featured_image' => 'required | mimes:jpeg,jpg,png | max:1000',
            'featuredimage_description' => 'required|min:25',
            'category_id' => 'required',
            'content' => 'required',

         ],
         [
            'tittle.required' => 'Tittle wajib diisi',
            'meta_tag_keyword.required' => 'meta tittle wajib diisi' ,
            'meta_tag_description.required' => 'meta description minimal 50 karakter',
            'featuredimage_description' => 'Deskipsi ini Gambar harus diisi',
            'content.required'  => 'Konten tidak boleh kosong',
         ]);

        $find = $this->article->where('slug', $slug)->first();
        $image = $request->file('featured_image');

        $fileName = Carbon::now()->timestamp. '-' . uniqid() . '.' . $image->getClientOriginalName();
        Image::make($image)->resize(640,360)->save(storage_path('app/public/' . '/' . $fileName));
        $find->featured_image = $fileName;
        $find->tittle = $request->tittle;
        $find->slug = Str::slug($request->tittle);
        $find->meta_tag_keyword = $request->meta_tag_keyword;
        $find->meta_tag_description = $request->meta_tag_description;
        $find->content =$request->content;
        $find->featuredimage_description =$request->featuredimage_description;
        $find->status = 1;
        $find->category_id = $request->category_id;
        $find->user_id = auth()->user()->id;
        $find->article_owner = 'member';
        $find->save();


    }

    public function approvedArticle($request,$slug)
    {
        $find = $this->article->where('slug', $slug)->first();
        $find->status = 1;
        $find->save();
    }

    public function visitorArticleViews($slug)
    {
        $find = $this->article->where('slug', $slug)->increment('view_count', 1);
        return $find;

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
