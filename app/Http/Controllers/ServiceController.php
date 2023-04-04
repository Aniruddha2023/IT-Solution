<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Image;

class ServiceController extends Controller
{
    public function addService(){
        return view('backend.service.add-service');
    }

    public function storeService(Request $request){
        // dd($request);
        $request->validate([
            "service_title" => 'required|min:2',
            "service_description" => 'required|min:2',
            "service_long_description" => 'required|min:2',
        ]);

        $img = $request->file('service_image');
        // dd($img);
        $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        $resizedLandingImg = Image::make($img)->resize(50,50)->save('images/service/landing/' .$name_gen);
        $resizedpageImge = Image::make($img)->resize(500,500)->save('images/service/page/' .$name_gen);
        $landige = 'images/service/landing/'. $name_gen;
        $page = 'images/service/page/' .$name_gen;

        Service::create([
            'service_title' => $request->service_title,
            'service_description' => $request->service_description,
            'service_long_description' => $request->service_long_description,
            'service_landing_image' => $landige,
            'service_page_image' => $page
        ]);

        return redirect()->route('all.services');
    }

    public function allServices(){
        $services = Service::all();
        return view('backend.service.all-services', compact('services'));
    }

    public function editService($id){
        $service = Service::find($id);
        return view('backend.service.edit-service',compact('service'));
    }

    public function updateService(Request $request,$id){
        $request->validate([
            "service_title" => 'required|min:2',
            "service_description" => 'required|min:2',
            "service_long_description" => 'required|min:2',
        ]);

        $data = Service::find($id);

        if($request->hasFile('service_image')){
            $img = $request->file('service_image');
            // dd($img);
            $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            $resizedLandingImg = Image::make($img)->resize(50,50)->save('images/service/landing/' .$name_gen);
            $resizedpageImge = Image::make($img)->resize(500,500)->save('images/service/page/' .$name_gen);
            $landige = 'images/service/landing/'. $name_gen;
            $page = 'images/service/page/' .$name_gen;

            $data->service_title = $request->service_title;
            $data->service_description = $request->service_description;
            $data->service_long_description = $request->service_long_description;
            $data->service_landing_image = $landige;
            $data->service_page_image = $page;
            $data->save();
        }else{
            $data->service_title = $request->service_title;
            $data->service_description = $request->service_description;
            $data->service_long_description = $request->service_long_description;
            $data->save();
        }
        return redirect()->route('all.services');
    }
    public function deleteService($id){
        Service::find($id)->delete();
        return redirect()->back();
    
    }
}
