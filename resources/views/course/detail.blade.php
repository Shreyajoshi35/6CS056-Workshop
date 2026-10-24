<x-layouts.app title="Course Details">

    <h1>Course Details</h1>
    <p><strong>ID:</strong> {{ $course->id }}</p>
    <p><strong>Course Name:</strong> {{ $course->name }}</p>
    <p>
        <strong>Description:</strong>
        {{ $course->description ?? 'No description provided' }}
    </p>

    <p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
    <p><strong>Fee:</strong> {{ $course->fee }}</p>

    <p>
        <strong>Status:</strong>
        {{ $course->is_active ? 'Active' : 'Inactive' }}
    </p>

    <p>
        <a href="{{ route('courses.edit', $course) }}" class="btn">
            Edit Course
        </a>
        <a href="{{ route('courses.index') }}">
            Back to Courses
        </a>
    </p>

</x-layouts.app>
