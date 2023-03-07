<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkaiciuokleController extends Controller
{
    public function forma(){
        return view("skaiciuokle");
    }

    public function rezultatas(Request $request){
        $svoris=$request->svoris;
        $ugis=$request->ugis;
        $kmi=$svoris/(($ugis/100)**2);

        if ($kmi < 18.5){
            $ats="Per mažas svoris";
        }
        if ($kmi > 18.5 && $kmi < 24.9){
            $ats="Normalus svoris";
        }
        if ($kmi > 25 && $kmi < 29.9){
            $ats="Antsvoris";
        }
        if ($kmi > 30 && $kmi < 34.9){
            $ats="I laipsnio nutukimas";
        }
        if ($kmi > 35 && $kmi < 39.9){
            $ats="II laipsnio nutukimas";
        }
        if ($kmi > 40){
            $ats="III laipsnio nutukimas";
        }


        return view("rezultatas", [
            'svoris'=>$svoris,
            'ugis'=>$ugis,
            'kmi'=>round($kmi,2),
            'ats'=>$ats
        ]);

    }
}
