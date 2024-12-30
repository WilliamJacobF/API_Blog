<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        return Api::all();
    }
    public function store(Request $request){
        Api::create($request->all());
    }
    public function show($id){
        return Api::findOrfail($id);
    }
    public function update(Request $request, $id){
        $blog = Api::findOrFail($id);
        $blog->update($request->all());
    }
    public function destroy($id){
        $blog = Api::findOrFail($id);
        $blog->delete();
    }
    
}
