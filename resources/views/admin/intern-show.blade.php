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
                <div class="mt-6 flex gap-x-6 h-[calc(100vh-104px)]">
                    <div class="w-1/3 bg-white p-6 rounded-[16px] flex flex-col gap-4 overflow-y-auto shadow">
                        <div class="mb-2">  
                            <h1 class="text-2xl font-bold">Intern Profile</h1>
                        </div>
                        <div>
                            <h4 class="text-sm text-gray-400 mb-2">Name</h4>
                            <h1 class="font-medium">{{ $intern->firstName . " " . $intern->midName . " " . $intern->lastName }}</h1>
                        </div>
                        <div>
                            <h4 class="text-sm text-gray-400 mb-2">Internship</h4>
                            <h1 class="font-medium"> {{ $intern->internCategory }}</h1>
                        </div>
                        <div>
                            <h4 class="text-sm text-gray-400 mb-2">School</h4>
                            <h1 class="font-medium">{{ $intern->school }}</h1>
                        </div>
                        <div>
                            <h4 class="text-sm text-gray-400 mb-2">Onboarding Date</h4>
                            <h1 class="font-medium">
                                {{ $intern->onboardingDate }}
                            </h1>
                        </div>
                    </div>
                    <div class="w-2/3 bg-white p-6 rounded-[16px] overflow-y-auto shadow">
                        <div class="mb-6">  
                            <h1 class="text-2xl font-bold">Attendance Logs</h1>
                        </div>
                        <x-table>
                            <thead class="sticky top-0">
                                <tr>
                                    <th>Time</th>
                                    <th>Attendance</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @unless (count($logs) == 0)
                                    @foreach ($logs as $log)
                                        <tr>
                                            <td>
                                                {{ $log->created_at->format('Y/m/d') }}
                                                <span class="block text-xs text-gray-600">
                                                    {{ $log->created_at->format('g:i A') }}
                                                </span>
                                            </td>
                                            <td><span class="badge badge-flat-{{ $log->status == "Late" ? "warning" : ($log->status == "On time" ? "success" : "") }} font-medium"><?php echo 'Late'?></span></td>
                                            <td>{{ $log->action }}</td>
                                        </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" style="text-align: center">No records</td>
                                    </tr>
                                @endunless
                              
                            </tbody>
                        </x-table>
                    </div>
                </div>
            </div>

        </main>
    </div>
</x-layout>