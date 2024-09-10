<style>
    /* Sidebar container styling */
    .container {
        margin-bottom: 15px;
    }
    
    /* Background color and box shadow for the list group */
    .list-group {
        background-color: #f8f9fa; /* Light background */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
  
    /* Styling for list group items */
    .list-group-item {
        font-family: 'Arial', sans-serif; /* Clean font */
        background-color: #ffffff; /* White background */
        color: #343a40; /* Darker text */
        border: none;
        border-radius: 6px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        padding: 15px 20px; /* Increased padding */
    }
  
    /* Hover effect for list group items */
    .list-group-item:hover {
        background-color: #e9ecef; /* Light hover background */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow on hover */
        transform: translateY(-2px); /* Slight movement on hover */
        transition: transform 0.2s ease;
    }
  
    /* Active state styling */
    a:active {
        color: black;
    }
  
    /* Link styling inside sidebar */
    a {
        color: #343a40;
        font-weight: bold;
    }
  
    a:hover {
        color: purple;
        background-color: #f0f0f0;
        transition: background-color 0.3s, color 0.3s;
    }
  
    /* Sidebar icons */
    .sidebar-icon {
        margin-right: 10px;
        color: #6c757d; /* Slightly muted color for icons */
    }
  
    /* Dropdown navigation styling */
    .nav-tabs .nav-link {
        font-weight: bold;
        color: #343a40;
        padding: 10px 15px;
        border-radius: 5px;
        background-color: #fdfdfd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        transition: background-color 0.3s ease;
    }
  
    .nav-tabs .nav-link:hover {
        background-color: #e9ecef;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
  
    .dropdown-menu .dropdown-item {
        padding: 10px 20px;
        font-size: 14px;
        transition: background-color 0.3s;
    }
  
    .dropdown-menu .dropdown-item:hover {
        background-color: #f0f0f0;
    }
  
    /* Get Reports button */
    #get_start_link {
        color: black;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s;
    }
  
    #get_start_link:hover {
        background-color: #e9ecef;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }
  
    /* Adding CSS pseudo-classes */
    a::before {
        content: "→ ";
        font-size: 14px;
        color: #6c757d;
        transition: color 0.3s ease;
    }
  
    a:hover::before {
        color: purple;
    }
  </style>
  
<div class="container ms-0">
  <div class="list-group p-2 pb-3 ms-0" id="list-items">
      <div class="container">
          <div class="container">
            <a href="{{route('logout')}}" id="get_start_link" class="list-group-item list-group-item-action pb-4 mt-3">
                <i class="sidebar-icon bi bi-play-circle"></i>Log Out
            </a>
            
              <a href="{{route('master_view')}}" id="get_start_link" class="list-group-item list-group-item-action pb-4 mt-3">
                  <i class="sidebar-icon bi bi-play-circle"></i>How To Get Start?
              </a>

              <a href="{{route('admin-stat')}}" id="stat_link" class="list-group-item list-group-item-action pb-4 mt-3">
                  <i class="sidebar-icon bi bi-bar-chart-line"></i>Statistics
              </a>
              <a href="{{route('admin-admins')}}" class="list-group-item list-group-item-action pb-4 mt-3">
                  <i class="sidebar-icon bi bi-people"></i>Admins
              </a>
          </div>
          <div class="container">
              <ul class="nav nav-tabs">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark "   data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                          <i class="sidebar-icon bi bi-grid-3x3"></i>Categories
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3" href="{{route('admin-categories')}}">Update Categories</a></li>
                          <li><a class="dropdown-item" href="{{route('admin-category-grid')}}">Category Grid</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="container">
              <ul class="nav nav-tabs">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                          <i class="sidebar-icon bi bi-building"></i>Departments
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3" href="{{route('admin-departments')}}">Update Departments</a></li>
                          <li><a class="dropdown-item" href="{{route('admin-department-grid')}}">Department Grid</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="container">
              <ul class="nav nav-tabs">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                          <i class="sidebar-icon bi bi-archive"></i>Main Master
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3" href="{{route('admin-item_master')}}">Update Items</a></li>
                          <li><a class="dropdown-item" href="{{route('admin-main_master-grid')}}">Item Grid</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="container">
              <ul class="nav nav-tabs">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                          <i class="sidebar-icon bi bi-tags"></i>Item Types
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3" href="{{route('admin-item_types')}}">Update Items Types</a></li>
                          <li><a class="dropdown-item" href="{{route('admin-item_type-grid')}}">Item Type Grid</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="container">
              <ul class="nav nav-tabs">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                          <i class="sidebar-icon bi bi-rulers"></i>Measurements
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3" href="{{route('admin-measurements')}}">Update Measurements Types</a></li>
                          <li><a class="dropdown-item" href="{{route('admin-measurement-grid')}}">Measurements Grid</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
          <div class="container">
              <a href="{{route('generate_report')}}" id="get_start_link" class="list-group-item list-group-item-action pb-4 mt-3">
                  <i class="sidebar-icon bi bi-file-earmark-text"></i>Get Reports
              </a>
          </div>
      </div>
  </div>
  <div class="content">
      {{-- @yield('dynamiccontent') --}}
  </div>
</div>
