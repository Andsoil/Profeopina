<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $items = Profile::with('reviews')->get();
        return $items;
    }

    public function destroy($id){
        $item = Profile::find($id)->delete();
        if ($item) {
            return 'Item eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
