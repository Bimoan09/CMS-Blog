<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Artikel\Entities\Article;

class TestingDataController extends Controller
{
    public function testingData()
    {
        $data = Article::with('category')->get();
        dd($data);
    }
}
