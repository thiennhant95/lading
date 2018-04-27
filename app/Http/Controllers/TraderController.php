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
        $data = $request->input();
        $url = $this->url."trader/add";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept:application/json, Content-Type:application/json']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        $output=curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}
?>