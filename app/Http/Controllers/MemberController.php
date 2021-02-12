<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('welcome', compact('members'));
    }

    public function create()
    {
        $members = Member::all();
        return view('pages.create', compact('members'));
    }

    public function store(Request $request)
    {
        $newEntry = new Member;
        $newEntry->nom = $request->nom;
        $newEntry->age = $request->age;
        $newEntry->genre = $request->genre;
        $newEntry->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Member::find($id);
        $destroy->delete();
        return redirect('/');
    }

    public function destroyAll()
    {
        $atomique = Member::all();
        foreach ($atomique as $item) {
            $item->delete();
        }
        return redirect('/');
    }

    public function edit($id)
    {
        $edit = Member::find($id);
        return view('pages.edit', compact('edit'));
    }

    public function show($id)
    {
        $show = Member::find($id);
        return view('pages.show', compact('show'));
    }

    public function update($id, Request $request)
    {
        $show = Member::find($id);
        $show->nom = $request->nom;
        $show->age = $request->age;
        $show->genre = $request->genre;
        $show->save();
        return redirect('/');
    }
}