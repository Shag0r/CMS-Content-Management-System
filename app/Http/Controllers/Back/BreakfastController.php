<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BreakFast;
use Illuminate\Support\Facades\File;

class BreakfastController extends Controller
{
    //
    public function index(){
        return view('Back.addbreak');
    }
    public function addbreakfast(Request $data){
        $data->validate([
            'breakfoobimg' => 'required|mimes:png,jpg,jpeg,gif,bmp,tiff,webp',
        ]);

        $imageName = "";

        if ($image = $data->file('breakfoobimg')) { // Fixed the variable name here
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension(); // Fixed the method name here
            $image->move('images/breakfast', $imageName);
        }

        $food = new BreakFast();

        $food->breakfastname = $data->breakfastname;
        $food->breakfastsummary = $data->breakfastsummary;
        $food->price = $data->price;
        $food->breakstatus = $data->breakstatus;
        $food->breakfoobimg = $imageName;
        $food->save();

        // Return a response or redirect as needed.
        // For example, you can redirect back with a success message.
        return redirect()->route('managebreakfast')->with('success', 'Breakfast item added successfully.');
}

    public function managebreakfast(){
        $foods=  Breakfast::all();
        // dd($food);
        return view('Back.managebreak', compact('foods'));
    }
    // for actyive the product 
    public function activefood($id){
        $food = Breakfast::find($id);
        $food->breakstatus = 1;
        $food->save();
        return redirect()->route('managebreakfast');

    }
    // for the inactive 
    public function inactivefood($id){
        $food= Breakfast::find($id);
        $food->breakstatus = 0 ;
        $food->save();
        return redirect()->route('managebreakfast');

    }
    // for the delete item 
    public function deletebreak($id){
        $food = Breakfast::find($id);
        $deleteold_images = 'images/breakfast/'.  $food->breakfoobimg;
        if(file_exists($deleteold_images)){
            File::delete($deleteold_images);
        }
        $food->delete();
        return redirect()->route('managebreakfast');

    }
    // now code for update
    public function updatebreak($id){
        $food = Breakfast::find($id);
         return view('Back.editbreak',compact('food'));
    }
    public function updatesavebreak(Request $request, $id) {
        $food = Breakfast::find($id);
    
        $request->validate([
            'breakfoobimg' => 'required|mimes:png,jpg,jpeg,gif,bmp,tiff,webp',
        ]);
    
        $food->breakfastname = $request->breakfastname;
        $food->breakfastsummary = $request->breakfastsummary;
        $food->price = $request->price;
        $food->breakstatus = $request->breakstatus;
    
        if ($request->hasfile('breakfoobimg')) {
            $oldPhoto = public_path('images/breakfast/' . $food->breakfoobimg);
            if (file_exists($oldPhoto)) {
                unlink($oldPhoto);
            }
            $image = $request->file('breakfoobimg');
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('images/breakfast/', $imageName);
            $food->breakfoobimg = $imageName;
        }
    
        $food->save();
        return redirect()->route('managebreakfast');

        // dd($request->all());
    }
    




}



