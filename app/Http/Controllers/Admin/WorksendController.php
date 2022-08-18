<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sendwork;
use App\Work;
use App\Gallery;

class WorksendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $send_works = Sendwork::with('get_work')->with('get_user')->orderBy('id','desc')->get();
       return view('admin.worksends.index', compact('send_works'));
    }

    public function edit_worksend($id, $work_send_id) {
        $work = work::find($id);
        $work_send = Sendwork::where('id',$work_send_id)->with('get_work')->orderBy('id', 'desc')->first();
        $galleries = Gallery::where('work_send_id',$work_send_id)->orderBy('id', 'desc')->get();

        return view('admin.worksends.galleries',compact('work','work_send','galleries', 'id', 'work_send_id'));
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
        Sendwork::find($id)->delete();
        return back()->with('success','ลบข้อมูลสำเร็จ');
    }
}
