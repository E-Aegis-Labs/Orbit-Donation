<section
    class="w-full overflow-hidden dark:bg-gray-900 font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover">

    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

        <!--Main Col-->
        <div id="profile"
            class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl  opacity-75 mx-6 lg:mx-0">


            <div class="p-4 md:p-12 text-center lg:text-left">
                <!-- Image for mobile view-->
                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center"
                    style="background-image: url('https://telegra.ph/file/10de92fcc7e777fe4e74b.jpg')"></div>

                <h1 class="text-3xl font-bold pt-8 lg:pt-0">Profile Page</h1>
                <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
                <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#80ff00"
                            d="M17.25 2.75H6.75A4.75 4.75 0 0 0 2 7.5v9a4.75 4.75 0 0 0 4.75 4.75h10.5A4.76 4.76 0 0 0 22 16.5v-9a4.76 4.76 0 0 0-4.75-4.75m-3.65 8.32a3.26 3.26 0 0 1-3.23 0L3.52 7.14a3.25 3.25 0 0 1 3.23-2.89h10.5a3.26 3.26 0 0 1 3.23 2.89z" />
                    </svg>
                    {{ $email }}
                </p>


                <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 26 26">
                        <path fill="#80ff00"
                            d="M16.563 15.9c-.159-.052-1.164-.505-.536-2.414h-.009c1.637-1.686 2.888-4.399 2.888-7.07c0-4.107-2.731-6.26-5.905-6.26c-3.176 0-5.892 2.152-5.892 6.26c0 2.682 1.244 5.406 2.891 7.088c.642 1.684-.506 2.309-.746 2.397c-3.324 1.202-7.224 3.393-7.224 5.556v.811c0 2.947 5.714 3.617 11.002 3.617c5.296 0 10.938-.67 10.938-3.617v-.811c0-2.228-3.919-4.402-7.407-5.557" />
                    </svg>
                    {{ $username }}
                </p>
                <p class="pt-8 text-sm">{{ $timeJoined }}</p>

                <div class="pt-12 pb-8">
                    <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
                        Edit Profle
                    </button>
                </div>



                <!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

            </div>

        </div>

        <!--Img Col-->
        <div class="w-full lg:w-2/5">
            <!-- Big profile image for side bar (desktop) -->
            <img src="https://telegra.ph/file/10de92fcc7e777fe4e74b.jpg"
                class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
            <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

        </div>
    </div>

</section>
