<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;
use App\Gallery;
use App\Utils\UploadFile;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->role_id == 5) {
            return redirect()->route('admin.employee_worksends.index');
        }

        $works = Work::orderBy('id','desc')->get();
        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.works.manage');
    }

    public function sendworks($id) {

        $work = work::find($id);
        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('admin.works.galleries' , compact('work','galleries'));
    }

    public function galleries($id) {

        $work = work::find($id);
        $galleries = Gallery::where('work_id', $id)->orderBy('id','desc')->get();

        return view('admin.works.galleries' , compact('work','galleries'));
    }

    public function store_galleries(Request $request, $id) {

        if (!empty($request->feature_image)) {

            foreach ($request->feature_image as $file) {

                $result = UploadFile::upload($file, 'images/work_galleries');
                $gallery = new Gallery();

                $gallery->name = $result['filename'];
                $gallery->work_id = $id;
                $gallery->save();

            }
        }

        return back();
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
        $work = new Work();
        $work->name = $request->name;
        $work->detail = $request->detail;
        $work->address = $request->address;
        $work->starter_date = $request->starter_date;
        $work->ender_date = $request->ender_date;

        if (!empty($request->feature_image)) {
            $file = $request->feature_image;
            $result = UploadFile::upload($file, 'images');
            $work->feature_image = $result['filename'];
        }

        $work->status = $request->status;
        $work->created_by = $request->user()->id;
        $work->save();

        return redirect()->route('admin.gallery.lists', ['id' => $work->id]);
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

        $work = Work::find($id);
        return view('admin.works.manage',compact('work'));
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
        $work = Work::find($id);
        $work->name = $request->name;
        $work->detail = $request->detail;
        $work->address = $request->address;
        $work->starter_date = $request->starter_date;
        $work->ender_date = $request->ender_date;

        if (!empty($request->feature_image)) {
            $file = $request->feature_image;
            $result = UploadFile::upload($file, 'images');
            $work->feature_image = $result['filename'];
        }

        $work->status = $request->status;
        $work->created_by = $request->user()->id;
        $work->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Work::find($id)->delete();
        return back()->with('success','ลบข้อมูลสำเร็จ');
    }
}
