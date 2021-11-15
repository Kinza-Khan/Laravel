<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class control extends Controller
{
function insert_data(Request $r){
    $data = new Data ;
    $data->name=$r->name;
    $data->city=$r->city;
    $data->save();
    return redirect('input');
    
}
function select_data(){
    $data= Data::all();
    return view('select',['member'=>$data]);
}
function delete_data($id){
    $data= Data::find($id);
    $data->delete();
    return redirect('select');
}

function update_select_data($id){
    $data= Data :: find($id);
    return view('update',['select'=>$data]);


}
function update_data(Request $r){
    $data = Data :: find($r->id);
    $data->name=$r->name;
    $data->city=$r->city;
    $data->save();
    return redirect('select');
}

}
