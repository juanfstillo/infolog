<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use Illuminate\Support\Str;


class newsController extends Controller
{

  public function index(Request $req, $slug) {
        $new = news::where('slug', $slug)->first();
        return view('noticiaunica', [
            'new' => $new
        ]);
    }

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
  // public function index(Request $req, $slug) {
  //      $new = news::where('slug', $slug)->first();
  //      return view('new', [
  //          'new' => $new
  //      ]);
  //  }

   public function AddNew(Request $req)  {
  if(!empty($req["file"])){
    $path = $req->file("file")->store("public");
    $imageNew = basename($path);
    $imageNew = "storage/" . $imageNew;
  } else {
    $imageNew = null;
  }
  $newNew = new news;
  $newNew->imageUrl=$imageNew;
  $newNew->title= $req["title"];
  $newNew->abstract= $req["abstract"];
  $newNew->text= $req["description"];
  $newNew->slug= Str::slug($newNew->title);
  $newNew->save();
return redirect ("/tablero");
}

public function showEditNew($id_new){
    $new = news::find($id_new);
    $vac = compact("new");
    return view ("/edit_new", $vac);
  }

  public function editNew($id_new, Request $req)  {
    $new = news::find($id_new);
    if(!empty($req["file"])){
      $path = $req->file("file")->store("public");
      $imageNew = basename($path);
      $imageNew = "storage/" . $imageNew;
      $new->imageUrl= $imageNew;
    }
    $new->title= $req["title"];
    $new->abstract= $req["abstract"];
    $new->text= $req["text"];
    $new->slug= Str::slug($req["title"]);
    $new->save();
  return redirect ("/tablero");
  }


   public function deleteNew($id_new)  {
  $new = news::where("id", "=", $id_new)->delete();
  return redirect("tablero");
  }


}
