<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class EstimateController extends Controller
{
    protected $url;
    public function __construct()
    {
        $this->url= URLAPI;
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

    public function estimate()
   	{
   		$data["list_zones"] = self::getzonelp();
   		$data["list_ereas"] = self::geterealp();
        $data["list_makers"] = self::getmaker();
        $data["list_cars"] = self::getcar();
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
        try {
        $client = new \GuzzleHttp\Client();
        $image = $p_request->file('license_drive');
        $image1 = $p_request->file('image1');
        $image2 = $p_request->file('image2');
        $image3 = $p_request->file('image3');
        $image4 = $p_request->file('image4');
        $image5 = $p_request->file('image5');
        $image6 = $p_request->file('image6');
        $image7 = $p_request->file('image7');
        $image8 = $p_request->file('image8');
        $image9 = $p_request->file('image9');
        $image10 = $p_request->file('image10');
        $image11 = $p_request->file('image11');
        $image12 = $p_request->file('image12');
        $image13 = $p_request->file('image13');
        $image14 = $p_request->file('image14');
        $image15 = $p_request->file('image15');
        $image16 = $p_request->file('image16');
        if($image == '')
        {
            $fopen = '';
        }
        else
        {
            $fopen = fopen($image->getPathname(),'r');
        }
        if($image1 == '')
        {
            $fopen1 = '';
        }
        else
        {
            $fopen1 = fopen($image1->getPathname(),'r');
        }
        if($image2 == '')
        {
            $fopen2 = '';
        }
        else
        {
        $fopen2 = fopen($image2->getPathname(),'r');
        }
        if($image3 == '')
        {
            $fopen3 = '';
        }
        else
        {
        $fopen3 = fopen($image3->getPathname(),'r');
        }
        if($image4 == '')
        {
            $fopen4 = '';
        }
        else
        {
        $fopen4 = fopen($image4->getPathname(),'r');
        }
        if($image5 == '')
        {
            $fopen5 = '';
        }
        else
        {
        $fopen5 = fopen($image5->getPathname(),'r');
        }
        if($image6 == '')
        {
            $fopen6 = '';
        }
        else
        {
        $fopen6 = fopen($image6->getPathname(),'r');
        }
        if($image7 == '')
        {
            $fopen7 = '';
        }
        else
        {
        $fopen7 = fopen($image7->getPathname(),'r');
        }
        if($image8 == '')
        {
            $fopen8 = '';
        }
        else
        {
        $fopen8 = fopen($image8->getPathname(),'r');
        }
        if($image9 == '')
        {
            $fopen9 = '';
        }
        else
        {
        $fopen9 = fopen($image9->getPathname(),'r');
        }
        if($image10 == '')
        {
            $fopen10 = '';
        }
        else
        {
        $fopen10 = fopen($image10->getPathname(),'r');
        }
        if($image11 == '')
        {
            $fopen11 = '';
        }
        else
        {
        $fopen11 = fopen($image11->getPathname(),'r');
        }
        if($image12 == '')
        {
            $fopen12 = '';
        }
        else
        {
        $fopen12 = fopen($image12->getPathname(),'r');
        }
        if($image13 == '')
        {
            $fopen13 = '';
        }
        else
        {
        $fopen13 = fopen($image13->getPathname(),'r');
        }
        if($image14 == '')
        {
            $fopen14 = '';
        }
        else
        {
        $fopen14 = fopen($image14->getPathname(),'r');
        }
        if($image15 == '')
        {
            $fopen15 = '';
        }
        else
        {
        $fopen15 = fopen($image15->getPathname(),'r');
        }
        if($image16 == '')
        {
            $fopen16 = '';
        }
        else
        {
        $fopen16 = fopen($image16->getPathname(),'r');
        }
        $body = [
            'seller_zip_code' => $p_request->input('zip_code2'),
            'seller_erea_id' => $p_request->input('erea2'),
            'mileage' => $p_request->input('mileage'),
            'seller_name' => session()->get('name'),
            'seller_phone1' => session()->get('phone'),
            'seller_email1' => session()->get('email'),
            'car_id' => session()->get('cars'),
            'infor_car_year' => session()->get('year'),
            'order_asking_price' => $p_request->input('minimum_price'),
            'infor_history' => $p_request->input('history'),
            'infor_accident_repair' => $p_request->input('accident_repair'),
            'infor_condition' => $p_request->input('status'),
            'infor_state_interior' => $p_request->input('condition'),
            'infor_pr_points' => $p_request->input('info_diff'),
            'order_deadline' => $p_request->input('deadline')
        ];
        $res = $client->post($this->url."seller-car/add" ,[
            'query' => $body,
            'multipart' => [
                [
                    'name' => 'images[]',
                    'contents' => $fopen,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen1,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen2,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen3,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen4,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen5,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen6,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen7,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen8,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen9,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen10,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen11,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen12,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen13,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen14,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen15,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ],
                [
                    'name' => 'images[]',
                    'contents' => $fopen16,
                    'headers'  => [ 'Content-Type' => 'application/octet-stream']
                ]
            ]
        ]);
        return json_decode($res->getBody(), true);
        }
        catch(\GuzzleHttp\Exception\ServerException $e){
            $response = $e->getResponse()->getBody();
           return $response;
        }
    }

    public function destroy_info()
    {
        session()->flush();
    }
}
