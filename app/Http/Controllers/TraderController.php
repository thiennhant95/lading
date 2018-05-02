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
        $this->url='http://llc.jp/api/';
    }

    public function insert(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $data = $request->input();
        $res = $client->post($this->url."trader/add" ,[
            'headers' => ['Content-type' => 'application/json'],
            'json' => $data,
        ]);
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return $output;
    }
}
?>