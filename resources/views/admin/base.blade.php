<style>
    a:hover{
        color: purple;
        


      
      }
      a:active{
        color: black;
        font-weight: bolder;
        font-size: 1.2rem;


      
      }
      a:focus{
        
        color: green;
        font-size: 1.2rem;
        

      }
 
   

      
</style>

<div class="container ms-0">
    <div class="list-group p-2 pb-3 ms-0 " id="list-items" >
        <div class="container">
          <a href="{{route('admin-dashboard')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Home</a>
        </div>
        <div class="container">
          <h5> Controllers</h5>
          
          <div class="container">
            <a href="{{route('admin-admins')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Admins</a>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" onkeypress="return false" onkeydown="return false" onkeyup="return false">Categories</button>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-categories')}}">Update Categories</a></li>
                  <li><a class="dropdown-item" href="{{route('admin-category-grid')}}">Category Grid</a></li>
               
                </ul>
            </ul>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Departments</a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-departments')}}">Update Departments</a></li>
                  <li><a class="dropdown-item" href="{{route('admin-department-grid')}}">Department Grid </a></li>
               
                </ul>
            </ul>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Main Master</a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-item_master')}}">Update Items</a></li>
                  <li><a class="dropdown-item" href="{{route('admin-main_master-grid')}}">Item Grid </a></li>
               
                </ul>
            </ul>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Item Types </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-item_types')}}">Update Items Types</a></li>
                  <li><a class="dropdown-item" href="{{route('admin-item_type-grid')}}">Item Type Grid </a></li>
               
                </ul>
            </ul>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Measurements</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-measurements')}}">Update Measurements Types</a></li>
                  <li><a class="dropdown-item" href="{{route('admin-measurement-grid')}}">measurements Grid </a></li>
               
                </ul>
            </ul>
          </div>
        </div>

        
    </div>
    <div class="content">
        {{-- @yield('dynamiccontent') --}}
    </div>
    
</div>
