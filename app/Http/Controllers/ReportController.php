<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function index()
    {
        $items = Report::all();
        return $items;
    }

    public function destroy($id){
        $item = Report::find($id)->delete();
        if ($item) {
            return 'Item eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
