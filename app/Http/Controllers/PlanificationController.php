<?php

namespace App\Http\Controllers;

use App\planification;
use Illuminate\Http\Request;

class PlanificationController extends SuperController
{
    public function __construct(planification $model)
    {
        parent::__construct($model);
    }


    public function state()
    {
        $list = $this->_context->select('id', 'title')->groupBy('c.table_name')->get();
        return compact('list');
    }

    public function getAll(int $startIndex, int $pageSize, string $sortBy, string $sortDir) // : Collection
    {
        $list = $this->_context
            ->orderBy($sortBy, $sortDir)
            ->skip($startIndex)
            ->take($pageSize)
            ->with('region')
            ->get()
            ;

        $count = $this->_context->get()->count();

        return ['list' => $list, 'count' => $count];
    }

    public function page()
    {
        // $list = $this->_context->all();
        return view('page/planification');
    }


    public function getLast(string $city)
    {
        // $rents = Rent::whereHas('rentItems.book', function ($query) use ($input) {
        //     $query->where('books.title', 'LIKE', "%$input%");
        // })->get();

        $model = $this->_context
                ->whereHas('region', function($query) use ($city){
                    $query->where('name', 'LIKE', "%{$city}%");
                })
                // ->latest('upload_time')->first();
                ->orderBy('date', 'desc')
                ->with(['region'])
                ->first()
                ;

        return $model;
    }
}
