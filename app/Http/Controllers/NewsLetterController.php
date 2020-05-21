<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends SuperController
{
    public function __construct(NewsLetter $model)
    {
        parent::__construct($model);
    }
}
