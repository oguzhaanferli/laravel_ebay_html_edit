<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Methods extends Controller
{
    public function SaveHtml(Request $request)
    {
        if ($request->id == 0) {
            DB::table('ebayhtmltemplate')->insert(['label' => $request->label, 'html' => $request->html,]);
        } else {
            $affected = DB::table('ebayhtmltemplate')
                ->where('id', $request->id)
                ->update(['html' => $request->html]);
        }
        return response()->json(["code" => 1]);
    }

    public function passwordControl(Request $request)
    {
        if ($request->password == 'T;2a\U&DQNz') return response()->json(["status" => true]);
        else return response()->json(["status" => false]);
    }

    public function getcompany()
    {
        $affected = DB::table('company')->where('id', '1')->first();
        response()->json(["data" => $affected]);
    }
}
