<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        if ($request->has('not_photo')) {
            $trees = Tree::orderBy('created_at', 'asc')->where('needs_image', '=', true)->where('image', '=', null)->paginate(10);
        } else {
            $trees = Tree::orderBy('created_at', 'desc')->paginate(10);
        }

        if ($request->has('search')) {
            $trees = Tree::where('folio', '=', $request->search)->paginate(10);
        }

        return view('admin.trees.index', [
            'trees' => $trees
        ]);
    }

    public function updatePhoto(Request $request)
    {
        $tree = Tree::findOrFail($request->tree_id);
        $image = $tree->image;

        if ($request->hasFile('image')) {
            if ($image) {
                Storage::delete($image);
            }
            $image = $request->file('image')->store('trees/' . date('Y') . '/' . date('m'));
        }

        $tree->image = $image;

        $tree->save();

        return redirect()->back();
    }
}
