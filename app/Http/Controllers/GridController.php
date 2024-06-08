<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Department;
use App\Models\ItemMaster;
use App\Models\ItemType;


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

        $itemTypes = ItemType::select('item_types.type_id', 'item_types.type_code', 'item_types.type_name', 'item_types.is_active', 'categories.category_name')->join('categories', 'item_types.category_id', '=', 'categories.cat_id')->get();
        return view('admin.grids.item_type_grid',compact('itemTypes'));

    }

    public function main_master_grid(){


        $items = ItemMaster::with(['itemType', 'measurement', 'department'])->get();
        return view('admin.grids.main_master_grid',compact('items'));

    }
    public function measurement_grid(){

        return view('admin.grids.measurement_grid');

    }
    
    // edit methods

    public function edit_category($cat_id) {

        $data = Category::select('category_name', 'category_code', 'is_active')->where('cat_id', $cat_id)->first();
        return view('admin.edit_forms.edit_category', compact('data', 'cat_id'));
    }
    
    public function update_category(Request $request, $cat_id) {

        $category = Category::where('cat_id',$cat_id)->first();
    
        if ($category) {
            $category->category_name = $request->input('categoryName');
            $category->category_code = $request->input('categoryCode');
            $category->is_active = $request->input('isActive');
            $category->updated_at = now();
            $category->save();
    
            return redirect()->route('admin-category-grid')->with('success', 'Category updated successfully');
            
        }
    
        return redirect()->back()->with('error', 'Category not found');
    }



    public function edit_department($dep_id){

        $department=Department::select('department')->where('dep_id',$dep_id)->first();

        return view('admin.edit_forms.edit_department', compact('department', 'dep_id'));


    }

    public function update_department(Request $request,$dep_id){

        $data=Department::where('dep_id',$dep_id)->first();

        if($data){
            $data->department=$request->input('departmentName');
            $data->updated_at = now();
            $data->save();
    
            return redirect()->route('admin-department-grid')->with('success', 'Department updated successfully');
            
        }
         return redirect()->back()->with('error', 'Department not found');

        

    }

    public function edit_item($item_id){

        $item=ItemMaster::select('item','item_code','quantity','manufacturer','is_disposable','is_active')->where('item_master_id',$item_id)->first();
        return view('admin.edit_forms.edit_item', compact('item', 'item_id'));



    }
    public function update_item(Request $request, $item_id) {
        // Fetch the entire item record
        $item = ItemMaster::where('item_master_id', $item_id)->first();
        
        if ($item) {
            // Update item properties from request input
            $item->item = $request->input('itemName');
            $item->item_code = $request->input('itemCode');
            $item->quantity = $request->input('quantity');
            $item->manufacturer = $request->input('manufacturer');
            
            // Handle boolean values for checkboxes
            $item->is_disposable = $request->has('isDisposable') ? true : false;
            $item->is_active = $request->has('isActive') ? true : false;
            
            // Save the updated item
            $item->save();
            
            return redirect()->route('admin-main_master-grid')->with('success', 'Item updated successfully');
        }
        
        return redirect()->back()->with('error', 'Item not found');
    }
    

    public function delete_category($cat_id){

        Category::where('cat_id',$cat_id)->delete();
        return redirect()->route('admin-category-grid')->with('success', 'Category Deleted successfully');


    }
    
    public function delete_department($dep_id){

        Department::where('dep_id',$dep_id)->delete();
        return redirect()->route('admin-department-grid')->with('success', 'Department Deleted successfully');


    }

    public function delete_item($item_id){

        ItemMaster::where('item_master_id',$item_id)->delete();
        return redirect()->route('admin-main_master-grid')->with('success', 'Item Deleted successfully');


    }


    


     
}
