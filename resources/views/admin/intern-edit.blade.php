<x-layout>
    @section('title', 'Interns | IphiTech Attendance System')
    <div class="flex flex-row sm:gap-6 min-h-screen">
        <x-sidebar/>
        <main class="flex w-full flex-col p-4">
            <div class="w-fit">
                <label for="sidebar-mobile-fixed" class="btn btn-primary sm:hidden">Open Sidebar</label>
            </div>
            <div>
                <button onclick="window.location.href='../'" class="btn flex gap-3 bg-white shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-[-12px]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                    Back
                </button>
            </div>
            <div class="shadow-lg my-6 rounded-[16px] w-max bg-white">
                <div class="py-4 px-6 rounded-t-[16px] border-b">
                    <h1 class="text-xl font-semibold">Editing: <span class="">{{ $intern->firstName . " " . $intern->midName . " " . $intern->lastName }} </span></h1>
                </div>
                <div class="p-6">
                    <form id="editIntern" action="../{{ $intern->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-3 gap-x-4 gap-y-6 py-2">
                            <div class="flex flex-col">
                                <label for="firstName" class="text-sm text-gray-500 mb-2">First Name</label>
                                <input id="firstName" name="firstName" class="input-md input @error('firstName') input-error @enderror" placeholder="Type here" value="{{ $intern->firstName }}"/>
                                @error('firstName')
                                <label class="form- label">
                                    <span class="form-label-alt">{{$message}}</span>
                                </label>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label for="lastName" class="text-sm text-gray-500 mb-2">Last Name</label>
                                <input id="lastName" name="lastName" class="input-md input @error('firstName') input-error @enderror" placeholder="Type here" value="{{ $intern->lastName }}"/>
                                @error('lastName')
                                <label class="form- label">
                                    <span class="form-label-alt">{{$message}}</span>
                                </label>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label for="midName" class="text-sm text-gray-500 mb-2">Middle Name</label>
                                <input id="midName" name="midName" class="input-md input" placeholder="Type here" value="{{ $intern->midName }}"/>
                                @error('midName')
                                <label class="form- label">
                                    <span class="form-label-alt">{{$message}}</span>
                                </label>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label for="school" class="text-sm text-gray-500 mb-2">School</label>
                                <select id="school" name="school" class="select input-error">
                                    <option selected hidden disabled value="">Choose School</option>
                                    @foreach ($schools as $school)
                                        <option value="{{ $school->schoolName }}" @if( $intern->school == $school->schoolName) selected @endif>{{ $school->schoolName }}</option>
                                    @endforeach
                                </select>
                                @error('school')
                                <label class="form- label">
                                    <span class="form-label-alt">{{$message}}</span>
                                </label>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label for="internCategory" class="text-sm text-gray-500 mb-2">Internship</label>
                                <select id="internCategory" name="internCategory" class="select">
                                    <option selected hidden disabled value="">Choose Program</option>
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->program }}" @if($intern->internCategory == $program->program) selected @endif>{{ $program->program }}</option>
                                    @endforeach
                                </select>
                                @error('internCategory')
                                <label class="form- label">
                                    <span class="form-label-alt">{{$message}}</span>
                                </label>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label for="onboardingDate" class="text-sm text-gray-500 mb-2">Onboarding Date</label>
                                <input type="date" id="onboardingDate" name="onboardingDate" class="input-md input" value="{{ $intern->onboardingDate }}"/>
                                @error('onboardingDate')
                                <label class="form- label">
                                    <span class="form-label-alt">{{$message}}</span>
                                </label>
                                @enderror
                            </div>

                        </div>
                    </form>
                </div>
                <div class="p-4 border-t flex justify-end">
                    <button form="editIntern" name="update" type="submit" class="btn btn-solid-secondary">Update Intern</button>
                </div>
            </div>
        </main>
       
    </div>
  
</x-layout>