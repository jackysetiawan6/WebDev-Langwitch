<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Discussion;

class DiscussionController extends Controller
{
    function showtext()
    {
        $data = Discussion::all();
        return view('diskusi', ['Discussion' => $data]);
    }

    public function DiscussionShow()
    {
        return view('diskusi');
    }

    public function store(Request $request)
{
    $request->validate([
        'text' => 'required'
        // 'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
    ]);
    // $text = $request->input('text');
    $data = new Discussion;
    $data->text = $request->text;

    $data->save();

    return redirect()->back()->with('success', 'Discussion saved successfully!');
}


// public function store(Request $request)
// {
//     $request->validate([
//         'text' => 'required',
//         'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
//     ]);

//     $discussion = new Discussion;
//     $discussion->text = $request->text;

//     if($request->hasFile('image')) {
//         $image = $request->file('image');
//         $filename = time() . '.' . $image->getClientOriginalExtension();
//         $filePath = $image->storeAs('uploads', $filename, 'public');
//         $discussion->image_path = '/storage/' . $filePath;
//     }

//     $discussion->save();

//     return redirect()->route('diskusi')->with('success', 'Pesan berhasil dikirimkan');
// }
}

