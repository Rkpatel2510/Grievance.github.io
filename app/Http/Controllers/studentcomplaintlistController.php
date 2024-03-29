<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcomplaintlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = DB::table('complaint')
            ->join('type', 'complaint.c_type', '=', 'type.t_id')
            ->select('type.t_name AS type', 'complaint.*')
            ->orderBy('c_created_dt', 'DESC')
            ->get();

        return view('viewpage.studentcomplaintlist', ['records' => $records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $records = DB::table('complaint')
            ->join('type', 'complaint.c_type', '=', 'type.t_id')
            ->select('type.t_name AS type', 'complaint.*')
            ->where("c_id", $id)
            ->orderBy('c_created_dt', 'DESC')
            ->first();

        return view('viewpage.studentviewpage', ['records' => $records]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('complaint.editpage');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $subject = $request->input('subject');
        $gsubject = $request->input('gsubject');
        $vertical = $request->input('vertical');
        $sem = $request->input('semester');
        $file = $request->input('filename');
        $placement = $request->input('gender');
        $skp = $request->input('skp');
        $grievance = $request->input('grievance');

        DB::table('complaint')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'subject' => $subject,
                'gsubject' => $gsubject,
                'vertical' => $vertical,
                'semester' => $sem,
                'filename' => $file,
                'gender' => $placement,
                'skp' => $skp,
                'gievance' => $grievance
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('complaint')
            ->where("c_id", $id)
            ->delete();

        return redirect('/student/complaint');
    }
}
