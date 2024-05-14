<x-layout>
    @section('title', 'Interns | IphiTech Attendance System')
    <div class="flex flex-row sm:gap-6 min-h-screen">
        <x-sidebar/>
        <main class="flex w-full flex-col p-4">
            <div class="w-fit">
                <label for="sidebar-mobile-fixed" class="btn btn-primary sm:hidden">Open Sidebar</label>
            </div>
            <div class="flex w-full flex-col p-4">
                <div class="bg-white p-6 rounded-[16px] h-full overflow-y-auto shadow">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h4 class="font-bold text-secondary">Settings</h4>
                            <h1 class="text-4xl font-bold">Form Settings</h1>
                        </div>
                    </div>
                    <div class="border-y divide-y">
                        <div>
                            <label class="cursor-pointer group/col hover:bg-gray-50 w-full" for="school-modal">
                                <div class="flex justify-between items-center p-4 hover:bg-gray-50">
                                    <div class="flex flex-col gap-2">
                                        <h4 class="text-sm font-medium">Schools / Universities</h4>
                                        <h5 class="text-gray-500">Add new Schools or University option in the Intern Form.</h5>
                                    </div>
                                    <div class="mr-5 invisible group-hover/col:!visible">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div>
                            <label class="cursor-pointer group/col hover:bg-gray-50 w-full" for="programs-modal">
                                <div class="flex justify-between items-center p-4 hover:bg-gray-50">
                                    <div class="flex flex-col gap-2">
                                        <h4 class="text-sm font-medium">Internship Programs</h4>
                                        <h5 class="text-gray-500">Add new program option in the Intern From.</h5>
                                    </div>
                                    <div class="mr-5 invisible group-hover/col:!visible">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <input class="modal-state" id="school-modal" type="checkbox" @error('schoolName')checked @enderror/>
            <div class="modal">
                <label class="modal-overlay" for="school-modal"></label>
                <div class="modal-content flex flex-col gap-3 w-96">
                    <label for="school-modal" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                    <h2 class="text-xl">Add new School / University</h2>
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-2">
                            <form id="addSchool" action="/admin/settings/add_school" method="post">
                                @csrf
                                <div class="flex gap-2">
                                    <div class="w-4/5">
                                        <input id="schoolName" name="schoolName" class="input-md input min-w-full" placeholder="Type here to Add"/>
                                    </div>
                                    <div class="w-1/5">
                                        <button form="addSchool" name="addSchool" class="btn btn-success btn-block">Add</button>
                                    </div>
                                </div>
                                @error('schoolName')
                                <label class="form-label">
                                    <span class="form-label-alt">{{$message}}</span>
                                </label>
                                @enderror
                            </form>
                            
                        </div>
                        <h2 class="text-sm text-gray-500">List</h2>
                        <div class="h-[256px] border rounded-lg overflow-y-auto divide-y">
                            @foreach ($schools as $school)
                                <div class="p-2 text-sm relative group hover:bg-gray-100">
                                    {{ $school->schoolName }}   
                                    <form action="/admin/settings/delete_school/{{ $school->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submite" class="group-hover:!visible invisible hover:bg-gray-200 p-1 rounded-full absolute right-0 top-1/2 -translate-y-1/2 mr-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        
            <input class="modal-state" id="programs-modal" type="checkbox" @error('program')checked @enderror/>
            <div class="modal">
                <label class="modal-overlay" for="programs-modal"></label>
                <div class="modal-content flex flex-col gap-3 w-96">
                    <label for="programs-modal" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                    <h2 class="text-xl">Add new Internship Program</h2>
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-2">
                            <form id="addProgram" action="/admin/settings/add_program" method="post">
                                @csrf
                                <div class="flex gap-2">
                                    <div class="w-4/5">
                                        <input id="program" name="program" class="input-md input min-w-full" placeholder="Type here to Add"/>
                                    </div>
                                    <div class="w-1/5">
                                        <button form="addProgram" name="addProgram" class="btn btn-success btn-block">Add</button>
                                    </div>
                                </div>
                                @error('program')
                                <label class="form-label">
                                    <span class="form-label-alt">{{$message}}</span>
                                </label>
                                @enderror
                            </form>
                        </div>
                        <h2 class="text-sm text-gray-500">List</h2>
                        <div class="h-[256px] border rounded-lg overflow-y-auto divide-y">
                            @foreach ($programs as $program)
                            <div class="p-2 text-sm relative group hover:bg-gray-100">
                                {{ $program->program }}   
                                <form action="/admin/settings/delete_program/{{ $program->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="group-hover:!visible invisible hover:bg-red-300 p-1 rounded-full absolute right-0 top-1/2 -translate-y-1/2 mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-layout>