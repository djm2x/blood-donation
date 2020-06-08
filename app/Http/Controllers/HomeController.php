<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galerie;
class HomeController extends SuperController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(galerie $model)
    {
        parent::__construct($model);
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

        // dd($groupes);
        return view('page/home', compact('groupes'));
    }
}
