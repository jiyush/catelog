<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-user-shield"></i>
        </div>
        <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li @if(!empty($active) && $active == 'dashboard' ) 
                             class="nav-item active" 
                             @else
                             class="nav-item" 
                           @endif >
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span> <h7> Dashboard </h7></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - INDUSTRIES -->
       <li   @if(!empty($active) && $active == 'industries' ) 
                             class="nav-item active" 
                             @else
                             class="nav-item" 
                           @endif 
       >
        <a class="nav-link" href="{{ route('industry.list') }}">
         <i class="fas fa-building"></i>
          <span>Industries</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - INDUSTRIES -->
       <li   @if(!empty($active) && $active == 'apruval' ) 
                             class="nav-item active" 
                             @else
                             class="nav-item" 
                           @endif 
       >
        <a class="nav-link" href="{{ route('apruval.list') }}">
         <i class="fas fa-building"></i>
          <span>Listing Apruval</span></a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Categories-->
      <li   @if(!empty($active) && $active == 'category' ) 
                             class="nav-item active" 
                             @else
                             class="nav-item" 
                           @endif 
       >
        <a class="nav-link" href="{{ route('category.list') }}">
          <i class="fas fa-fw fa-list-alt "></i>
          <span>Categories</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Categories-->
      <li   @if(!empty($active) && $active == 'subcategory' ) 
                             class="nav-item active" 
                             @else
                             class="nav-item" 
                           @endif 
       >
        <a class="nav-link" href="{{ route('sub.list') }}">
          <i class="fas fa-fw fa-list-alt "></i>
          <span>SubCategory</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Categories-->
      <li   @if(!empty($active) && $active == 'inquiry' ) 
                             class="nav-item active" 
                             @else
                             class="nav-item" 
                           @endif 
       >
        <a class="nav-link" href="{{ route('inquiry.list') }}">
          <i class="fas fa-fw fa-list-ul "></i>
          <span>Review</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->