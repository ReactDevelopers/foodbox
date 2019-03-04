<?php
    
    use Carbon\Carbon;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
    use Intervention\Image\Facades\Image;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Auth;
    use \App\Lib\CropAvatar;
    use App\Models\Admin\Videos;
    use App\Models\UploadPhoto;
    use App\Models\WatchChallengeVideo;
 

    function pp($data,$die=true)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if($die)
        {
           die(); 
        }
    }

    function ___loggedUser()
    {
        $data = Auth::user()->makeVisible('api_token');
        $data = ___nullreplacer($data);
        $data['sender_id'] = $data['id'];
        $data['role'] = ucwords(@session('user')['roles'][0]);
        $data['sender'] = $data['firstname'].' '.$data['lastname'];
        @$data['profile_image'] = !file_exists(sprintf('%s/%s',public_path(),$data['profile_image'])) ? 'images/avatar04.png' : $data['profile_image'];
        return $data = base64_encode(json_encode($data));
    }

    function ___configuration($keys = [])
    
    {
        $config_table = DB::table('configs');

        if(!empty($keys)){
            $config_table->whereIn('key',$keys);
        }

        $configData = $config_table->get()->toArray();
        
        return \App\Lib\Dash::combine((array)$configData,'{n}.key','{n}.value');
    }


    function getPrefix()
    {
        return DB::getTablePrefix();
    }

    function socialiteicons(){
        $socialite = DB::table('socialite')->select(['*'])->get();
        
        $html = ''; 

        foreach ($socialite as $key => $value) {
            $url = $value->title;

            if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                $url = "http://" . $url;
            }
            $html .='<li>
                        <a href="'.$url.'" target="_blank">
                            <img src="'.asset('uploads/socialite/'.$value->media).'">
                        </a>
                    </li>';
        }
         return $html;
   }

 

    /** Get Random string **/
    function get_randomstring(){
        $random_string = strtoupper(str_random(8));
        return $random_string;
    }

    

    function ___nullreplacer(& $data) 
    {
        if(!empty($data) > 0)
        {
            if(is_object($data)) {
                $data = json_decode(json_encode($data),true);
            }
            array_walk_recursive($data, function(&$item,$key) {
                $item = (string)$item;
                if ($item === null || $item === "" || $item ==="0000-00-00 00:00:00") {
                    $item = '';
                }
            });
        }
        else
        {
            $data =  "";
        }
        return $data;
    }

?>