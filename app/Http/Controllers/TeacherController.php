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
    public function show($id){
        $teacher = Teacher::find($id);
        if (is_null($teacher)){
            return ' Profesor buscado no existe';
        }
        return $teacher;
    }
    
    public function store(Request $request){
        
        $params = $request->all();
        $teacher = Teacher::create([
            'name'=>$params['name'],
            'surname'=>$params['surname'],
            'profile_id'=>$params['profile_id']
        ]);
        return $teacher;
    }

    public function update($id, Request $request)
    {
        $params = $request->all();
        $teacher = Teacher::find($id)->update([
            'name'=>$params['name'],
            'surname'=>$params['surname']
        ]);

        return $teacher ? ' Teacher fue actualizado.': 'Error al actualizar.';
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
