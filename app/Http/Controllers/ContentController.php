<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{

    public function showTasks () {
        $contents = Content::where('user_id',Auth::id())->get();

        return view('dashboard.listContent',['contents'=>$contents]);
    }

    public function createContent(Request $request)
    {
        $contentJson = $request->input('content');
        $title = $request->input('title');

        // Get the authenticated user's ID
        $idUser = Auth::id(); // or Auth::user()->id;

        $content = new Content;
        $content->title = $title;
        $content->content = $contentJson;
        $content->user_id = $idUser;

        $content->save();

        return redirect('/dashboard/create');
    }
}
