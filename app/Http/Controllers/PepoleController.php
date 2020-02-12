<?php

namespace App\Http\Controllers;

use App\Pepole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PepoleController extends Controller
{
    public function addPerson(Request $request){

        $pepole=new Pepole();
        $pepole->name=$request->name;
        $pepole->birth_date=$request->birth_date;
        $pepole->parent_id=$request->parent_id;
        $pepole->save();
        return 'added successfully';

    }
    public function getPerson($id){

        $pepole=Pepole::find($id);

            foreach ($pepole->childern as $p) {
                $p->name;
            };
            return $p->name . $pepole->name;


    }
    public function date(Request $request)
    {
        $date=Pepole::whereBetween('birth_date', [$request->date1,$request->date2])->get();
        foreach ($date as $d){

        echo $d->name;
        }


    }
}
