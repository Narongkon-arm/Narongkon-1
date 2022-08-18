<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;
use App\Gallery;
use App\Sendwork;
use Illuminate\Support\Facades\Auth;
use App\Utils\UploadFile;

class EmployeeworksendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::orderBy('id','desc')->get();
        return view('admin.emp_worksends.index', compact('works'));
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

    public function lists($id) {
        $works = Sendwork::where('work_id',$id)->orderBy('created_at','desc')->get();
        return view('admin.emp_worksends.list',compact('works', 'id'));
    }

    public function edit_worksend($id, $work_send_id) {
        $work = work::find($id);
        $work_send = Sendwork::where('id',$work_send_id)->with('get_work')->orderBy('id', 'desc')->first();
        $galleries = Gallery::where('work_send_id',$work_send_id)->orderBy('id', 'desc')->get();

        return view('admin.emp_worksends.galleries',compact('work','work_send','galleries', 'id', 'work_send_id'));
    }

    public function update_worksend(Request $request, $id, $work_send_id) {
        $work_send = Sendwork::find($work_send_id);
        $work_send->created_by = Auth::user()->id;
        $work_send->detail = $request->detail;
        $work_send->work_id = $id;
        $work_send->save();

        if (!empty($request->feature_image)) {

            foreach ($request->feature_image as $file) {

                $result = UploadFile::upload($file, 'images/work_galleries');
                $gallery = new Gallery();

                $gallery->name = $result['filename'];
                $gallery->work_send_id = $work_send->id;
                $gallery->save();

            }
        }

        return back();
    }

    public function create_worksend($id) {

        $work = work::find($id);

        return view('admin.emp_worksends.galleries' , compact('work', 'id'));
    }

    public function store_galleries(Request $request, $id) {

        $work_send = new Sendwork();
        $work_send->detail = $request->detail;
        $work_send->work_id = $id;
        $work_send->created_by = Auth::user()->id;
        $work_send->save();

        if (!empty($request->feature_image)) {

            foreach ($request->feature_image as $file) {

                $result = UploadFile::upload($file, 'images/work_galleries');
                $gallery = new Gallery();

                $gallery->name = $result['filename'];
                $gallery->work_send_id = $work_send->id;
                $gallery->save();

            }
        }


        return redirect()->route('admin.employee_worksends.lists',['id' => $id]);
    }

    public function delete_galleries($id) {
        Gallery::find($id)->delete();
        return back()->with('success','ลบข้อมูลสำเร็จ');
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

    }
}
