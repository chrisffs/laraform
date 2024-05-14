<x-layout>
    @section('title', 'Admin Dashboard | IphiTech Attendance System')

    <div class="flex flex-row sm:gap-6 min-h-screen">
        <x-sidebar/>
        <main class="flex w-full flex-col p-4">
            
            <div class="w-fit">
                <label for="sidebar-mobile-fixed" class="btn btn-primary sm:hidden">Open Sidebar</label>
            </div>
            <div class="mt-4 mb-8 flex gap-6">
                
                <div class="card bg-white border-0">
                    <div class="card-body gap-6">
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-[#9750DD]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>

                            <div>
                                <p class="text-sm font-medium">Interns</p>
                                <h1 class="text-5xl font-medium text-[#9750DD]">
                                    {{ $interns_count }}
                                </h1>
                            </div>
                        </div>
                        <div>
                            @foreach ($programs_count as $program_count)
                                <p class="text-gray-500 text-sm font-medium">{{ $program_count->program }}: <span class="font-semibold text-[#9750DD]">{{ $program_count->user_count  }}</span></p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card bg-white border-0">
                    <div class="card-body gap-6">
                        <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-[#9750DD]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>


                            <div>
                                <p class="text-sm font-medium">Timed in today</p>
                                <h1 class="text-5xl font-medium text-[#9750DD]">{{ $timein_count }}</h1>
                            </div>
                        </div>
                        <div>
                            @foreach ($programs_timein_count as $program_timein_count)
                                <p class="text-gray-500 text-sm font-medium">{{ $program_timein_count->program }}: <span class="font-semibold text-[#9750DD]">{{ $program_timein_count->user_count }}</span></p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card bg-white border-0">
                    <div class="card-body gap-6">
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 text-[#9750DD]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                            <div>
                                <p class="text-sm font-medium">Late Today</p>
                                <h1 class="text-5xl font-medium text-[#9750DD]">{{ $late_count }}</h1>
                            </div>
                        </div>
                        <div>
                            @foreach ($programs_late_count as $program_late_count)
                                <p class="text-gray-500 text-sm font-medium">{{ $program_late_count->program }}: <span class="font-semibold text-[#9750DD]">{{ $program_late_count->user_count }}</span></p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h4 class="font-bold text-secondary">Interns</h4>
                        <h1 class="text-4xl font-bold">Intern Logs</h1>
                    </div>
                </div>
                <x-table>
                    <thead class="sticky top-0">
                        <tr>
                            <th>Time</th>
                            <th>Name</th>
                            <th>Specification</th>
                            <th>School</th>
                            <th>Attendance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless (count($attendances) == 0)
                            @foreach ($attendances as $attendance)
                            <tr>
                                <td>
                                    {{ $attendance->created_at->format('Y/m/d') }}
                                    <span class="block text-xs text-gray-600">
                                        {{ $attendance->created_at->format('g:i A') }}
                                    </span>
                                </td>
                                <td>{{ $attendance->name }}</td>
                                <td>{{ $attendance->specification }}</td>
                                <td>{{ $attendance->school }}</td>
                                <td><span class="badge badge-flat-{{ $attendance->status == "Late" ? "warning" : ($attendance->status == "On time" ? "success" : "") }} font-medium"><?php echo 'Late'?></span></td>
                                <td>{{ $attendance->action }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" style="text-align: center">No records</td>
                            </tr>
                        @endunless
                       
                    </tbody>
                </x-table>
                <div class="px-2 pt-4 flex justify-start">
					<a href="/admin/intern_logs" class="link text-sm link-primary flex items-center gap-2" href="./interns.php?page=internLogs">
						View More 
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
						</svg>
					</a>
				</div>
            </div>
        </main>
    </div>

    
</x-layout>