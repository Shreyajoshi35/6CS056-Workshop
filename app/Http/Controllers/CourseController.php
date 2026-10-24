<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    // Display all courses
    public function index()
    {
        $courses = Course::all();

        return view('course.list', [
            'courses' => $courses,
        ]);
    }

    // Show the create course form
    public function create()
    {
        return view('course.create', [
            'course' => new Course(['is_active' => true]),
        ]);
    }

    // Store a new course
    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $course = Course::create($validated);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course created successfully.');
    }

    // Display one course
    public function show(Course $course)
    {
        return view('course.detail', [
            'course' => $course,
        ]);
    }

    // Show the edit course form
    public function edit(Course $course)
    {
        return view('course.edit', [
            'course' => $course,
        ]);
    }

    // Update a course
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate($this->rules($course));

        $course->update($validated);

        return redirect()
            ->route('courses.show', $course)
            ->with('success', 'Course updated successfully.');
    }

    // Delete a course
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully.');
    }

    // Validation rules
    private function rules(?Course $course = null): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('courses', 'name')->ignore($course?->id),
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'duration' => [
                'required',
                'integer',
                'min:1',
            ],
            'fee' => [
                'required',
                'numeric',
                'min:0',
            ],
            'is_active' => [
                'required',
                'boolean',
            ],
        ];
    }
}
