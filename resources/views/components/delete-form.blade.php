@props(['action'])

<form
    action="{{ $action }}"
    method="POST"
    style="display: inline;"
    onsubmit="return confirm('Are you sure you want to delete this record?');"
>
    @csrf
    @method('DELETE')

    <button type="submit" class="btn" style="background: #dc2626;">
        Delete
    </button>
</form>
