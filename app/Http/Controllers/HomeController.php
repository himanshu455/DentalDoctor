<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image; 
use Carbon;
use File;
use Session;
use App\Patientimage;
use Auth;
use App\User;
use App\impressionshipped;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $userid = Auth::user()->id;
        $patientimage = User::with('userimage')->first();
        $prod = impressionshipped::select('impression_shipped')->where('user_id',$userid)->first();
        $proddata = explode(',',$prod);
        return view('patient.dashboard',compact('patientimage','proddata'));
    }
    

    public function savePatientImage(Request $request) {
            
             $userid = Auth::user()->id;
             $countimg = Patientimage::where('user_id',$userid)->count();
             if($countimg >=1) {
             $saveimage = Patientimage::where('user_id',$userid)->first();
                 }
                 else
                 {
                    $saveimage = new Patientimage; 
                 }


           
            
            $userid = Auth::user()->id;
            $saveimage->user_id = $userid;
            if($request->file('image1')){ 
                  $file = $request->image1;  
                  $extension = $file->getClientOriginalExtension();
                  $Image = rand(11111,99999).'_'.time().'.'.$extension;               
                  $imageRealPath  =   $file->getRealPath();
                  $thumbName      =   'thumb_'. $Image;       
                  $img = Image::make($imageRealPath); // use this if you want facade style code
                  $thumb_width = 282;
                    list($width,$height) = getimagesize($imageRealPath);
                  $thumb_height = ($thumb_width/$width) * $height;
                  $img->resize($thumb_width,$thumb_height);
                  $img->save('patientimage' . '/'. $thumbName);
                  $file->move('patientimage/', $Image);
                  $saveimage->image1 = url('').'/patientimage/'.$thumbName;
                }

         //Image 2
         
         if($request->file('image2')){ 
                  $file = $request->image2;  
                  $extension = $file->getClientOriginalExtension();
                  $Image = rand(11111,99999).'_'.time().'.'.$extension;               
                  $imageRealPath  =   $file->getRealPath();
                  $thumbName      =   'thumb_'. $Image;       
                  $img = Image::make($imageRealPath); // use this if you want facade style code
                  $thumb_width = 282;
                    list($width,$height) = getimagesize($imageRealPath);
                  $thumb_height = ($thumb_width/$width) * $height;
                  $img->resize($thumb_width,$thumb_height);
                  $img->save('patientimage' . '/'. $thumbName);
                  $file->move('patientimage/', $Image);
                  $saveimage->image2 = url('').'/patientimage/'.$thumbName;
                } 

                 //Image 3
         
         if($request->file('image3')){ 
                  $file = $request->image3;  
                  $extension = $file->getClientOriginalExtension();
                  $Image = rand(11111,99999).'_'.time().'.'.$extension;               
                  $imageRealPath  =   $file->getRealPath();
                  $thumbName      =   'thumb_'. $Image;       
                  $img = Image::make($imageRealPath); // use this if you want facade style code
                  $thumb_width = 282;
                    list($width,$height) = getimagesize($imageRealPath);
                  $thumb_height = ($thumb_width/$width) * $height;
                  $img->resize($thumb_width,$thumb_height);
                  $img->save('patientimage' . '/'. $thumbName);
                  $file->move('patientimage/', $Image);
                  $saveimage->image3 = url('').'/patientimage/'.$thumbName;
                } 

                  //Image 4
         
         if($request->file('image4')){ 
                  $file = $request->image4;  
                  $extension = $file->getClientOriginalExtension();
                  $Image = rand(11111,99999).'_'.time().'.'.$extension;               
                  $imageRealPath  =   $file->getRealPath();
                  $thumbName      =   'thumb_'. $Image;       
                  $img = Image::make($imageRealPath); // use this if you want facade style code
                  $thumb_width = 282;
                    list($width,$height) = getimagesize($imageRealPath);
                  $thumb_height = ($thumb_width/$width) * $height;
                  $img->resize($thumb_width,$thumb_height);
                  $img->save('patientimage' . '/'. $thumbName);
                  $file->move('patientimage/', $Image);
                  $saveimage->image4 = url('').'/patientimage/'.$thumbName;
                }
                 //Image 5
         
         if($request->file('image5')){ 
                  $file = $request->image5;  
                  $extension = $file->getClientOriginalExtension();
                  $Image = rand(11111,99999).'_'.time().'.'.$extension;               
                  $imageRealPath  =   $file->getRealPath();
                  $thumbName      =   'thumb_'. $Image;       
                  $img = Image::make($imageRealPath); // use this if you want facade style code
                  $thumb_width = 282;
                    list($width,$height) = getimagesize($imageRealPath);
                  $thumb_height = ($thumb_width/$width) * $height;
                  $img->resize($thumb_width,$thumb_height);
                  $img->save('patientimage' . '/'. $thumbName);
                  $file->move('patientimage/', $Image);
                  $saveimage->image5 = url('').'/patientimage/'.$thumbName;
                }
                 //Image 6
         
         if($request->file('image6')){ 
                  $file = $request->image6;  
                  $extension = $file->getClientOriginalExtension();
                  $Image = rand(11111,99999).'_'.time().'.'.$extension;               
                  $imageRealPath  =   $file->getRealPath();
                  $thumbName      =   'thumb_'. $Image;       
                  $img = Image::make($imageRealPath); // use this if you want facade style code
                  $thumb_width = 282;
                    list($width,$height) = getimagesize($imageRealPath);
                  $thumb_height = ($thumb_width/$width) * $height;
                  $img->resize($thumb_width,$thumb_height);
                  $img->save('patientimage' . '/'. $thumbName);
                  $file->move('patientimage/', $Image);
                  $saveimage->image6 = url('').'/patientimage/'.$thumbName;
                } 
                  //Image 7
         
         if($request->file('image7')){ 
                  $file = $request->image7;  
                  $extension = $file->getClientOriginalExtension();
                  $Image = rand(11111,99999).'_'.time().'.'.$extension;               
                  $imageRealPath  =   $file->getRealPath();
                  $thumbName      =   'thumb_'. $Image;       
                  $img = Image::make($imageRealPath); // use this if you want facade style code
                  $thumb_width = 282;
                    list($width,$height) = getimagesize($imageRealPath);
                  $thumb_height = ($thumb_width/$width) * $height;
                  $img->resize($thumb_width,$thumb_height);
                  $img->save('patientimage' . '/'. $thumbName);
                  $file->move('patientimage/', $Image);
                  $saveimage->image7 = url('').'/patientimage/'.$thumbName;
                }
                //Image 8
         
         if($request->file('image8')){ 
                  $file = $request->image8;  
                  $extension = $file->getClientOriginalExtension();
                  $Image = rand(11111,99999).'_'.time().'.'.$extension;               
                  $imageRealPath  =   $file->getRealPath();
                  $thumbName      =   'thumb_'. $Image;       
                  $img = Image::make($imageRealPath); // use this if you want facade style code
                  $thumb_width = 282;
                    list($width,$height) = getimagesize($imageRealPath);
                  $thumb_height = ($thumb_width/$width) * $height;
                  $img->resize($thumb_width,$thumb_height);
                  $img->save('patientimage' . '/'. $thumbName);
                  $file->move('patientimage/', $Image);
                  $saveimage->image8 = url('').'/patientimage/'.$thumbName;
                 
                }  
               $saveimage->save();
               return redirect()->route('home');                     
    }

          public function saveImpressionShipped(Request $request) {
                     $userid = Auth::user()->id;
                     $countstatus = impressionshipped::where('user_id',$userid)->count();
                     if($countstatus >=1) {
                         $savepro = impressionshipped::where('user_id',$userid)->first();
                     }
                     else
                     {
                         $savepro = new impressionshipped; 
                     }
                        $imp =  $request->impressionshipped;
                        $arrayimp = implode(',',$imp);
                        $savepro->impression_shipped = $arrayimp;
                        $savepro->user_id = $userid;
                        $savepro->save();
                        return redirect()->route('home');    


                       
                       
           }  


}
