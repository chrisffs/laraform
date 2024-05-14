<x-layout>
    @section('title', 'Admin Login | IphiTech Attendance System')
    <x-flash-message/>
    <div class="h-screen flex items-center container mx-auto">
        <div class="w-2/3">
            <div>
                <img src="{{ asset('images/Sign in-rafiki.png')}}" class="img-fluid" alt="" srcset="">
            </div>
        </div>
        <div class="flex flex-col gap-6 w-1/3 px-6">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-error">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 4C12.96 4 4 12.96 4 24C4 35.04 12.96 44 24 44C35.04 44 44 35.04 44 24C44 12.96 35.04 4 24 4ZM24 26C22.9 26 22 25.1 22 24V16C22 14.9 22.9 14 24 14C25.1 14 26 14.9 26 16V24C26 25.1 25.1 26 24 26ZM26 34H22V30H26V34Z" fill="#E92C2C" />
                    </svg>
                    <div class="flex flex-col">
                        <span>Invalid Credentials</span>
                        <span class="text-content2">Incorrect Username or Password</span>
                    </div>
                </div>
            <?php } unset($_SESSION['error'])?>
            <div class="flex flex-col items-center">
                <h1 class="text-3xl font-semibold">Admin Sign In</h1>
                <p class="text-sm">Sign in to access Admin</p>
            </div>
            <form action="/admin/authenticate" method="post">
                @csrf
                <div class="form-group">
                    <div class="form-field">
                        <label for="username" class="form-label">Username</label>
                        <input placeholder="Type here" name="username" class="input-ghost-secondary input max-w-full" value="{{old('username')}}"/>
                        @error('username')
                        <label class="form-label">
                            <span class="form-label-alt">{{$message}}</span>
                        </label>
                        @enderror
                       
                    </div>
                    <div class="form-field">
                        <label class="form-label">Password</label>
                        <div class="form-control">
                            <input placeholder="Type here" name="password" type="password" class="input-ghost-secondary input max-w-full" />
                        </div>
                    </div>
                    <div class="form-field pt-5">
                        <div class="form-control justify-between">
                            <button type="submit" name="login" class="btn btn-secondary w-full">Sign in</button>
                        </div>
                    </div>
                    <div class="form-field">
                        <div class="form-control justify-center">
                            <a href="/" class="link link-underline-hover link-secondary bg-main text-sm">Back to Attendance Form</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>