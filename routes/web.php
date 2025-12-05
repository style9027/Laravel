<?php

use Illuminate\Support\Facades\Route;
use App\models\Post;
use Illuminate\Database\Eloquent\Model;
use App\Models\JouwModelName; 



Route::get('/', function () {
    return view('welcome');
});



Route::get('/joeppoepert', function(){
    return view('joep', ["name" => "Techno"]);
});

Route::get('/testcreate', function(){
    $newone= new Post();
    $newone->title = "Mijn titel";
    $newone->body = "Dit is de body";
    $newone->save();
    return "Done";
});

Route::get('/testshow', function(){
    echo"<pre>";
    var_dump(Post::all());
    echo"</pre>";
});

Route::get('/product/{id}/{beschrijving}', function($id, $beschrijving){
    return "Productbeschrijving is $beschrijving met het id: $id";
});


Route::get('/newposttest', function(){

    $x = new Post();
    $x->title = "Mijn titel";
    $x->body = "Dit is de inhoud";
    $x->save();
    return "done";
});

Route::get('/testshowall', function(){
    var_dump(Post::all());
});


?>
