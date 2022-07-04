<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;


class SubjectListController extends Controller
{
    public function saveSubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubjectItem = new subject();
        $newSubjectItem->subject_title = $request->subject_title;
        $newSubjectItem->subject_desc = $request->subject_desc;
        $newSubjectItem->subject_price = $request->subject_price;
        $newSubjectItem->subject_totalhours = $request->subject_totalhours;
        $newSubjectItem->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function mainpage(){
        return view('mainpage', ['listSubjects' => subject::all()]);
    }
}
