<x-layouts.app title="Courses">
    <h1>Courses</h1>

    <p>
        <a href="{{ route('courses.create') }}" class="btn">
            Create Course
        </a>
    </p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Fee</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->duration }} weeks</td>
                    <td>{{ $course->fee }}</td>
                    <td>{{ $course->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('courses.show', $course) }}">View</a>
                            <a href="{{ route('courses.edit', $course) }}">Edit</a>
                            <x-delete-form :action="route('courses.destroy', $course)" />
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No courses found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-layouts.app>
