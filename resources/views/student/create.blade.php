<x-layouts.app title="Create Student">

    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <x-students.form :student="$student" />

        <button type="submit" class="btn">
            Save Student
        </button>

        <a href="{{ route('students.index') }}">
            Cancel
        </a>
    </form>

</x-layouts.app>