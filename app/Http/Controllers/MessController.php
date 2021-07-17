<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\reg;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\signup;
use App\Models\addfood;
use App\Models\Booking;
use DB;


class MessController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $req)
    {
        $req->validate([
           'email'=>'required',
           'password'=>'required|min:5|max:12'
           ]);

        $email=$req->email;
	    $password=$req->password;

        if($email=="deena@gmail.com" && $password=="123456")
        {
            
                        //return redirect('addfoodview');
                        $data=DB::table("addfoods")->get();
                        return view('Admin',compact('data'));
        }
        else
        {
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                //return 1;
                $users = Auth::user();
                $req->session()->put('login_id',$users->id);
                
               if(Auth::user()->usertpe=="user"){
                $data=DB::table("addfoods")->get();
                return view('student',compact('data'));
                }
                else{
                    echo "invalid";
                }
        
        }

	//   if(Auth::attempt(['email'=>$email,'password'=>$password])){
    //     //return 1;
    //     $users = Auth::user();
    //     $req->session()->put('login_id',$users->id);
        
    //     if(Auth::user()->usertpe=="admin"){
    //         return redirect("addfoodview");
    //     }
    //     else if(Auth::user()->usertpe=="user"){
    //         return redirect('student');
    //     }
    //     else{
    //         echo "invalid";
    //     }

        // if($email=="deena@gmail.com" && $password=="123456")
        // {
        //     $users = Auth::user();
        //     $req->session()->put('login_id',1);
        //     if(Auth::user()->usertpe=="user"){
        //                 return redirect('student');
        //             }
        //     else
        //     {
        //         return redirect("addfoodview");
        //     }
        // }
        // else
        // {
        //     echo "invalid";
        // }
}


       
   

    

    function register(Request $req)
          {
    
            $req->validate([
           'username'=>'required|regex:/^[\pL\s\-]+$/u',
           'address'=>'required',
          'email'=>'required',
          'mobile'=>'required|regex:/[0-9]{9}/',
          'password'=>'required|min:5|max:12'
          ]);
    
        $data=new User();
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->usertpe='user';
        $query=$data->save();
        if($query)
        {
            $data=User::latest('id')->first();
            $id=$data->id;
           $reg= new signup();
         $reg->username=$req->username;

         $reg->address=$req->address;
         $reg->mobile=$req->mobile;
         $reg->email=$req->email; 
         $reg->login_id=$id;
         $reg->password=Hash::make($req->password);
         $reg->createpassword=Hash::make($req->createpassword);
      
         $reg->save();
         return back()->with('sucess','sucessfully registered and Now u can Login');
        
        }
        else{
            return back()->with('fail','something wrong');
        }
        
    }

    function addfood(Request $req)
          {
            $req->validate([
                'itemno'=>'required|numeric|unique:addfoods',
                
            ]);
            $food=new addfood;

            $food->foodname=$req->foodname;
            $food->itemno=$req->itemno;
            $food->price=$req->price;

              $file = $req->image;
             $destinationPath = 'uploads/';
             $extenstion = strtolower($file->getClientOriginalExtension());
             $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
             $file_name = $name . "." . $extenstion;
             if (!is_dir($destinationPath)) {
                 File::makeDirectory($destinationPath, 0775, true);            
             }
             $file->move($destinationPath, $file_name);
             $food->image=$file_name; 

              
            $food->save();
            return back()->with('success','successfully registered');
    }
    function Admin()
    {
        return view('admin');
    }

    function addfoodview()
    {
        $data=DB::table("addfoods")->get();
        return view('Admin',compact('data'));
        
    }
    function deletefood($id)
    {
        $data=addfood::find($id);
        $data->delete();
        return redirect('addfoodview');
    }
    function editfood($id)
    {
        $data= addfood::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data= addfood::find($req->id);
        $data->foodname=$req->foodname;
        $data->itemno=$req->itemno;
        $data->price=$req->price;
        $data->image=$req->image;
        $data->save();
        return redirect('addfoodview');
    }
    function student()
    {
         $data=DB::table("addfoods")->get();
         return view('student',compact('data'));
        
       
    }
    
    function studentorder()
    {
        return view('studentorder');
    }
    function adminorder()
    {
        return view('adminorder');
    }

   

    //Order food
     function order_food(Request $req,$id)
    {
        $order_no=$req->session()->get('login_id');
        $food=addfood::where('id',$id)->first();
        Booking::insert([
            'orderno'=>$order_no,
            'orderdate'=>date('Y-m-d'),
            'itemno'=>$food->itemno,
            'price'=>$food->price,
        ]);
        return redirect('studentorder');

    }

    //studentorder List

     function studentorders(Request $req)
    {
        $order_no=$req->session()->get('login_id');
         $orders=Booking::where('bookings.orderno',$order_no)->get();

        return view('studentorder',compact('orders'));
    }

    //admin view order list

    function adminorderlist()
    {
       $orderlist=DB::table('bookings')
                    ->join('signups','bookings.orderno','=','signups.login_id')
                    ->where('signups.login_id','=','bookings.orderno')
                    ->get();
            return view('adminorder',compact('orderlist'));
        
        
    }
}
}