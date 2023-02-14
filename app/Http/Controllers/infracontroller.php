<?php

namespace App\Http\Controllers;

use App\Http\Requests\infra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class infracontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('complaint.infra');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, infra  $reqVal)
    {
        $type = 2;
        $no = "IN" .date("Y"."m"."d"."H"."i"."s");
        $s_id = $request->session()->get('s_id');
        $subject = $request->input('subject');
        $grievance = $request->input('grievance');
        $file = $request->input('name');
        DB::insert('insert into complaint (s_id,c_no,c_type,c_subject,c_attach,c_complaint) values (?,?,?,?,?,?)', [$s_id,$no,$type, $subject, $file, $grievance]);

        return redirect('/student/complaint');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
