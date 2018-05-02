<?php
/**
 * Created by Nhan Viet Vang JSC
 * Date: 04/26/2018
 * Time: 11:27 AM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class AssessorController extends Controller
{

    protected $url;
    public function __construct()
    {
        $this->url='http://llc.jp/api/';
    }

    function index()
    {
        $data['list_maker']=$this->list_maker();
        $data['list_car']=$this->list_car();
        $data['list_zone']=$this->getzonelp();
        $data['list_erea']=$this->geterealp();
        $data['transfer_data_list']=$this->get_transfer_info();
        return view('assessor',$data);
    }
    public function list_maker()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url.'maker/get-list');
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function list_car()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url.'car/get-list');
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function get_maker_car(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url.'car/get-by-maker?maker_id='.$request->input('maker_id'));
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return $output['data'];
    }

    public function getzonelp()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url.'zone/get-list');
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function geterealp()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url.'erea/get-list');
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function insert(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $data = [];
        $res = $client->post($this->url."seller-car/add" ,[
            'headers' => ['Content-type' => 'application/json'],
            'json' => $data,
        ]);
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return $output;
    }

    public function get_transfer_info()
    {
//        $data["step2"] = session()->get('step2');
//        $data["step1"]["erea1"] = session()->get('erea1');
//        $data["step1"]["zone1"] = session()->get('zone1');
//        $data["step3"]["date1"] = session()->get('date1');
//        $data["step3"]["month1"] = session()->get('month1');
//        $data["step3"]["year1"] = session()->get('year1');
//        $data["step3"]["check3"] = session()->get('check3');
//        $data["step3"]["date2"] = session()->get('date2');
//        $data["step3"]["month2"] = session()->get('month2');
//        $data["step3"]["year2"] = session()->get('year2');
//        $data["step3"]["check3"] = session()->get('check3');
//        $data["step3"]["date3"] = session()->get('date3');
//        $data["step3"]["month3"] = session()->get('month3');
//        $data["step3"]["year3"] = session()->get('year3');
//        $data["step3"]["check3"] = session()->get('check3');
//        $data["step2"] = 0;
        $data["step1"]["zip_code"] = '060-0042';
        $data["step1"]["erea"] = '2';
        $data["step1"]["zone"] = '2';
        return $data;
    }




}