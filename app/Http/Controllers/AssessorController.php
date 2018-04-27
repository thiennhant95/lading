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
        $data['list_car']=$this->list_maker();
        return view('assessor',$data);
    }
    public function list_maker()
    {
        $url=$this->url.'maker/get-list';
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept:application/json, Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $output=curl_exec($ch);
        curl_close($ch);
        return json_decode($output);
    }

    public function list_car()
    {
        $url=$this->url.'car/get-list';
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept:application/json, Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $output=curl_exec($ch);
        curl_close($ch);
        return json_decode($output);
    }

    public function lista()
    {
        $url=$this->url.'get_list_maker';
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept:application/json, Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $output=curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    public function get_maker_car()
    {
        $url=$this->url.'car/get-by-maker';
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept:application/json, Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $output=curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    //function test
    public function insert(Request $request)
    {
            $post = array(
                'name' => $request->company_name,
                'email1' => $request->email,
                'phone'   => '2'
            );

            $url = "http://192.168.1.16/api/seller/add";
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept:application/json, Content-Type:application/json']);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            $output=curl_exec($ch);
            curl_close($ch);
            print_r($output);
    }




}