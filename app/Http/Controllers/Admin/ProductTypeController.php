<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::orderBy('id','desc')->paginate(12);
        return view('admin.product-type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-type.manage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store_type = new Type();
        $store_type->name = $request->name;
        $store_type->title = $request->title;
        $store_type->description = $request->description;
        $store_type->keyword = $request->keyword;
        $store_type->created_by = $request->user()->id;
        $store_type->updated_by = $request->user()->id;
        $store_type->save();

        return redirect()->route('admin.product-type.index')->with('success', 'เพิ่มข้อมูลสำเร็จ');

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
        $type = Type::find($id);

        return view('admin.product-type.manage', compact('type'));
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
        $store_type = Type::find($id);
        $store_type->name = $request->name;
        $store_type->title = $request->title;
        $store_type->description = $request->description;
        $store_type->keyword = $request->keyword;
        $store_type->updated_by = $request->user()->id;
        $store_type->save();

        return redirect()->route('admin.product-type.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Type::find($id)->delete();
        return back()->with('success','ลบข้อมูลสำเร็จ');
    }
}
