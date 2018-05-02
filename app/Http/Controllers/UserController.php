<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    protected $url;
    public function __construct()
    {
        $this->url='http://auction-llc.jp/api/';
    }
    public function getzone()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url."zone/get-list");
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function getmaker()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url."maker/get-list");
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function getcar()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url."car/get-list");
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function user(Request $request)
    {
        $data["list_zones"] = self::getzone();
        $data["list_makers"] = self::getmaker();
        $data["list_cars"] = self::getcar();
        return view('user',$data);
    }

    public function setinfouser(Request $p_request)
    {
        $data = array();
        $p_request->session()->put('makers',$p_request->input('makers'));
        $p_request->session()->put('cars',$p_request->input('cars'));
        $p_request->session()->put('phone',$p_request->input('phone'));
        $p_request->session()->put('name',$p_request->input('name'));
        $p_request->session()->put('year',$p_request->input('year'));
        $p_request->session()->put('mileage',$p_request->input('mileage'));
        $p_request->session()->put('zone',$p_request->input('zone'));
        $p_request->session()->put('email',$p_request->input('email'));
        $data["seller"]["makers"] = session()->get('makers');
        $data["seller"]["cars"] = session()->get('cars');
        $data["seller"]["phone"] = session()->get('phone');
        $data["seller"]["name"] = session()->get('name');
        $data["seller"]["year"] = session()->get('year');
        $data["seller"]["mileage"] = session()->get('mileage');
        $data["seller"]["zone"] = session()->get('zone');
        $data["seller"]["email"] = session()->get('email');
        return json_encode($data);
    } 
}
