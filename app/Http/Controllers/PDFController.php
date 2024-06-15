<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function printPdf()
    {
        // Helper function to ensure UTF-8 encoding
        function utf8_encode_recursive($array)
        {
            array_walk_recursive($array, function (&$item, $key) {
                if (!mb_check_encoding($item, 'UTF-8')) {
                    $item = utf8_encode($item);
                }
            });
            return $array;
        }

        // Fetch data
        $inventorySummary = \DB::table('item_master')
            ->join('item_types', 'item_master.item_type_id', '=', 'item_types.type_id')
            ->join('measurements', 'item_master.measure_id', '=', 'measurements.measurement_id')
            ->join('departments', 'item_master.dep_id', '=', 'departments.dep_id')
            ->join('admins', 'item_master.admin_id', '=', 'admins.admin_id')
            ->select('item_master.*', 'item_types.type_name', 'measurements.name as measurement', 'departments.department', 'admins.first_name', 'admins.last_name')
            ->get()
            ->toArray();

        $departmentWiseInventory = \DB::table('departments')
            ->join('item_master', 'departments.dep_id', '=', 'item_master.dep_id')
            ->select('departments.department', \DB::raw('SUM(item_master.quantity) as total_quantity'))
            ->groupBy('departments.department')
            ->get()
            ->toArray();

        $itemTypeActivity = \DB::table('item_types')
            ->join('categories', 'item_types.category_id', '=', 'categories.cat_id')
            ->select('item_types.type_id', 'item_types.type_code', 'item_types.type_name', 'item_types.is_active', 'categories.category_name')
            ->get()
            ->toArray();

        $categoryWiseInventory = \DB::table('categories')
            ->join('item_types', 'categories.cat_id', '=', 'item_types.category_id')
            ->join('item_master', 'item_types.type_id', '=', 'item_master.item_type_id')
            ->select('categories.category_name', \DB::raw('SUM(item_master.quantity) as total_quantity'))
            ->groupBy('categories.category_name')
            ->get()
            ->toArray();

        $disposableItems = \DB::table('item_master')
            ->join('item_types', 'item_master.item_type_id', '=', 'item_types.type_id')
            ->join('measurements', 'item_master.measure_id', '=', 'measurements.measurement_id')
            ->join('departments', 'item_master.dep_id', '=', 'departments.dep_id')
            ->select('item_master.*', 'item_types.type_name', 'measurements.name as measurement', 'departments.department')
            ->where('item_master.is_disposable', 1)
            ->get()
            ->toArray();

        $detailedItems = \DB::table('item_master')
            ->join('item_types', 'item_master.item_type_id', '=', 'item_types.type_id')
            ->join('measurements', 'item_master.measure_id', '=', 'measurements.measurement_id')
            ->join('departments', 'item_master.dep_id', '=', 'departments.dep_id')
            ->join('admins', 'item_master.admin_id', '=', 'admins.admin_id')
            ->select('item_master.*', 'item_types.type_name', 'measurements.name as measurement', 'departments.department', 'admins.first_name', 'admins.last_name')
            ->get()
            ->toArray();

        // Ensure UTF-8 encoding for all data
        $inventorySummary = utf8_encode_recursive($inventorySummary);
        $departmentWiseInventory = utf8_encode_recursive($departmentWiseInventory);
        $itemTypeActivity = utf8_encode_recursive($itemTypeActivity);
        $categoryWiseInventory = utf8_encode_recursive($categoryWiseInventory);
        $disposableItems = utf8_encode_recursive($disposableItems);
        $detailedItems = utf8_encode_recursive($detailedItems);

        $pdf = PDF::loadView('admin.reports.reportsView', compact(
            'itemTypeActivity',
            'categoryWiseInventory',
            'inventorySummary',
            'departmentWiseInventory',
            'disposableItems',
            'detailedItems'
        ));

        return $pdf->download('report.pdf');
    }
}
