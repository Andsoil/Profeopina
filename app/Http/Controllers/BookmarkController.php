<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    //
    public function index()
    {
        $items = Bookmark::all();
        return $items;
    }

    public function destroy($id){
        $item = Bookmark::find($id)->delete();
        if ($item) {
            return 'Item eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
