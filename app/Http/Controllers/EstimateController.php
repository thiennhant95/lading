<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimateController extends Controller
{
    protected $url;
    public function __construct()
    {
        $this->url='http://auction-llc.jp/api/';
    }
	public function getzonelp()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url."zone/get-list");
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function geterealp()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url."erea/get-list");
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }


    public function estimate()
   	{
   		$data["list_zones"] = self::getzonelp();
   		$data["list_ereas"] = self::geterealp();
   		return view('estimate',$data);
   	}

    public function transfer_info(Request $p_request)
    {
    	$p_request->session()->put('step2',$p_request->input('step2'));
    	$p_request->session()->put('zip_code1',$p_request->input('zip_code1'));
        $p_request->session()->put('erea1',$p_request->input('erea1'));
        $p_request->session()->put('zone1',$p_request->input('zone1'));
        $p_request->session()->put('date1',$p_request->input('date1'));
        $p_request->session()->put('month1',$p_request->input('month1'));
        $p_request->session()->put('year1',$p_request->input('year1'));
        $p_request->session()->put('check1',$p_request->input('check1'));
        $p_request->session()->put('date2',$p_request->input('date2'));
        $p_request->session()->put('month2',$p_request->input('month2'));
        $p_request->session()->put('year2',$p_request->input('year2'));
        $p_request->session()->put('check2',$p_request->input('check2'));
        $p_request->session()->put('date3',$p_request->input('date3'));
        $p_request->session()->put('month3',$p_request->input('month3'));
        $p_request->session()->put('year3',$p_request->input('year3'));
        $p_request->session()->put('check3',$p_request->input('check3'));
    }

    public function seller_add(Request $p_request)
    {
        $client = new \GuzzleHttp\Client();
        $body = [
                'seller_zip_code' => $p_request->input('zip_code2'),
                'seller_erea_id' => $p_request->input('erea2'),
                'mileage' => $p_request->input('mileage'),
                'seller_name' => session()->get('name'),
                'seller_phone1' => session()->get('phone'),
                'seller_email1' => session()->get('email'),
                'car_id' => session()->get('cars'),
                'minimum_recommend_price' => $p_request->input('minimum_price'),
                'infor_history' => $p_request->input('history'),
                'infor_accident_repair' => $p_request->input('accident_repair')
                ];
        $res = $client->post($this->url."seller-car/add" ,[
            'headers' => ['Content-type' => 'application/json'],
            'json' => $body, 
        ]);
    }
}
