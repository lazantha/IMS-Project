<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Admin;
use App\Models\Category;
use App\Models\ItemType;
use App\Models\ItemMaster;
use App\Models\Measurement;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    // public function __construct()
    // {
    //     // Apply protection to all methods except index, login, register, login_post, register_post, and logout
    //     $unprotectedRoutes = ['index', 'login', 'register', 'login_post', 'register_post', 'logout'];
    //     $route = request()->route();
    //     if ($route) {
    //         $actionMethod = $route->getActionMethod();
    //         if (!in_array($actionMethod, $unprotectedRoutes)) {
    //             if (!request()->is('admin/*')) {
    //                 return redirect()->route('login')->send();
    //             }
    //         }
    //     }
    // }
    public function logout()
    {
        Session::flush();
        if (!Session::has('email')) {
            logger('Session cleared successfully');
        } else {
            logger('Session not cleared');
        }
        return redirect()->route('login');
    }
    

    
    public function login()
{
    if (Session::has('email')) {
        logger('Session found, redirecting to master_view');
        return redirect()->route('master_view')->with('error', 'Already logged in');
    } else {
        logger('No session found, showing login view');
        return view('templates.signIn');
    }
}

public function register()
{
    if (!Session::has('email')) {
        logger('No session found, showing register view');
        return view('templates.signUp');
    } else {
        logger('Session found, redirecting to master_view');
        return redirect()->route('master_view')->with('error', 'Already logged in');
    }
}
    
    
    public function login_post(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('admin')->attempt($credentials)) {

            $request->session()->put('email', $request->email);
            return view('admin.master_view');
            
        } else {
            return redirect()->route('log')->with('error', 'Check again');
        }

    }
    public function master_view(){
        if (Session::has('email')) {

            return  view('admin.master_view');
            
        }else{
            return redirect()->route('login')->with('error', 'Please Log In');

        }

        
    }
    

    public function register_post(Request $request)
{
    $new_admin = new Admin();
    $password = $request->password;
    $re_password = $request->rePassword;
    
    if ($re_password == $password) {
        $new_admin->first_name = $request->firstName;
        $new_admin->last_name = $request->lastName;
        $new_admin->email = $request->email;
        $new_admin->password = bcrypt($request->password);
        $new_admin->save();
        
        return redirect()->route('login')->with('success', 'Registered successfully!');
    } else {
        return redirect()->route('register')->with('error', 'Passwords mismatched!');
    }
        
}

     public function stat_view()
    {
        if (Session::has('email')) {

            $adminCount = DB::table('admins')->count('admin_id');
            $categoryCount=DB::table('categories')->count('cat_id');
            $departmentCount=DB::table('departments')->count('dep_id');
            $itemCount=DB::table('item_master')->count('item_master_id');
            $itemTypeCount=DB::table('item_types')->count('type_id');
            $measurementsCount=DB::table('measurements')->count('measurement_id');
    
            return view('admin.stats',compact('adminCount','categoryCount','departmentCount','itemCount','itemTypeCount','measurementsCount'));
            
        }else{
            return redirect()->route('login')->with('error', 'Please Log In');

        }

    }
    

    public function admins()
    {   
        if (Session::has('email')) {

            $admins=Admin::select('admin_id','first_name','last_name','email')->get();    
            return view('admin.admins',['admins'=>$admins]);
            
        }else{

            return redirect()->route('login')->with('error', 'Please Log In');

        }
    }

    public function categories()
    {   
       if (Session::has('email')) {
            return view('admin.categories');
       }else{
            return redirect()->route('login')->with('error', 'Please Log In');

       }
        
        
    }
    public function postCategories(Request $request){


        $new_category=new Category();
        $new_category->category_name=$request->categoryName;
        $new_category->category_code=$request->categoryCode;
        $new_category->is_active=$request->isActive;
        if($new_category->save()){
            return redirect('templates/categories')->with('success','category added successfully');
        }else{
            return redirect('templates/categories')->with('error','category not added');
        }
    }


    public function departments()
    {
        if (Session::has('email')) {
            return view('admin.departments');
        }else{
            return redirect()->route('login')->with('error', 'Please Log In');

        }
        
    }

    public function setDepartments(Request $request)
    {

        $new_department=new Department();
        $new_department->department=$request->departmentName;
        $new_department->save();
        return redirect('templates/departments')->with('success','department added successfully');
        

    }
    
    public function item_master()
    {
        
        if (Session::has('email')) {
            $departments=Department::select('department')->get();
            $measurement_codes=Measurement::select('code')->get();
            $item_types=ItemType::select('type_name')->get();
            
            return view('admin.item-master',[
                'departments' => $departments,
                'measurement_codes' => $measurement_codes,
                'item_types' => $item_types
            ]);
        }else{
            return redirect()->route('login')->with('error', 'Please Log In');

        }
    }
    public function post_item_master(Request $request)
    {
        $new_item=new ItemMaster(); 
        $email =session('email');

        $admin_id = Admin::where('email', $email)->value('admin_id');
        $item_type_id = ItemType::where('type_name', $request->itemType)->value('type_id');
        $measure_id = Measurement::where('code', $request->measurement)->value('measurement_id');
        $dep_id = Department::where('department', $request->department)->value('dep_id');

        $new_item->item_type_id=$item_type_id;
        $new_item->measure_id=$measure_id;
        $new_item->admin_id=$admin_id;
        $new_item->dep_id=$dep_id;

        $new_item->item=$request->itemName;
        $new_item->item_code=$request->itemCode;
        $new_item->quantity=$request->quantity;
        $new_item->manufacturer=$request->manufacturer;
        $new_item->is_disposable=$request->isDisposable;
        $new_item->is_active=$request->isActive;

        
        $new_item->save();

        return redirect('templates/item_master')->with('success','New Item added successfully');


    }
    

    public function item_types()
    {
        if (Session::has('email')) {
            
            $item_categories=Category::select('category_name')->get();

            return view('admin.item-types',['item_categories'=>$item_categories]);
        }else{
            return redirect()->route('login')->with('error', 'Please Log In');

        }
    }

    public function post_item_types(Request $request){
        $new_type=new ItemType();
        
        $category=$request->category;
        $cat_id = Category::where('category_name',$category )->value('cat_id');

        $new_type->type_code=$request->typeCode;
        $new_type->type_name=$request->typeName;
        $new_type->category_id=$cat_id;
        $new_type->is_active=$request->isActive;
        $new_type->save();
        return redirect('templates/item_types')->with('success','New Type added successfully');
        
    }

    public function measurements()
    {
        if (Session::has('email')) {
        
            return view('admin.measurements');
        }else{
            return redirect()->route('login')->with('error', 'Please Log In');

        }
    }

    public function post_measurements(Request $request){

        $new_measure= new Measurement();

        $new_measure->name=$request->measurementName;
        $new_measure->code=$request->measurementCode;
        $new_measure->is_active=$request->isActive;

        $new_measure->save();
        return redirect('templates/measurements')->with('success','New Measurement added successfully');


    }

}
