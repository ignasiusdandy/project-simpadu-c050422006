<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subjects = DB::table('subjects')
            ->when($request->input('title'), function ($query, $title) {
                return $query->where('title', 'like', '%' . $title . '%');
            })
            ->select('id','title', 'lecturer_id', 'semester', 'academic_year', 'sks')
            ->orderBy('id', 'asc')
            ->paginate(5);
        return view('pages.subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('pages.subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreSubjectRequest $request)
    // {
    //     Subject::create([
    //         'id' => $request['id'],
    //         'title' => $request['title'],
    //         'lecturer_id' => $request['lecturer_id'],
    //         'semester' => $request['semester'],
    //         'sks' => $request['sks'],
    //         'code' => $request['code'],
    //         'description' => $request['description'],
    //     ]);

    //     return redirect(route('subject.index'))->with('success, New User Successfully');
    // }

    public function edit(Subject $subject)
    {
        return view('pages.subjects.edit')->with('subject', $subject);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $validate = $request->validated();
        $subject->update($validate);
        return redirect()->route('subject.index')->with('success', 'Edit Subject Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subject.index')->with('success', 'Delete Subject Successfully');
    }
}
