@include('partials.head') 
@include('partials.topbar') 

      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('partials.sidebar') 
      <!--end::Sidebar-->
      <!--begin::App Main-->
@yield('content')
      <!--end::App Main-->

      @include('partials.footer') 