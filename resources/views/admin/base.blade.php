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
      

        <a href="{{route('admin-dashboard')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Home</a>
        <a href="{{route('admin-admins')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Admins</a>
        <a href="{{route('admin-categories')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Categories</a>
        <a href="{{route('admin-departments')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Departments</a>
        <a href="{{route('admin-item_master')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Item Master</a>
        <a href="{{route('admin-item_types')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Item Types</a>
        <a href="{{route('admin-measurements')}}" class="list-group-item list-group-item-action pb-4 mt-3 ">Measurements</a>
    </div>
    <div class="content">
        {{-- @yield('dynamiccontent') --}}
    </div>
    
</div>
