<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodRequest;
use App\Models\Good;
use Illuminate\Support\Facades\Storage;

class GoodController extends Controller
{
  public function index()
 {
    $goods = Good::all();
    return view('good/index', compact('goods'));
  }

  public function create()
{
    // 空の$goodを渡す
    $good = new Good();
    return view('good/create', compact('good'));
}

  public function edit($id)
  {
    $good = Good::findOrFail($id);
    return view('good/edit', compact('good'));
  }

  public function store(GoodRequest $request)
  {
    $good = new Good;
    $good->title = $request->title;
    $good->description = $request->description;
    $good->price = $request->price;
    $uploadImg = $request->file('image');
    $path = Storage::disk(config('filesystems.default'))->putFile('/', $uploadImg, 'public');
    $good->image = Storage::disk(config('filesystems.default'))->url($path);
    $good->save();

    return redirect("/api/good");

  }


  public function show($id)
  {
    $good = Good::find($id);
    return $good;
  }

  public function update(GoodRequest $request, $id)
  {
    $good = Good::find($id);
    $good->title = $request->title;
    $good->description = $request->description;
    $good->price = $request->price;
    $uploadImg = $request->file('image');
    $path = Storage::disk(config('filesystems.default'))->putFile('/', $uploadImg, 'public');
    $good->image = Storage::disk(config('filesystems.default'))->url($path);
    $good->save();
    return redirect("api/good");
  }

  public function destroy($id)
  {
    $good = Good::find($id);
    $good->delete();
    return redirect('/api/good');
  }

}
