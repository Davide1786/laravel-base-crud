<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Comic;

class MainController extends BaseController
{

    public function comic() {
        $comic = Comic::all();
        return view('fumetti', compact('comic'));
    }
}