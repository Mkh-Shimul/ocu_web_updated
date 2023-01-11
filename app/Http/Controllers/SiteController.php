<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\frontpage_content;
use Illuminate\Support\Facades\Mail;
use App\Models\Media;

class SiteController extends Controller
{
    public function index()
    {
        // $fpc = frontpage_content::all();
        // $fpc = DB::table('home_banner1s')->first();
        // dd($fpc);
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }

    public function service()
    {
        return view('site.service');
    }

    public function serviceSingle($id)
    {
        return view('site.service_single');

        // $service_single = DB::table('services')
        //     ->join('service_categories', 'services.category_id', '=', 'service_categories.id')
        //     ->groupBy('services.category_id')
        //     ->get();
        // $service_single = Service::findOrFail($id);
        // $categoryWiseService = DB::table('services')
        //                 ->where('category_id', '=', $service_single)
        //                 ->get();
        // // dd($categoryWiseService);
        // // $service_category = ServiceCategory::where('id', $service_single->category_id)->get();
        // // $service_category = DB::table('services')
        // //     // ->join('service_categories', 'services.id', '=', 'service_categories.id')
        // //     // ->select('services.*')
        // //     ->where('services.category_id', '=', 'service_categories.id')
        // //     // ->groupBy('service_categories.id')
        // //     ->get();
        // // dd($service_category);
        // return view('site.service_single', compact('service_single', 'categoryWiseService'));
    }

    public function solution($id)
    {
        // $solution = Service::findOrFail($id);
        return view('site.solution');
    }

    public function project()
    {
        return view('site.project');
    }

    public function mediaEvents()
    {
        $data = Media::all();
        return view('site.mediaEvents', compact('data'));
    }

    public function customer()
    {
        return view('site.customer');
    }

    public function career()
    {
        return view('site.career');
    }

    public function careerOpp()
    {
        return view('site.careerOpp');
    }

    public function oculife()
    {
        return view('site.ocuLife');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function ami()
    {
        return view('site.solutions.ami');
    }

    public function mdm()
    {
        return view('site.solutions.mdm');
    }

    public function mobileApps()
    {
        return view('site.solutions.mApps');
    }

    public function dataCenter()
    {
        return view('site.solutions.dataCenter');
    }


    public function network()
    {
        return view('site.solutions.network');
    }

    public function categoryOne()
    {
        return view('site.category1.S&O');
    }

    public function bespokern()
    {
        return view('site.category1.bespoken');
    }

    public function netInfra()
    {
        return view('site.category1.networkInfrastructre');
    }

    public function sendMail(Request $r)
    {
        $data['from'] = 'hr_automail@oculintech.com';
        $data['to'] = 'kamran.hasan@oculintech.com';
        $data['subject'] = 'New message from '.$r->subject;
        $data['message'] = 'A new message is generated from oculin website. Below is the details. <br/><br/><b>Name</b>: '.$r->username.'<br/><b>Person Email</b>: '.$r->email.'<br/><b>Contact Number</b>: '.$r->phone.'<br/><br/><br/><b>Message</b>: '.$r->message;
        Mail::send([], [], function($message) use ($data) {
            $message->from($data['from']);
            $message->to($data['to']);
            $message->subject($data['subject']);
            $message->setBody($data['message'], 'text/html');
        });
        return redirect('/contact')->with('success','Message Sent successfully! We will get in touch with you soon. Thank you.');
    }


    public function categoryTwo()
    {
        return view('site.category2.dataCenter');
    }

    public function cloudData()
    {
        return view('site.category2.cloud');
    }

    public function bigData()
    {
        return view('site.category2.bigData');
    }



    public function categoryThree()
    {
        return view('site.category3.technology');
    }

    public function oracle()
    {
        return view('site.category3.oracle');
    }

    public function sap()
    {
        return view('site.category3.sap');
    }

}
