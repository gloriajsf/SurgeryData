<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Input;
use App\Domain;

class SiteController extends Controller
{
    public function __construct(){
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadiac = file_get_contents("https://health.data.ny.gov/api/views/dk4z-k3xb/rows.json");
        $cadiacData = json_decode($cadiac, true);
        $cadiacDataColumn = $cadiacData['meta']['view']['columns'];
        /*
        $inpatient = file_get_contents("https://health.data.ny.gov/api/views/ivw2-k53g/rows.json");
        $inpatientData = json_decode($inpatient, true);
        $inpatientDataColumn = $inpatientData['meta']['view']['columns'];
        */
        return view('cadiac', ['cadiac' => $cadiacData['data'],'cadiacColumns' => $cadiacDataColumn, 
            'inpatient' => [], 'inpatientColumns' => []]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = Input::all();
        
        $simpleName = strtolower(trim($param['sitename']));
        $result = \DB::table('domains')->where('name', $simpleName)->first();
        if(isset($result)){
            $d = Domain::find($result->id);
            $d->rank = intval($param['siterank']);
        }else{
            $d = new Domain;
            $d->name = $simpleName;
            $d->$d->rank = intval($param['siterank']);
        }
        $d->save();

        return redirect()->action('SiteController@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRanks()
    {
        $param = Input::all();
        $content = $param['content'];
        $siteArray = explode(PHP_EOL, $content);
        $rankArray = array();
        foreach($siteArray as $s){
            $simpleName = strtolower(trim($s));
            $d = \DB::table('domains')->where('name','=', $simpleName)->first();
            if(isset($d)){
                 $rankArray[] = $d;
            }else{

                 $rankArray[] = (object)['name' => $simpleName, 'rank' => 'unknown'];
            }  
        }
        $user = Auth::user();
        $isAdmin = $user->isAdmin();
        $data = ['siteWithRank'=> $rankArray, 'adminUser' => $isAdmin ];
        return view('home',$data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}