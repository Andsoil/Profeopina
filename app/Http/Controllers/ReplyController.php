<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    //
    public function index()
    {
        $items = Reply::all();
        return $items;
    }

    public function destroy($id){
        $item = Reply::find($id)->delete();
        if ($item) {
            return 'Item eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
