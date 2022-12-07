<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Alert;

class AnnouncementController extends Controller
{

    public function index()
    {
        $announcements = Announcement::paginate(8);

        return view('backend.announcement.index', compact('announcements'));
    }

    public function create()
    {
        return view('backend.announcement.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $announcements = Announcement::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        Alert::success("New Announcement Added!", "New announcement added successfully!");

        return redirect()->back();

    }

    public function show($id)
    {
        $announcement = Announcement::where('id', $id)->first();

        return view('backend.announcement.edit', compact('announcement'));

    }

    public function update($id, Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $announcement = Announcement::where('id', $id)->first();

        $announcement->title = $request->title;
        $announcement->description = $request->description;

        $announcement->save();

        Alert::success("Announcement updated!", "Announcement updated successfully!");

        return redirect()->back();

    }

}
