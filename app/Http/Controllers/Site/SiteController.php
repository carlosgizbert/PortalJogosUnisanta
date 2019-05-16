<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function index()
    {
        $teste = 123;
        $teste2 = 321;
        $teste3 = 323;
        return view('site.home.index', compact('teste', 'teste2', 'teste3'));
    }

    public function contato()
    {
        return view('site.contact.index');
    }

    public function categoria()
    {
        return view('categoria');
    }

}
