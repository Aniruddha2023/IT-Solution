<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('frontend.home',compact('services'));
    }

    public function viewService($id){
        $service = Service::find($id);
        return view('frontend.view_service', compact('service'));
    }
    public function showAbout(){
        return view('frontend.about');
    }
    public function showService(){
        $services = Service::all();
        return view('frontend.service',compact('services'));
    }
    public function showContact(){
        return view('frontend.contact');
    }
}
