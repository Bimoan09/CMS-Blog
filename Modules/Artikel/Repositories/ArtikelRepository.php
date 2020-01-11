<?php


namespace Modules\Artikel\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Artikel\Entities\Article;

interface RepositoryInterface
{
    public function get();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function select(array $field);
}


class ArtikelRepository implements RepositoryInterface
{
    // model property on class instances
    protected $article;

    // Constructor to bind model to repo
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    // Get all instances of model
    public function get()
    {
        return $this->article->get();
    }

    // create a new record in the database
    public function create(array $data)
    {
        return $this->article->create($data);
    }

    // update record in the database
    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->article->destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->article-findOrFail($id);
    }

    // Get the associated model
    public function getModel()
    {
        return $this->article;
    }

    // Set the associated article
    public function setarticle($article)
    {
        $this->article = $article;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->article->with($relations);
    }

    public function select(array $field)
    {
        
        return $this->article->select($field);
    }
}