<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class TestController extends Controller
{
    public function view($id)
    {    	
    	$categoria = Categoria::find($id);
    	$categoria->user;
    	dd($categoria).toString();
    }}
