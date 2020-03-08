<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;


class newsController extends Controller
{
  public function allnews(){
$new = news::all();
$vac = compact("new");
return view ("/noticias", $vac);
}//
}
