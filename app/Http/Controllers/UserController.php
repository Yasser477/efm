<?php

namespace App\Http\Controllers;

use App\Models\IdeasInf;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insert(Request $request){

        $idea = new IdeasInf();
        $idea->email = $request->input('email');
        $idea->idea = $request->input('idea');
        $idea->save();
        return response()->json($idea);
        

    }

    public function show(){

        $idea = IdeasInf::all();
        return response()->json($idea);

    }



    public function edit($id)
    {
        $idea = IdeasInf::where('id', $id)->first();

        return response()->json($idea);
    }


    public function show_id(Request $request){

        $idea = IdeasInf::where('id', $request->id)->first();
        return response()->json($idea);

    }

    public function valida_idea(){

        $idea = IdeasInf::where('validation', "valide");
        return response()->json($idea->get());

    }

    public function update(Request $request, $id){
        $idea = IdeasInf::where('id', $id)->first();
        $idea->email = $request->input('email');
        $idea->idea = $request->input('idea');
        $idea->save();
        return response()->json($idea);
        ;
        
    }


    public function statu($id, $validation)
    {
        $idea = IdeasInf::where('id', $id)->first();

        $idea->validation = $validation;
        $idea->save();
        return response()->json($idea, 201);
    }




    public function email_vrf(Request $request)
    {
        $email = IdeasInf::where('email', $request->email)->first();

        if ($email) {
            return response()->json($email);
        } else {
            return response()->json(null, 404);
        }
    }

    public function deleteIdea($id){
        
        IdeasInf::where('id','non valid')->delete();
        return response()->json();
        
        
    }
}
