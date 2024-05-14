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
                        <h1 class="text-4xl font-bold">Intern List</h1>
                    </div>
                    <button type="button" class="btn btn-solid-success" onclick="window.location.href ='/admin/intern_list/add_intern'">Add new Intern +</button>
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
                                <th>Onboarding Date</th>
                                <th>Name</th>
                                <th>Specification</th>
                                <th>School</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($interns as $intern)
                            <tr>
                                <td class="cursor-pointer" onclick="internView({{ $intern->id }})">
                                    {{ $intern->onboardingDate }}
                                </td>
                                <td class="cursor-pointer" onclick="internView({{ $intern->id }})">
                                    {{ $intern->firstName . " " . $intern->midName . " " . $intern->lastName }}
                                </td>
                                <td class="cursor-pointer" onclick="internView({{ $intern->id }})">
                                    {{ $intern->internCategory }}
                                </td>
                                <td class="cursor-pointer" onclick="internView({{ $intern->id }})">
                                    {{ $intern->school }}
                                </td>
                                <td>
                                    <a class="text-sm link link-primary link-underline-hover" href="/admin/intern_list/edit_intern/{{ $intern->id }}">Edit</a>
                                    <label class="text-sm link link-error link-underline-hover delete-btn" for="delete-modal" data-id="{{ $intern->id }}">Remove</label>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </x-table>
                    
                </div>
                <div class="mt-4">
                    {{ $interns->links('pagination::bootstrap-5') }}
                </div>
                <input class="modal-state" id="delete-modal" type="checkbox" />
                <div class="modal">
                    <label class="modal-overlay" for="delete-modal"></label>
                    <div class="modal-content flex flex-col gap-5">
                        <label for="delete-modal" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                        <h2 class="text-xl">Remove</h2>
                        <span>Are you sure you want to remove this Intern?</span>
                        <div class="flex gap-3">
                            <form class="w-1/2" id="deleteForm" method="POST" action="">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-error btn-block">Remove</button>
                            </form>
                            <label for="delete-modal" class="w-1/2 btn btn-block">Cancel</label>
                        </div>
                    </div>
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