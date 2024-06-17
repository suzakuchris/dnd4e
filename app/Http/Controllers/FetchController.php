<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\Class4e;
use App\Models\Background;
use App\Models\Companion;
use App\Models\Deity;
use App\Models\Disease;
use App\Models\EpicDestiny;
use App\Models\Feat;
use App\Models\Glossary;
use App\Models\Item;
use App\Models\Monster;
use App\Models\ParagonPath;
use App\Models\Poison;
use App\Models\Power;
use App\Models\Race;
use App\Models\Ritual;
use App\Models\Skill;
use App\Models\Terrain;
use App\Models\Theme;
use App\Models\Trap;

class FetchController extends Controller
{
    function __construct(Request $req){
        if(!isset($req->id)){
            // return _response(404);
        }
    }
    public function class(Request $req){
        $class = Class4e::find($req->id);
        if(!isset($class)){
            http_response_code(404);
            return _response(404);
        }
        return _response(200, null, ($class));
    }

    public function power(Request $req){
        $power = Power::find($req->id);
        if(!isset($power)){
            http_response_code(404);
            return _response(404);
        }
        return _response(200, null, ($power));
    }

    public function do_not_use(Request $req){
        $objects = Trap::get();
        DB::beginTransaction();
        try{
            foreach($objects as $object){
                $object->Txt = getBodyContent($object->Txt);
                $object->save();
                echo "Processed: ".$object->Name."<br>";
            }
            DB::commit();
            dd("done");
        }catch(\Exception $e){
            DB::rollback();
            dd($e);
        }
        
    }
}
