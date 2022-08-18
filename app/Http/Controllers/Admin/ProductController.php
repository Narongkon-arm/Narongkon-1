<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Status;
use App\Product;
use Image;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.manage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('imageName')) {
            $image = $request->file('imageName');
            $filename = time().'.'.$image->extension();

            $destinationPath = public_path('/thumbnail');
            $img = Image::make($image->path());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$filename);
        }

        Product::create([
            'orderCode' => $request->orderCode,
            'name' => $request->productName,
            'imgName' => !empty($filename) ? $filename : 'default.png',
            'statusId' => $request->statusId,
            'address' => $request->address,
            'cusName' => $request->cusName,
            'fbName' => $request->fbName,
            'fbLink' => $request->fbLink,
            'createAt' => now(),
            'updateAt' => now()
        ]);

        return redirect()->route('admin.product.index');
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
        $status = Status::all();
        $text = "แก้ไข";
        $product = product::find($id);
        return view('product.manage',compact('product','status','text'));

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

        $product = Product::find($id);

        if($request->hasFile('imageName')) {

            if($product->imgName != 'default.png') {
                File::delete(public_path('/thumbnail/' . $product->imgName));
            }
            $image = $request->file('imageName');
            $filename = time().'.'.$image->extension();

            $destinationPath = public_path('/thumbnail');
            $img = Image::make($image->path());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$filename);
            $product->imgName = $filename;
        }

        $product->orderCode = $request->orderCode;
        $product->name = $request->productName;

        $product->statusId = $request->statusId;
        $product->address = $request->address;
        $product->cusName = $request->cusName;
        $product->fbName = $request->fbName;
        $product->fbLink = $request->fbLink;
        $product->updateAt = now();
        $product->save();

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
        $des = Product::find($id);
        if($des->imgName != 'default.png') {
            File::delete(public_path('/thumbnail/' . $des->imgName));
        }
        $des->delete();

        return back();
    }

    public function fixstatusProduct(Request $request) {
        $codeKeyword = $request->input('code',null);
        $pmstatus = $request->input('status',null);
        $status = Status::all();
        $product = Product::with('Status');

        if($codeKeyword !== null) {
            $product = $product->where('fbName','like','%' . $codeKeyword . '%');
        }
        if($pmstatus !== null && $pmstatus != 0) {
            $product = $product->where('statusId', $pmstatus);
        }
        $product = $product->orderBy('id', 'desc')->get();
        return view('product.fix-status', compact('product','status'));
    }

    public function changestatusGroup(Request $request) {

        if(isset($request->change)) {
            foreach ($request->product_id as $product_id) {
                $product = Product::find($product_id);
                $product->statusId = $request->statustoChange;
                $product->save();
            }
        }

        if(isset($request->delete)) {
            foreach ($request->product_id as $product_id) {
                $product = Product::find($product_id);
                $product->delete();
            }
        }

        return back();
    }
}
