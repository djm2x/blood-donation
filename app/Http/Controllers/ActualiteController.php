<?php

namespace App\Http\Controllers;

use App\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActualiteController extends SuperController
{
    public function __construct(Actualite $model)
    {
        parent::__construct($model);
    }

    public function getAll(int $startIndex, int $pageSize, string $sortBy, string $sortDir) // : Collection
    {
        $list = $this->_context
            ->orderBy($sortBy, $sortDir)
            ->skip($startIndex)
            ->take($pageSize)
            ->get()
            ;

        $count = $this->_context->get()->count();

        return ['list' => $list, 'count' => $count];
    }

    public function news(int $count) // : Collection
    {
        $list = $this->_context
            // ->where('type', 'LIKE', "%news%")
            ->orderBy('date', 'desc')
            ->take($count)
            ->get()
            ;

        return ['list' => $list, 'count' => $count];
    }

    // public function agendaTopThree() // : Collection
    // {
    //     $list = $this->_context
    //         ->where('type', 'LIKE', "%agenda%")
    //         ->orderBy('date', 'desc')
    //         ->take(3)
    //         ->get()
    //         ;

    //     return ['list' => $list];
    // }

    public function pageApi(int $startIndex, int $pageSize/*, int $year*/) // : Collection
    {
        // get blog of one type
        $q = $this->_context;//->where('type', 'LIKE', "%{$type}%");



        // filter blogs by years
        // if ($year != 0) {
        //     $q->whereYear('date', '=' ,$year);
        // }

        $count = $q->count();

        $list = $q->orderBy('date', 'desc')->skip($startIndex)->take($pageSize)->get();

        // dd($list);

        return ['list' => $list, 'count' => $count];
    }

    public function page() // : Collection
    {
        $q = $this->_context
            // ->where('type', 'LIKE', "%{$type}%")
            ;

        $rawSql = env('DB_CONNECTION') == 'sqlite' ? "strftime('%Y', date) as year" : 'YEAR(date) as year';

        $count = $q->count();

        $list = $q->orderBy('date', 'desc')->skip(0)->take(6)->get();

        $years = $q->select(DB::raw($rawSql))->get();

        return view("page/actualite", compact('list', 'years', 'count'));
    }

    public function detail(int $id)
    {
        $model = $this->_context->find($id);

        if ($model == null) {
            return view("notfound");
        }

        return view("page/detail-actualite", compact('model'));
    }
}
