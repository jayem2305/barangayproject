<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Comment;

class ForumCommentController extends Controller
{

    public function store(Request $request, $forumId)
    {
        // Validate the request data
        $request->validate([
            'content' => 'required|string',
        ]);

        // Create a new comment
        $comment = new Comment();
        $comment->forum_id = $forumId;
        $comment->content = $request->input('content');
        // Add any other necessary fields

        // Save the comment
        $comment->save();

        // Optionally, return a success response
        return response()->json(['message' => 'Comment posted successfully'], 200);
    }

}
