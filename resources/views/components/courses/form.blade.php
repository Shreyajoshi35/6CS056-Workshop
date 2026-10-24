@php
    $course = $course ?? new \App\Models\Course(['is_active' => true]);
@endphp

<x-form-input
    name="name"
    label="Course Name"
    :value="old('name', $course->name)"
/>

<x-form-textarea
    name="description"
    label="Description"
    :value="old('description', $course->description)"
/>

<x-form-input
    name="duration"
    label="Duration (weeks)"
    type="number"
    :value="old('duration', $course->duration)"
/>

<x-form-input
    name="fee"
    label="Course Fee"
    type="number"
    :value="old('fee', $course->fee)"
/>

<div class="form-group">
    <label for="is_active">Status</label>

    <select name="is_active" id="is_active" required>
        <option value="1" @selected(old('is_active', $course->is_active) == 1)>
            Active
        </option>
        <option value="0" @selected(old('is_active', $course->is_active) == 0)>
            Inactive
        </option>
    </select>

    @error('is_active')
        <p class="error">{{ $message }}</p>
    @enderror
</div>
