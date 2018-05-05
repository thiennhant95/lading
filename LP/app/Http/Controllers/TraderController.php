<?php
/**
 * Created by Nhan Viet Vang JSC
 * Date: 04/26/2018
 * Time: 11:27 AM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TraderController extends Controller
{
    protected $url;
    public function __construct()
    {
        $this->url=URLAPI;
    }

    public function insert(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        try {
            $data = $request->input();
            if(session()->has('phone_company') === true && session()->has('email_company') === true)
            {
                if (session()->get('phone_company')== $data['phone'] && session()->get('email_company')== $data['email'] )
                {
                    return json_encode(['status' => 2]);
                }
            }
            $res = $client->post($this->url . "trader/add", [
                'headers' => ['Content-type' => 'application/json'],
                'json' => $data,
            ]);
            $output['status'] = $res->getStatusCode();
            $output['type'] = $res->getHeaderLine('content-type');
            return json_decode($res->getBody(), true);
        }
        catch(\GuzzleHttp\Exception\ServerException $e){
            $response = $e->getResponse()->getBody();
            return $response;
        }
    }

    public function session_data(Request $request)
    {
        $data['name'] = $request->get('name');
        $data['person_in_charge'] = $request->get('person_in_charge');
        $data['phone'] = $request->get('phone');
        $data['email'] = $request->get('email');
        $request->session()->put('name_company',$data['name']);
        $request->session()->put('person_in_charge',$data['person_in_charge']);
        $request->session()->put('phone_company',$data['phone']);
        $request->session()->put('email_company',$data['email']);
    }
}
?>