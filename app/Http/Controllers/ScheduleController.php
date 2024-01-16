<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateScheduleRequest;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $schedules = DB::table('schedules')
            ->when($request->input('id'), function ($query, $id) {
                return $query->where('id', 'like', '%' . $id . '%');
            })
            ->select('id','student_id', 'subject_id', 'schedule_date', 'schedule_type')
            ->orderBy('id', 'asc')
            ->paginate(15);
        return view('pages.schedules.index', compact('schedules'));
    }

    

    public function edit(Schedule $schedule)
    {
        return view('pages.schedules.edit')->with('schedule', $schedule);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $validate = $request->validated();
        $schedule->update($validate);
        return redirect()->route('schedule.index')->with('success', 'Edit schedule Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    
     public function destroy(Schedule $schedule)
     {
         $schedule->delete();
         return redirect()->route('schedule.index')->with('success', 'Delete Schedule Successfully');
     }
}
