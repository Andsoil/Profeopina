<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use PdfReport;

class TeacherController extends Controller
{
    public function index()
    {
        $items = Teacher::with(['profile'])->get();
        return $items;
    }

    public function destroy($id){
        $item = Teacher::find($id)->delete();
        if ($item) {
            return 'Item eliminado.';
        } else {
            return 'No se pudo eliminar.';
        }
    }
}
