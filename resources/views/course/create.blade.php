<x-layouts.app title="Create Course">

    <h1>Create Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <x-courses.form :course="$course" />

        <button type="submit" class="btn">
            Save Course
        </button>

        <a href="{{ route('courses.index') }}">Cancel</a>
    </form>

</x-layouts.app>
