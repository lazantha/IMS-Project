<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Department;

use Illuminate\Http\Request;

class GridController extends Controller
{
    //
    public function category_grid(){

        $categories = Category::select('cat_id','category_name','category_code','is_active','is_active')->get();
        
        if($categories->isNotEmpty()){

            return view('admin.grids.category_grid',compact('categories'));
        }
        else{
            $categories = $categories ?? [];
            return view('admin.grids.category_grid',compact('categories'));

        }
        

    }
    public function department_grid(){

        $departments = Department::select('dep_id','department')->get();

        if ($departments->isNotEmpty()){
            
            return view('admin.grids.department_grid',compact('departments'));
        }
        else{
            
            $departments = $departments ?? [];
            return view('admin.grids.department_grid',compact('departments'));
        }
       

    }
    
    public function item_type_grid(){

        
        return view('admin.grids.item_type_grid');

    }

    public function main_master_grid(){

        return view('admin.grids.main_master_grid');

    }
    public function measurement_grid(){

        return view('admin.grids.measurement_grid');

    }
    
    

    
}
