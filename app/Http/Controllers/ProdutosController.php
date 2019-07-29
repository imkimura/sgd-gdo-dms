<?php

namespace App\Http\Controllers;

use App\Repositories\ProdutosRepository;
use Illuminate\Http\Request;
use Response;

class ProdutosController extends Controller
{
    public function index()
    {
        return view('produtos.index');
    }
}