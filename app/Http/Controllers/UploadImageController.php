<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadImageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('upload_image');
    }

    public function storeImage(Request $request)
    {
        $rules = [
            'upload_img' => ['required', 'file', 'image'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $basePath = 'images/uploaded_images';
        $fileExtension = $request['upload_img']->getClientOriginalExtension();
        $fileName = $request['upload_img']->getClientOriginalName();

        $saveName = 'upload_' . intval(time()) . '_' . $fileName;

        $request['upload_img']->move($basePath, $saveName);

        return redirect()->back()->with(['success' => 'Successfully uploaded the image', 'image' => $basePath . '/' . $saveName]);
    }
}
