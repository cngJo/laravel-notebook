<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $notes = Note::where("deleted", "0")->get();

        return view("home", compact("notes"));
    }

    public function show(string $id)
    {
        $note = Note::find($id);

        return view("note.show", compact("note"));
    }

    public function create()
    {
        return view("note.create");
    }

    public function insert(Request $request)
    {
        $note = new Note();
        $note->title = $request->input("title");
        $note->content = $request->input("content");
        $note->save();

        return redirect("/");
    }

    public function edit(string $id)
    {
        $note = Note::find($id);

        return view("note.edit", compact("note"));
    }

    public function update(Request $request, string $id)
    {
        $note = Note::find($id);
        $note->title = $request->input("title");
        $note->content = $request->input("content");
        $note->save();

        return redirect("/note/{$note->id}");
    }

    public function delete(string $id)
    {
        Note::find($id)->increment("deleted");

        return redirect("/");
    }
}
