<div class="w-full max-w-[18rem]">
    <aside class="sidebar h-full sidebar-fixed-left justify-start">
        <section class="sidebar-title items-center p-4">
            <div class="flex flex-col">
                <span>Attendance System</span>
                <span class="text-xs font-normal text-content2">Task #10</span>
            </div>
        </section>
        <section class="sidebar-content h-fit min-h-[20rem] overflow-visible">
            <nav class="menu rounded-md">
                <section class="menu-section px-4">
                    <span class="menu-title">Main menu</span>
                    <ul class="menu-items">
                        <a href="/admin/index" class="">
                            <li class="menu-item {{ Request::is('admin/index') ? 'menu-active text-[#9750DD]' : ''}}">                         
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                </svg>

                                <span>Dashboard</span>
                            </li>
                        </a>
                        
                        <li>
                            <input type="checkbox" id="menu-1" class="menu-toggle" />
                            <label class="menu-item justify-between" for="menu-1">
                                <div class="flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span>Interns</span>
                                </div>

                                <span class="menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </label>

                            <div class="menu-item-collapse">
                                <div class="min-h-0">
                                    <a href="/admin/intern_list/">
                                        <label class="menu-item ml-6 {{ Request::is('admin/intern_list') ? 'menu-active text-[#9750DD]' : ''}}">
                                            <span>Intern List</span>
                                        </label>
                                    </a>
                                    <a href="/admin/intern_logs">
                                        <label class="menu-item ml-6">
                                            <span>Intern Logs</span>
                                        </label>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <a href="/admin/settings/" class="">
                            <li class="menu-item">                          
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Form Settings</span>
                            </li>
                        </a>
                        <div class="divider my-0"></div>
                        <li class="menu-item">    
                            <form action="/admin/logout" method="post" class="grow">
                                @csrf
                                <button type="submit" class="flex gap-2 w-full">      
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                    </svg>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>
                        
                    </ul>
                </section>
            </nav>
        </section>
    </aside>
</div>
