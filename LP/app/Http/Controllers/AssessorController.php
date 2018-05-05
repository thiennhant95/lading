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
        if(session()->has('name') === false && session()->has('phone') === false)
        {
            redirect('user');
        }
        $this->url=URLAPI;
    }

    function index(Request $p_request)
    {
        #set session test
//        $p_request->session()->put('step2','1');
//        $p_request->session()->put('zip_code1','060-0000');
//        $p_request->session()->put('erea1','1');
//        $p_request->session()->put('zone1','1');
//        $p_request->session()->put('date1','10');
//        $p_request->session()->put('month1','10');
//        $p_request->session()->put('year1','2018');
//        $p_request->session()->put('check1','1');
//        $p_request->session()->put('date2','05');
//        $p_request->session()->put('month2','05');
//        $p_request->session()->put('year2','2018');
//        $p_request->session()->put('check2','2');
//        $p_request->session()->put('date3','06');
//        $p_request->session()->put('month3','06');
//        $p_request->session()->put('year3','2018');
//        $p_request->session()->put('check3','2');

        $data['list_maker']=$this->list_maker();
        $data['list_car']=$this->list_car();
        $data['list_zone']=$this->getzonelp();
        $data['list_erea']=$this->geterealp();
        $data['transfer_data_list']=$this->get_transfer_info();
        $data['list_equipment']=$this->getEquipment();
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

    public function getEquipment()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url.'equipment/get-list');
        $output['status']=$res->getStatusCode();
        $output['type']= $res->getHeaderLine('content-type');
        $output['data']=$res->getBody();
        return json_decode($output['data']);
    }

    public function insert(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        try {
            $data           =       $request->input();
            $image1         =       $request->file('images1');
            $image2         =       $request->file('images2');
            $image3         =       $request->file('images3');
            $image4         =       $request->file('images4');
            $image5         =       $request->file('images5');
            $image6         =       $request->file('images6');
            $image7         =       $request->file('images7');
            $image8         =       $request->file('images8');
            $image9         =       $request->file('images9');
            $image10        =       $request->file('images10');
            $image11        =       $request->file('images11');
            $image12        =       $request->file('images12');
            $image13        =       $request->file('images13');
            $image14        =       $request->file('images14');
            $image15        =       $request->file('images15');
            $image16        =       $request->file('images16');
            $fopen1         =  $image1!=null ?fopen($image1->getPathname(),'r'):'';
            $fopen2         =  $image2!=null ?fopen($image2->getPathname(),'r'):'';
            $fopen3         =  $image3!=null ?fopen($image3->getPathname(),'r'):'';
            $fopen4         =  $image4!=null ?fopen($image4->getPathname(),'r'):'';
            $fopen5         =  $image5!=null ?fopen($image5->getPathname(),'r'):'';
            $fopen6         =  $image6!=null ?fopen($image6->getPathname(),'r'):'';
            $fopen7         =  $image7!=null ?fopen($image7->getPathname(),'r'):'';
            $fopen8         =  $image8!=null ?fopen($image8->getPathname(),'r'):'';
            $fopen9         =  $image9!=null ?fopen($image9->getPathname(),'r'):'';
            $fopen10        =  $image10!=null ?fopen($image10->getPathname(),'r'):'';
            $fopen11        =  $image11!=null ?fopen($image11->getPathname(),'r'):'';
            $fopen12        =  $image12!=null ?fopen($image12->getPathname(),'r'):'';
            $fopen13        =  $image13!=null ?fopen($image13->getPathname(),'r'):'';
            $fopen14        =  $image14!=null ?fopen($image14->getPathname(),'r'):'';
            $fopen15        =  $image15!=null ?fopen($image15->getPathname(),'r'):'';
            $fopen16        =  $image16!=null ?fopen($image16->getPathname(),'r'):'';

            $body = [
                'seller_name' => $data['seller_name'],
                'seller_zip_code' => $data['seller_zip_code'],
                'seller_erea_id' => $data['seller_erea_id'],
                'seller_address' => $data['seller_address'],
                'seller_municipality' => $data['seller_municipality'],
                'seller_phone1' => $data['seller_phone1'],
                'seller_email1' => $data['seller_email1'],
                'car_id' => $data['car_id'],
                'infor_car_name' => $data['info_car_name'],
                'infor_car_year' => $data['infor_car_year'],
                'infor_about_check' => $data['infor_about_check'],
                'infor_grade' => $data['infor_grade'],
                'infor_mileage' => $data['infor_mileage'],
                'infor_displacement' => $data['infor_displacement'],
                'infor_chassis_number' => $data['infor_chassis_number'],
                'driving_condition_remark' => $data['driving_remark'],
                'infor_smoking_status' => $data['infor_smoking_status'],
                'infor_drive_system' => $data['infor_drive_system'],
                'infor_engine_model' => $data['infor_engine_model'],
                'infor_model_number' => $data['infor_model_number'],
                'infor_classification' => $data['infor_classification'],
                'infor_transmission' => $data['infor_transmission'],
                'infor_hand' => $data['infor_hand'],
                'infor_number_passenger' => $data['infor_number_passenger'],
                'infor_fuel' => $data['infor_fuel'],
                'infor_accident_repair' => $data['infor_accident_repair'],
                'infor_vehicle_number' => $data['infor_vehicle_number'],
                'recycling_fee' => $data['recycling_fee'],
                'infor_written_guarantee' => $data['infor_written_guarantee'],
                'infor_record_book' => $data['infor_record_book'],
                'infor_history' => $data['infor_history'],
                'infor_air_condition' => $data['infor_air_condition'],
                'exterior_condition' => $data['exterior_condition'],
                'equipment_remark' => $data['equipment_remark'],
                'infor_state_interior' => $data['infor_state_interior'],
                'assessment_synthetic' => $data['assessment_synthetic'],
                'assessment_exterior' => $data['assessment_exterior'],
                'assessment_interior' => $data['assessment_interior'],
                'assessment_comment' => $data['assessment_comment'],
                'order_asking_price' => $data['minimum_recommend_price'],
                'order_deadline' => $data['end_desired_date'],
                'infor_equipment_id'=>$data['infor_equipment_id'],
                'assessment_advance_method'=>session()->get('step2'),
                'retrieval_first_date'=>session()->get('year1').'-'.session()->get('month1').'-'.session()->get('date1'),
                'retrieval_second_date'=>session()->get('year2').'-'.session()->get('month2').'-'.session()->get('date2'),
                'retrieval_third_date'=>session()->get('year3').'-'.session()->get('month3').'-'.session()->get('date3'),
                'retrieval_first_date_check'=>session()->get('check1'),
                'retrieval_second_date_check'=>session()->get('check2'),
                'retrieval_third_date_check'=>session()->get('check3'),
            ];
//            print_r($body);
//            exit();
            $res = $client->post($this->url . "seller-car/add", [
                'query' => $body,
                'multipart' => [
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
                    ],
                ]
            ]);
            return json_decode($res->getBody(),true);
        }
        catch(\GuzzleHttp\Exception\ServerException $e){
            $response = $e->getResponse()->getBody();
            return $response;
        }
    }

    public function get_transfer_info()
    {

        $data["step2"] = session()->get('step2');
        $data["step1"]["erea"] = session()->get('erea1');
        $data["step1"]["zone"] = session()->get('zone1');
        $data["step1"]["zip_code"] = session()->get('zip_code1');
        $data["step3"]["date1"] = session()->get('date1');
        $data["step3"]["month1"] = session()->get('month1');
        $data["step3"]["year1"] = session()->get('year1');
        $data["step3"]["check3"] = session()->get('check3');
        $data["step3"]["date2"] = session()->get('date2');
        $data["step3"]["month2"] = session()->get('month2');
        $data["step3"]["year2"] = session()->get('year2');
        $data["step3"]["check3"] = session()->get('check3');
        $data["step3"]["date3"] = session()->get('date3');
        $data["step3"]["month3"] = session()->get('month3');
        $data["step3"]["year3"] = session()->get('year3');
        $data["step3"]["check3"] = session()->get('check3');
        return $data;
    }

    public function destroy_session(Request $request)
    {
        $request->session()->flush();
    }

}
