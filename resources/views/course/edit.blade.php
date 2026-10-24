<x-layouts.app title="Edit Course">

    <h1>Edit Course</h1>

    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        <x-courses.form :course="$course" />

        <button type="submit" class="btn">
            Update Course
        </button>

        <a href="{{ route('courses.index') }}">Cancel</a>
    </form>

</x-layouts.app>