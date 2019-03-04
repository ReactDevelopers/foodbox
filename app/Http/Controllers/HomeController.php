<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Slider;
use App\Admin\NewsLetter;
use App\Admin\Banner;
use App\Admin\About;
use App\Admin\AboutUsBanner;
use App\Admin\HowItWorks;
use App\Admin\StaticContent;
use App\Admin\FAQ;
use App\Admin\ContactPersonnel;
use App\Admin\Settings;
use App\User;
use Hash;
use Auth;
use App\Model\Contact;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
{

	/**
    * Home Page View
    */
    public function index()
    {
     //    dd('cddc');
    	$data['page_title'] = 'Welcome To 360 Reference';
     //    if(\Auth::check()){
     //        $id = Auth::user()->id;
     //        $data['user'] = individual_master($id);
     //        $data['user_id'] = $id;
     //    }
     //    //$data['if_paid'] = Auth::user()->paid;
     //    $data['banner'] = Slider::select(['banner_image','title','description'])->get()->toArray();
       
     //    $data['news'] = NewsLetter::select(['title','description','image',\DB::Raw('DATE_FORMAT(added_date, "%M %d, %Y") AS date ')])->orderBy('id','DESC')->get()->toArray();

     //    $data['archive'] = '';
        
        return view('front/layouts/home')->with($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products(Request $request)
    {
        $selectedNav = 'users';
        $offset = $request->has('offset') ? $request->offset : 0;
        $limit = $request->has('limit') ? $request->limit : 4;
        $search = $request->has('textsearch') ? ($request->textsearch) : null;
        $dataOrder = getPrefix().'products.product_name ASC';
        $postData = $request->all();
        // $_SESSION['STUDENT_MANAGEMENT_FILTERS'] = $postData;

        // unset($_SESSION['STUDENT_MANAGEMENT_FILTERS']['_token']);
        // unset($_SESSION['STUDENT_MANAGEMENT_FILTERS']['user_type']);

        switch (@$postData['dataOrder']) {
            case '1':
                $dataOrder = getPrefix().'products.product_name ASC';
                break;
            
            case '2':
                $dataOrder = getPrefix().'products.product_name DESC';
                break;

            case '3':
                $dataOrder = getPrefix().'products.created_at DESC';
                break;

            case '4':
                $dataOrder = getPrefix().'products.created_at ASC';
                break;
        }
        
        $query = \DB::table('products')
                                ->select(\DB::raw('*'))
                                ->groupBy('products.id')
                                // ->whereRaw('c_parents.student_id > "0"')
                                // ->toSql();
                                ->orderByRaw(\DB::raw($dataOrder))
                                ->skip($offset)
                                ->take($limit);
                                // dd($query->get());
                            // $query->when(!empty($postData['gender']),function($q) use ($postData) {
                            //     $q->whereIn('students.gender',$postData['gender']);
                            // });
                            // $query->when(!empty($postData['class']),function($q) use ($postData) {
                            //     $q->whereIn('classrooms.id',$postData['class']);
                            // });
                            // $query->when(!empty($postData['unassigned']) && empty($postData['assigned']),function($q) use ($postData) {
                            //     $q->doesntHave('studentClass');
                            // });
                            // $query->when(!empty($postData['assigned']),function($q) use ($postData) {
                            //     $q->whereHas('studentClass');
                            // });
                            // $query->when(!empty($postData['assigned']) && !empty($postData['unassigned']),function($q) use ($postData) {
                            //     $q->whereHas('studentClass');
                            // });
                            // $query->when(!empty($postData['unlinked']) && empty($postData['linked']),function($q) use ($postData) {
                            //     $q->doesntHave('guardian');
                            // });
                            // $query->when(!empty($postData['linked']),function($q) use ($postData) {
                            //     $q->whereHas('guardian');
                            // });
                            // $query->when(!empty($postData['linked']) && !empty($postData['unlinked']),function($q) use ($postData) {
                            //     $q->whereHas('guardian');
                            // });
                            // $query->when(!empty($search),function($q) use ($search) {
                            //     // $q->where(function ($q) use ($search) {
                            //     //     $q->whereHas('guardian.user',function($q) use ($search) {
                            //     //         $q->whereRaw('('.getPrefix().'students.firstname like "%'.$search.'%" OR '.getPrefix().'students.lastname like "%'.$search.'%")');
                            //     //     });
                            //     //     $q->orWhereHas('studentClass',function($q) use ($search) {
                            //     //         $q->whereRaw('(classTitle like "%'.$search.'%")');
                            //     //     });
                            //     // });
                            //     $q->Where(function ($q) use ($search) {
                            //         $q->whereRaw('('.getPrefix().'students.firstname like "%'.$search.'%" OR '.getPrefix().'students.lastname like "%'.$search.'%")');
                            //     });
                            // });

        $data['userdatacount']=$query->count();
        $data['guardiandata']=$query->get();

        // dd($data['guardiandata'],$data['userdatacount']);

        
        $data['userRole'] = "student";

        if($request->dataType == 'data')
        {
            return $data['userdata'];
        }
        $data['userdata'] = ___nullreplacer($data['userdata']);

        // $data['userdatacount'] = $totalCount;

        // dd($data['userdatacount'],$data['userdata']);
        
        if ($request->ajax()) {
            $ajaxData = \View::make('front.ajaxTemplate.productdata',$data);
            $ajaxData = $ajaxData->render();
            echo json_encode([
                'data'=>$ajaxData,
                'status'=>(string)"1"
            ]);
            die();
        }
        return view('front.user.product',compact('selectedNav'))->with($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product(Request $request)
    {
        $data = \DB::table('products')
                                ->select(\DB::raw('*'))
                                ->groupBy('products.id')
                                ->get();
        // $data = json_encode($data);
        // $data = preg_replace("_\\\_", "\\\\\\", $data);
        // $data = preg_replace("/\"/", "\\\"", $data);          
        // dd(response()->json($data));
        return view('front.user.prod',compact('data'));
        // dd($data['product']->toJson());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        return view('front.user.myprofile');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exp(Request $request)
    {
        return view('front.user.exp');
    }
}
