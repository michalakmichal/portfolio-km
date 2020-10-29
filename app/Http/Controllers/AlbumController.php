<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album; 

class AlbumController extends Controller
{
    public function show($id)
    {
       //$images = ImageData::where('album_id','=', $id)->get('id');
       return $album = Album::findOrFail($id);
       //$album = Album::with(['images'])->find($id);
       //$images = $album->images()->orderBy('queue', 'asc')->get();
      // return view('album', ['album'=>$album]);
    }
    public function index()
    {
        return $album = Album::all();
    }
}
