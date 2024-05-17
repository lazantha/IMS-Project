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
          <h3>Admin Controllers</h3>
          
          <div class="container">
            <a href="{{route('admin-admins')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Admins</a>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categories</a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-categories')}}">Update Categories</a></li>
                  <li><a class="dropdown-item" href="#">Category Grid</a></li>
               
                </ul>
            </ul>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Departments</a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-departments')}}">Update Departments</a></li>
                  <li><a class="dropdown-item" href="#">Department Grid </a></li>
               
                </ul>
            </ul>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Main Master</a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-item_master')}}">Update Items</a></li>
                  <li><a class="dropdown-item" href="#">Item Grid </a></li>
               
                </ul>
            </ul>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Item Types </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-item_types')}}">Update Items Types</a></li>
                  <li><a class="dropdown-item" href="#">Item Type Grid </a></li>
               
                </ul>
            </ul>
          </div>
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Measurements</a>
                
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item list-group-item list-group-item-action pb-4 mt-3 " href="{{route('admin-measurements')}}">Update Measurements Types</a></li>
                  <li><a class="dropdown-item" href="#">measurements Grid </a></li>
               
                </ul>
            </ul>
          </div>
        </div>

        
    </div>
    <div class="content">
        {{-- @yield('dynamiccontent') --}}
    </div>
    
</div>
