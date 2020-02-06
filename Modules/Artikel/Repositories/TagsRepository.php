<?php


namespace Modules\Artikel\Repositories;



/**
    * created By    : Bimo Anugrah Prasetyo
    * @filename     : CategoryRepositories
    * @lastModified : 22-01-2020, 15:05
 */

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Modules\Artikel\Entities\Tags;
use Modules\Artikel\Repositories\Core\TagsCoreRepository;


class TagsRepository implements TagsCoreRepository
{
    // // model property on class instances
    // protected $article;

    // Constructor to bind model to repo
    public function __construct(Tags $tags)
    {
        $this->tags = $tags;
    }

    public function getTags()
    {
        return $this->tags->get();
    }

    public function storeTags($request)
    {
        return $this->tags->create($request->all());

    }

    public function deleteTags($request)
    {
        $deleteData = $this->tags->find($request->id)->delete();
        return $deleteData;
    }

}