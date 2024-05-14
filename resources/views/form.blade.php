
<x-layout>
    @section('title', 'Form | IphiTech Attendance System')
    <x-form-layout>
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-semibold">Daily Time Logs</h1>
            <p class="text-sm">Please Fill up this Form.</p>
        </div>
        <form action="/attendance" method="post">
            @csrf
            <div class="form-group gap-y-6">
                <div class="form-field">
                    <label class="form-label" for="school">School</label>
                    <select id="school" name="school" class="select select-ghost-secondary max-w-full" required>
                        <option selected hidden disabled value="">Choose School</option>
                        @foreach ($schools as $school)
                            <option value="{{ $school->school }}">{{ $school->school }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-field">
                    <label class="form-label" for="name">Name</label>
                    <select id="name" name="name" class="select select-ghost-secondary max-w-full" required>
                        <option selected hidden disabled value="">Choose Name</option>
                    
                    </select>
                </div>
                <div class="form-field">
                    <label class="form-label" for="action">What Do You Like to Do?</label>
                    <select name="action" id="action" class="select select-ghost-secondary max-w-full" required>
                        <option selected hidden disabled value="">Choose</option>
                        <option value="Time in">Time in</option>
                        <option value="Time out">Time out</option>
                    </select>
                </div>
                <div class="mt-4">
                    <button type="submit" name="submitForm" class="btn btn-secondary w-full">Submit</button>
                </div>
            </div>
        </form>
        <div class="form-field">
            <div class="form-control justify-center">
                <a href="/admin" class="link link-underline-hover link-secondary text-sm">Admin Login click here.</a>
            </div>
        </div>
    </x-form-layout>
</x-layout>

