@extends('Shield.dashboard')

@section('content')
    <!-- ===== Main Content Start ===== -->
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mx-auto max-w-270">
                <!-- Breadcrumb Start -->
                <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="text-title-sm2 font-bold text-black dark:text-white">
                        Carousel Slider Create
                    </h2>

                    <nav>
                        <ol class="flex items-center gap-2">
                            <li>
                                <a class="font-medium" href="index.html">Dashboard /</a>
                            </li>
                            <li class="font-medium text-primary">SliderCreate</li>
                        </ol>
                    </nav>
                </div>
                <!-- Breadcrumb End -->

                <div class="max-w-2xl mx-auto p-4">
                    <form action="{{ url(config('app.shield_route_prefix') . '/slider/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="heading" class="block text-lg font-medium text-gray-800 mb-1">Title</label>
                            <input type="text" id="heading" name="heading" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
                        </div>
                
                        <div class="mb-6">
                            <label for="content" class="block text-lg font-medium text-gray-800 mb-1">Content</label>
                            <textarea id="text" name="content" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" rows="6" required></textarea>
                        </div>            
                        <div class="mb-6">
                            <label for="image" class="block text-lg font-medium text-gray-800 mb-1">Image</label>
                            <input type="file" id="image" name="image" accept="image/*" multiple class="w-full">
                        </div>
                        
                        <div class="mb-6">
                            <label for="button_text" class="block text-lg font-medium text-gray-800 mb-1">Button Text</label>
                            <input type="text" id="button_text" name="button_text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
                        </div>
                
                        <div class="mb-6">
                            <label for="button_link" class="block text-lg font-medium text-gray-800 mb-1">Button Link</label>
                            <input type="text" id="button_link" name="button_link" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required>
                        </div>
                
                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-2 bg-indigo-500 text-white font-semibold rounded-md hover:bg-indigo-600 focus:outline-none">Submit</button>
                        </div>
                    </form>
                </div>
                <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
                <script>
                    ClassicEditor
                    .create(document.querySelector('#content'))
                    .catch(error => {
                      console.error(error);
                    });
                </script>

                <!-- ====== Settings Section End -->
            </div>
        </div>
    </main>
    <!-- ===== Main Content End ===== -->
@endsection
