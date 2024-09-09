<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Department;
use App\Models\ItemMaster;
use App\Models\ItemType;
use App\Models\Measurement;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class GridController extends Controller
{
    //
    public function category_grid(){

        $categories = Category::select('cat_id', 'category_name', 'category_code', 'is_active')
        ->whereNull('categories.deleted_at') 
        ->get();

        
        if($categories->isNotEmpty()){

            return view('admin.grids.category_grid',compact('categories'));
        }
        else{
            $categories = $categories ?? [];
            return view('admin.grids.category_grid',compact('categories'));

        }
        

    }
    public function department_grid(){

        $departments = Department::select('dep_id','department')->whereNull('deleted_at')->get();

        if ($departments->isNotEmpty()){
            
            return view('admin.grids.department_grid',compact('departments'));
        }
        else{
            
            $departments = $departments ?? [];
            return view('admin.grids.department_grid',compact('departments'));
        }
       

    }
    
    public function item_type_grid(){

        $itemTypes = ItemType::select('item_types.type_id', 'item_types.type_code', 'item_types.type_name', 'item_types.is_active', 'categories.category_name')->join('categories', 'item_types.category_id', '=', 'categories.cat_id')->whereNull('item_types.deleted_at')->get();
        return view('admin.grids.item_type_grid',compact('itemTypes'));

    }

    public function main_master_grid(Request $request)
    {
        $query = \DB::table('item_master')
            ->join('item_types', 'item_master.item_type_id', '=', 'item_types.type_id')
            ->join('measurements', 'item_master.measure_id', '=', 'measurements.measurement_id')
            ->join('departments', 'item_master.dep_id', '=', 'departments.dep_id')
            ->join('admins', 'item_master.admin_id', '=', 'admins.admin_id')
            ->select(
                'item_master.*', 
                'item_types.type_name as itemType', 
                'measurements.code as measurement', 
                'departments.department', 
                'admins.first_name', 
                'admins.last_name'
            )
            ->whereNull('item_master.deleted_at'); // Ensure only non-deleted items are shown

        // Apply search filter if a search term is provided
        if ($request->has('search') && !empty($request->search)) {
            $query->where('item_master.item', 'like', '%' . $request->search . '%');
        }

        // Fetch the items
        $detailedItems = $query->get();

        // Return the view with the data
        return view('admin.grids.main_master_grid', compact('detailedItems'));
    }

    public function measurement_grid(){

        $measurements = Measurement::select('measurement_id', 'name','code', 'is_active')->whereNull('deleted_at')->get();
        
        return view('admin.grids.measurement_grid',compact('measurements'));

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

     public function edit_item_types($type_id){

        //   $item_types = ItemType::select('type_code', 'type_name', 'is_active')
        // ->where('type_id', $type_id)
        // ->first();

         $item_types = ItemType::where('type_id', $type_id)->first();

        return view('admin.edit_forms.edit_item_types', compact('item_types', 'type_id'));


    }

    public function update_item_types(Request $request, $id)
    {

        $item = ItemType::where('type_id', $id)->first();
        
        if ($item) {
            // Now perform the update
            $item->type_code = $request->input('typeCode');
            $item->type_name = $request->input('typeName');
            $item->is_active = $request->input('isActive');

            $item->save();
            
            return redirect()->route('admin-item_type-grid')->with('success', 'Item updated successfully');
        } else {
            return redirect()->route('admin-item_type-grid')->with('error', 'Item not found.');
        }
    }


    

    public function delete_category($cat_id)
    {
        // Find the category by its ID
        $category = Category::find($cat_id);

        if ($category) {
            // Soft delete the category
            $category->delete();
            return redirect()->route('admin-category-grid')->with('success', 'Category deleted successfully');
        } else {
            return redirect()->route('admin-category-grid')->with('error', 'Category not found.');
        }
    }


    
    public function delete_department($dep_id){
        
        $department = Department::find($dep_id);

        if ($department) {
            // Soft delete the department
            $department->delete();
            return redirect()->route('admin-department-grid')->with('success', 'Department Deleted successfully');
        } else {
            return redirect()->route('admin-department-grid')->with('error', 'Department not found.');
        } 


    }

    public function delete_item($item_id){

        $item = ItemMaster::find($item_id);

        if ($item) {
            $item->delete();
            return redirect()->route('admin-main_master-grid')->with('success', 'Item Deleted successfully');
        } else {
            return redirect()->route('admin-department-grid')->with('error', 'Item not found.');
        } 

    }

    public function delete_item_type($type_id){

        $item_type = ItemType::find($type_id);
        if ($item_type) {
            
            $item_type->delete();
            return redirect()->route('admin-item_type-grid')->with('success', 'Item Deleted successfully');

        } else {
            return redirect()->route('admin-item_type-grid')->with('error', 'Type not found.');
        } 
        
    }

    public function delete_measurement($measure_id){
        $measurement = Measurement::find($measure_id);
        if ($measurement) {
            
            $measurement->delete();
            return redirect()->route('admin-measurement-grid')->with('success', 'Item Deleted successfully');
        } else {
            return redirect()->route('admin-measurement-grid')->with('error', 'Measurement not found.');
        } 
        
    }

    public function edit_measurement($measure_id){

        $measurement=Measurement::where('measurement_id',$measure_id)->first();
        return view('admin.edit_forms.edit_measurement', compact('measurement', 'measure_id'));
    }

    public function update_measurement(Request $request, $measure_id) {

        $measurement = Measurement::where('measurement_id', $measure_id)->first();
        if ($measurement) {
            $measurement->name = $request->input('measurementName');
            $measurement->code= $request->input('measurementCode');
            $measurement->is_active = $request->input('isActive') ?? 0; 
            $measurement->updated_at = now();
            $measurement->save();   
            return redirect()->route('admin-measurement-grid')->with('success', 'Measurement updated successfully');

        }
    }
     
}
