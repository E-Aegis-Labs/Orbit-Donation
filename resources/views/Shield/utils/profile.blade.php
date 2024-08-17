@extends('Shield.dashboard')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mx-auto max-w-270">
                <!-- Breadcrumb Start -->
                <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="text-title-sm2 font-bold text-black dark:text-white">
                        Profile Page
                    </h2>

                    <nav>
                        <ol class="flex items-center gap-2">
                            <li>
                                <a class="font-medium" href="index.html">Dashboard /</a>
                            </li>
                            <li class="font-medium text-primary">Settings</li>
                        </ol>
                    </nav>
                </div>
                <!-- Breadcrumb End -->

                <!-- ====== Settings Section Start -->
                <div class="grid grid-cols-5 gap-8">
                    <div class="col-span-5 xl:col-span-3">
                        <div
                            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                                <h3 class="font-medium text-black dark:text-white">
                                    Personal Information
                                </h3>
                            </div>
                            <div class="p-7">

                                {{-- Update Profile Form  --}}
                                <form method="POST" action="{{ route('Shield.profile.update') }}">
                                    @csrf
                                    @method('PUT')


                                    <div class="mb-5.5">
                                        <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                            for="emailAddress">Email Address</label>
                                        <div class="relative">
                                            <span class="absolute left-4.5 top-4">
                                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.33301 4.16667C2.87658 4.16667 2.49967 4.54357 2.49967 5V15C2.49967 15.4564 2.87658 15.8333 3.33301 15.8333H16.6663C17.1228 15.8333 17.4997 15.4564 17.4997 15V5C17.4997 4.54357 17.1228 4.16667 16.6663 4.16667H3.33301ZM0.833008 5C0.833008 3.6231 1.9561 2.5 3.33301 2.5H16.6663C18.0432 2.5 19.1663 3.6231 19.1663 5V15C19.1663 16.3769 18.0432 17.5 16.6663 17.5H3.33301C1.9561 17.5 0.833008 16.3769 0.833008 15V5Z"
                                                            fill="" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M0.983719 4.52215C1.24765 4.1451 1.76726 4.05341 2.1443 4.31734L9.99975 9.81615L17.8552 4.31734C18.2322 4.05341 18.7518 4.1451 19.0158 4.52215C19.2797 4.89919 19.188 5.4188 18.811 5.68272L10.4776 11.5161C10.1907 11.7169 9.80879 11.7169 9.52186 11.5161L1.18853 5.68272C0.811486 5.4188 0.719791 4.89919 0.983719 4.52215Z"
                                                            fill="" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <input
                                                class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                                type="email" name="emailAddress" id="emailAddress" placeholder=""
                                                value="{{ auth()->user()->email }}" />
                                        </div>
                                    </div>

                                    <div class="mb-5.5">
                                        <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                            for="Username">Username</label>
                                        <input
                                            class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                            type="text" name="Username" id="Username" placeholder=""
                                            value="{{ auth()->user()->name }}" />
                                    </div>








                                    <div class="flex justify-end gap-4.5">
                                        <button
                                            class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                                            type="submit">
                                            Cancel
                                        </button>
                                        <button
                                            class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90"
                                            type="submit">
                                            Save
                                        </button>
                                    </div>



                                </form>



                                {{-- update password --}}
                                <form method="POST" action="{{ route('Shield.profile.update-password') }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-5.5">
                                        <label for="current_password"
                                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                                            for="Username">Current Password</label>
                                        <input
                                            class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                            type="password" class="form-control" id="current_password"
                                            name="current_password" required />
                                    </div>

                                    <div class="mb-5.5">
                                        <label for="current_password"
                                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                                            for="Username">New Password</label>
                                        <input
                                            class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                            type="password" class="form-control" id="password" name="password" required />
                                    </div>


                                    <div class="mb-5.5">
                                        <label for="password_confirmation"
                                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                                            for="Username">Confirm New Password</label>
                                        <input
                                            class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                                            type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" required />
                                    </div>

                                    <div class="flex justify-end gap-4.5">
                                        <button
                                            class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                                            type="submit">
                                            Cancel
                                        </button>
                                        <button
                                            class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90"
                                            type="submit">
                                            Save
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>





                    <div class="col-span-5 xl:col-span-2">
                        <div
                            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                            <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                                <h3 class="font-medium text-black dark:text-white">
                                    Your Photo
                                </h3>
                            </div>
                            <img src="{{ $user->profile_picture ? Storage::url($user->profile_picture) : asset('default_profile_picture.png') }}"
                                alt="Profile Picture" class="profile-picture">

                            <form action="{{ route('Shield.profile.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Other input fields -->

                                <div class="form-group">
                                    <label for="profile_picture">Profile Picture</label>
                                    <input type="file" name="profile_picture" id="profile_picture"
                                        class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </form>


                        </div>
                    </div>
                </div>
                <!-- ====== Settings Section End -->
            </div>
        </div>
    </main>
    <!-- ===== Main Content End ===== -->
@endsection
