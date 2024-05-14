<x-layout>
    @section('link', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css')
    @section('title', 'Interns | IphiTech Attendance System')
    <div class="flex flex-row sm:gap-6 min-h-screen">
        <x-sidebar/>
        <main class="flex w-full flex-col p-4">
            <div class="w-fit">
                <label for="sidebar-mobile-fixed" class="btn btn-primary sm:hidden">Open Sidebar</label>
            </div>
            <div class="flex w-full flex-col p-4">
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h4 class="font-bold text-secondary">Interns</h4>
                        <h1 class="text-4xl font-bold">Intern Logs</h1>
                    </div>
                </div>
                <div class="mb-4">
                    <form action="/admin/intern_list/">
                        <input class="input" name="search" placeholder="Search" />
                        <button class="hidden" type="submit"></button>
                    </form>
                </div>
               
                
                <div class="overflow-y-auto relative">
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
                            @foreach ($logs as $log)
                            <tr>
                                <td>
                                    {{ $log->created_at->format('Y/m/d') }}
                                    <span class="block text-xs text-gray-600">
                                        {{ $log->created_at->format('g:i A') }}
                                    </span>
                                </td>
                                <td>{{ $log->name }}</td>
                                <td>{{ $log->specification }}</td>
                                <td>{{ $log->school }}</td>
                                <td><span class="badge badge-flat-{{ $log->status == "Late" ? "warning" : ($log->status == "On time" ? "success" : "") }} font-medium"><?php echo 'Late'?></span></td>
                                <td>{{ $log->action }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </x-table>
                    
                </div>
                <div class="mt-4">
                    {{ $logs->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </main>
        <script>
            $(document).ready(function() {
                // Function to handle click event on delete buttons
                $('.delete-btn').click(function() {
                    var internId = $(this).data('id');
                    $('#deleteForm').attr('action', '/admin/intern_list/delete_intern/' + internId);
                    console.log('hello');
                });
            });
           
            function internView(id) {
                window.location.href = `/admin/intern_list/show_intern/${id}`;
            }
        </script>
</x-layout>