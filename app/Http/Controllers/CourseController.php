<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseCreateRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseCreateRequest $request)
    {
        try {
            DB::beginTransaction();

            $course = new Course();
            $course->title = $request->get('title');
            $course->description = $request->get('description');
            $course->status = $request->get('status') ? 1 : 0;
            $course->user_id =  auth()->user()->id;

            $course->save();

            DB::commit();

            return response()->json(['message' => 'Curso creado correctamente'], 200);

        } catch (\Exception $e) {

            Log::error($e);
            DB::rollBack();
            return response()->json(["message" => "Error", "errors" => ["error" => ["Ha ocurrido un error, intentelo más tarde"]]], 422);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::findOrFail($id);
        return view('course.detail', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
