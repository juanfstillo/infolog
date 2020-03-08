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
  public function newsforhome(){
    $newforhome = news::take(2)->get();
    $vac = compact("newforhome");
    return view ("/index", $vac);
  }
  public function allnewstablero(){
$newstablero = news::all();
$vac = compact("newstablero");
return view ("/tablero", $vac);
  }//


}
