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
        $validated = $request->validate([
            'titulo' => 'required|string|max:200',
            'texto' => 'required|string',
        ]);
        Api::create($validated);
    }
    public function show($id){
        return Api::findOrfail($id);
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'titulo' => 'required|string|max:200',
            'texto' => 'required|string',
        ]);
        $blog = Api::findOrFail($id);
        $blog->update($validated);
    }
    public function destroy($id){
        $blog = Api::findOrFail($id);
        $blog->delete();
    }
    
}
