<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    @include('frontend.components.meta')

    <!-- All CSS -->
    @include('frontend.layouts.styles')
</head>

<body>

    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <!-- Header Section Start -->
    @include('frontend.layouts.nav')


    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" {{-- style="background-image: url('assets/img/breadcrumb.jpg');"> --}} <div class="container">
        <div class="page-heading">


        </div>
    </div>
    </div>


    {{-- profile section  --}}
  
    
    <!-- Footer Section Start -->
    @include('frontend.layouts.script_footer')

    <!-- All Javascripts -->
    @include('frontend.layouts.scripts')
</body>
</html>