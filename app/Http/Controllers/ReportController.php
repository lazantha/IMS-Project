<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportsView(){
        // Inventory Summary Report
        $inventorySummary = \DB::table('item_master')
        ->join('item_types', 'item_master.item_type_id', '=', 'item_types.type_id')
        ->join('measurements', 'item_master.measure_id', '=', 'measurements.measurement_id')
        ->join('departments', 'item_master.dep_id', '=', 'departments.dep_id')
        ->join('admins', 'item_master.admin_id', '=', 'admins.admin_id')
        ->select('item_master.*', 'item_types.type_name', 'measurements.name as measurement', 'departments.department', 'admins.first_name', 'admins.last_name')
        ->get();
        // Department-wise 
        $departmentWiseInventory = \DB::table('departments')
        ->join('item_master', 'departments.dep_id', '=', 'item_master.dep_id')
        ->select('departments.department', \DB::raw('SUM(item_master.quantity) as total_quantity'))
        ->groupBy('departments.department')
        ->get();

        // itemTypeActivity

        $itemTypeActivity = \DB::table('item_types')
        ->join('categories', 'item_types.category_id', '=', 'categories.cat_id')
        ->select('item_types.type_id', 'item_types.type_code', 'item_types.type_name', 'item_types.is_active', 'categories.category_name')
        ->get();

        // categoryWiseInventory

        $categoryWiseInventory = \DB::table('categories')
        ->join('item_types', 'categories.cat_id', '=', 'item_types.category_id')
        ->join('item_master', 'item_types.type_id', '=', 'item_master.item_type_id')
        ->select('categories.category_name', \DB::raw('SUM(item_master.quantity) as total_quantity'))
        ->groupBy('categories.category_name')
        ->get();
        // disposableItems
        $disposableItems = \DB::table('item_master')
        ->join('item_types', 'item_master.item_type_id', '=', 'item_types.type_id')
        ->join('measurements', 'item_master.measure_id', '=', 'measurements.measurement_id')
        ->join('departments', 'item_master.dep_id', '=', 'departments.dep_id')
        ->select('item_master.*', 'item_types.type_name', 'measurements.name as measurement', 'departments.department')
        ->where('item_master.is_disposable', 1)
        ->get();

       
        $detailedItems = \DB::table('item_master')
        ->join('item_types', 'item_master.item_type_id', '=', 'item_types.type_id')
        ->join('measurements', 'item_master.measure_id', '=', 'measurements.measurement_id')
        ->join('departments', 'item_master.dep_id', '=', 'departments.dep_id')
        ->join('admins', 'item_master.admin_id', '=', 'admins.admin_id')
        ->select('item_master.*', 'item_types.type_name', 'measurements.name as measurement', 'departments.department', 'admins.first_name', 'admins.last_name')
        ->get();


        return view('admin.reports.reportsView', compact('itemTypeActivity',
        'categoryWiseInventory',
        'inventorySummary',
        'departmentWiseInventory',
        'disposableItems',
        'detailedItems'));

    }
}
