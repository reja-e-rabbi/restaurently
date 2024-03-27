<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    function Index() {
        $data['title'] = 'Home';
        $data['benefit'] = DB::select("select id,type,subject,content from servises where type ='benefit' limit 6");
        $data['testimonil'] = DB::select("select id,type,name,user_img_link,profession,country,dilog,img from testimonil where type = 'testimonil' limit 8");
        $data['gallery'] = DB::select("select id,type,name,img from gallery where type='gallery' limit 8");
        $data['chefs'] = DB::select("select id,type,name,img,twitter,facebook,insta,linkedin from chefs order by id asc limit 6");
        $data['menu'] = DB::select("select id,type,name,img,twitter,facebook,insta,linkedin from chefs order by id asc limit 6");
        $data['landing'] = DB::select("select id,type,subject,content from landing_page order by id asc limit 17");
        $data['menu'] = DB::select("select id,name,type,price,summery,detels,img from menu where special = 'home' limit 12");
        $data['special'] = DB::select("select id,name,price,type,title,special,summery,detels,img from menu where special = 'special' limit 6");
        $data['about'] = DB::select("select id,sl,title,summery,detels,img,shows from blog where shows = 'home' limit 1");
        
        //dd($data);
        return view('welcome', $data);
    }
}
