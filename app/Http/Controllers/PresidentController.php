<?php

namespace App\Http\Controllers;

use App\President;
use Illuminate\Http\Request;

class PresidentController extends SuperController
{
    public function __construct(President $model)
    {
        parent::__construct($model);
    }

    public function list()
    {
        $model = $this->_context->first();
        return view('page/president', compact('model'));
    }


    public function page(string $article) // : Collection
    {
        // if (!view()->exists("page/{$article}")) {
        //     return view("notfound");
        // }

        $article = str_replace('-', ' ', $article);

        // if ($article == 'quoi') {
        //     return view("page/articles/static");
        // }

        $q = $this->_context
            ->where('title', 'LIKE', "%{$article}%")
            // ->whereRaw("title like  '%$article%'")
            // ->first()
            ;

        // dd($article);

        if ($article == 'reseau') {
            $q->orWhere('title', 'LIKE', "%Réseau%");
        }

        if ($article == 'cout') {
            $q->orWhere('title', 'LIKE', "%Coût%");
        }

        // if ($article == 'presentation') {
        //     $q->orWhere('title', 'LIKE', "%présentation%");
        // }

        // if ($article == 'notre-mission') {
        //     $q->orWhere('title', '=', "Notre Mission");
        // }




        $model = $q->first();

        if ($model != null && request()->getSchemeAndHttpHost() !== 'http://localhost:8000') {
            $model->description = str_replace('http://localhost:8000', request()->getSchemeAndHttpHost(), $model->description);
            $model->descriptionAr = str_replace('http://localhost:8000', request()->getSchemeAndHttpHost(), $model->descriptionAr);
        }

        // dd($model->description);
        // if ($model == null) {
        //     return view('notfound');
        // }

        // return view("page/articles/{$article}", compact('model'));
        return view("page/articles/article", compact('model'));
    }
}
