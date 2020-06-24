<?php

namespace App\Http\Controllers;

use App\Actualite;
use Illuminate\Http\Request;
use App\galerie;
use Illuminate\Support\Facades\DB;

class HomeController extends SuperController
{
    protected  $actualite;

    public function __construct(galerie $model, Actualite $actualite)
    {
        parent::__construct($model);
        $this->actualite = $actualite;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $model = $this->_context
            ->where('title', 'LIKE', "%divers%")
            ->first()
            ;

        $images = explode(";", $model->imageUrl);
        array_pop($images);

        $groupes = [];
        $groupe = [];
        $i = 0;

        foreach ($images as $index => $value) {
            if (($index + 1) % 4 !== 0) {
                array_push($groupe, "{$model->id}/{$value}");
            } else {
                array_push($groupe, "{$model->id}/{$value}");
                $groupes[$i] = $groupe;
                $groupe = [];
                $i ++;
            }
        }

        // actualite
        $actualites = $this->actualite->orderBy('date', 'desc')->skip(0)->take(3)->get();

        // dd($groupes);
        return view('page/home', compact('groupes', 'actualites'));
    }
}
