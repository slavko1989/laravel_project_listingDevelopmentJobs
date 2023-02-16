<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    public function index(){
        return view('listings.index',[
            'list' => Listing::latest()->filter(request(['tag','search']))->simplePaginate(3)
        ]);
    }

    public function show(Listing $list){
         return view('listings.show',[
            'list'=> $list
        ]);
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formValid = $request->validate([
            'title'=>'required',
            'company'=>'required',
            'location'=>'required',
            'website'=>'required',
            'email'=>'required',
            'tags'=>'required',
            'descripton'=>'required',
            'logo'=>'required|mimes:jpg,png,gif,jpeg,svg'
        ]);

        if($request->hasFile('logo')){
            $formValid['logo'] = $request->file('logo')->store('logos','public');
        }

        Listing::create($formValid);
        
        return redirect('/')->with('message','Job created successfully');

    }

    public function edit(Listing $listing){
            return view('listings.edit',['listing'=>$listing]);
    }

    public function update(Request $request, Listing $listing){

          $formValid = $request->validate([
            'title'=>'required',
            'company'=>'required',
            'location'=>'required',
            'website'=>'required',
            'email'=>'required',
            'tags'=>'required',
            'descripton'=>'required',
            'logo'=>'mimes:jpg,png,gif,jpeg,svg'
        ]);

        if($request->hasFile('logo')){
            $formValid['logo'] = $request->file('logo')->store('logos','public');
        }

        $listing->update($formValid);
        
        return back()->with('message','Job updated successfully');

    }

    public function destroy(Listing $listing){

        $listing->delete();
        return redirect('/')->with('message','Job delete successfully');

    }

}

