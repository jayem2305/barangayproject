<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;


class AdminController extends Controller
{
    public function statisticalreport()
    {
        return view('Admin.statisticalreport');
        //return "Hello, this is the welcome page!";
    }
    public function forum()
    {
        return view('Admin.forum');
        //return "Hello, this is the welcome page!";
    }
    public function forumpost(Request $request)
    {
        $request->validate([
            'topic' => 'required|string|max:255',
            'description' => 'nullable|string',
            'name' => 'required|string',
        ]);

        $forum = new Forum();
        $forum->name = $request->name;
        $forum->topic = $request->topic;
        $forum->description = $request->description;
        $forum->save();

        return response()->json(['message' => 'Forum created successfully']);
    }
public function getForumData(Request $request)
{
    if ($request->has('id')) {
        // Fetch forum details based on ID
        $forum = Forum::find($request->id);
        return response()->json($forum);
    } else {
        // Fetch all forum data
        $forums = Forum::all();
        return response()->json(['forums' => $forums]);
    }
}
public function show(Request $request, $forumId)
{
    // Assuming you want to load related comments along with the forum
    $forum = Forum::with('comments')->findOrFail($forumId);

    // Assuming you want to check if the request is AJAX
    if ($request->ajax()) {
        return response()->json(['forum' => $forum]);
    }

    // If it's not an AJAX request, return the view with the forum data
    return view('Admin.forum', compact('forum'));
}
}
