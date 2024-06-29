<style>
  a {
      color: #343a40; /* Dark color */
      font-weight: bold; /* Make text bold */
  }
  a:hover {
      color: purple;
      background-color: #f0f0f0;
      transition: background-color 0.3s, color 0.3s;
  }
  a:active {
      color: black;
  }
  #get_start_link {
      color: black;
  }
  #stat_link {
      color: black;
  }
  .sidebar-icon {
      margin-right: 8px;
  }
  .container {
      margin-bottom: 15px;
  }
  .list-group-item {
      transition: background-color 0.3s, color 0.3s;
  }
  .nav-link:hover {
      background-color: #e9ecef;
      transition: background-color 0.3s;
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
              <a href="{{route('reports-view')}}" id="get_start_link" class="list-group-item list-group-item-action pb-4 mt-3">
                  <i class="sidebar-icon bi bi-file-earmark-text"></i>Get Reports
              </a>
          </div>
      </div>
  </div>
  <div class="content">
      {{-- @yield('dynamiccontent') --}}
  </div>
</div>
