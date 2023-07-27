<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lunch;
use Illuminate\Support\Facades\File;

class LunchController extends Controller
{
    //
    public function lunch(){
        return view('Back.addlunch');
        
    }
    public function addlunchitem(Request $data){
        // dd($data->all());

        $data->validate([
            'lunchfoobimg' => 'required|mimes:png,jpg,jpeg,gif,bmp,tiff,webp',
        ]);

        $imageName = "";

        if ($image = $data->file('lunchfoobimg')) { // Fixed the variable name here
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension(); // Fixed the method name here
            $image->move('images/lunch', $imageName);
        }

        $lunchfood = new Lunch();

        

        $lunchfood->lunchname = $data->lunchname;
        $lunchfood->lunchsummary = $data->lunchsummary;
        $lunchfood->price = $data->price;
        $lunchfood->lunchstatus = $data->lunchstatus;
        $lunchfood->lunchfoobimg = $imageName;
        $lunchfood->save();

        return redirect()->route('managelunch');

    }



    public function managelunch(){
        $lunchfood = Lunch::all();
        return view('Back.managelunch',compact('lunchfood'));
    }

    public function activelunch($id){
        $lunchfood= Lunch::find($id);
        $lunchfood->lunchstatus = 1;
        $lunchfood->save();

        return redirect()->route('managelunch');
        

    }
    public function inactivelunch($id){
        $lunchfood= Lunch::find($id);
        $lunchfood->lunchstatus = 0;
        $lunchfood->save();

        return redirect()->route('managelunch');


    }

    // for the delete operation 
    public function deletelunch($id){
        $lunchfood= Lunch::find($id);
        $deleteold_images = 'images/lunch/'.  $lunchfood->lunchfoobimg;
        if(file_exists($deleteold_images)){
            File::delete($deleteold_images);
        }
        $lunchfood->delete();
        return redirect()->route('managelunch');
    }
}
