<?php

namespace App\Http\Controllers;

use App\Activite;
use App\Region;
use App\User;
use JWTAuth;

class ActiviteController extends SuperController
{
    protected $regions;
    protected $users;

    public function __construct(Activite $model, Region $regions, User $users)
    {
        parent::__construct($model);

        $this->regions = $regions;
        $this->users = $users;

        // $this->middleware('jwt.auth');
    }

    public function getAll(int $startIndex, int $pageSize, string $sortBy, string $sortDir) // : Collection
    {
        $user = JWTAuth::parseToken()->authenticate();

        $list = $this->_context
            ->orderBy($sortBy, $sortDir)
            ->skip($startIndex)
            ->take($pageSize)
            ->with('region')
            ->get()
            ;

        $count = $this->_context->get()->count();

        // Revoke all tokens...
        // $user->tokens()->delete();

        // // Revoke a specific token...
        // $user->tokens()->where('id', $id)->delete();

        return ['list' => $list, 'count' => $count];
    }

    public function list()
    {
        $regions = $this->regions->all();

        return view('page/activite', compact('regions'));
    }

    public function detail(int $id)
    {
        // $model = $this->_context->findById($id);
        $model = $this->_context
            ->where('id', $id)
            ->with(['region', 'user'])
            ->first();
            ;

        return view('page/detail-activite', compact('model'));
    }

    public function listApi(int $startIndex, int $pageSize, int $idRegion = 0, string $dateOrderDir)
    {
        $q  = $this->_context->orderBy('date', $dateOrderDir);

        if ($idRegion != 0) {
            $q->where('idRegion', $idRegion);
        }

        $count = $q->count();

        $list = $q->skip($startIndex)
            ->take($pageSize)
            ->get()
            ;


        return ['list' => $list, 'count' => $count];
    }
}

