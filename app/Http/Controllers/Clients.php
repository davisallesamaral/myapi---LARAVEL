<?php

namespace App\Http\Controllers;
 
use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Clients extends Controller
{

    public function index($id = null) {
        if ($id == null) {
            return Client::Paginate(10);
        } else {
            return $this->show($id);
        }
    }

    public function store(Request $request) {
        $post = new Client();
        $post->fill($request->all());
        $post->save();
        return response()->json($post, 201);
    }


    public function show($id) {
        return Client::find($id);
    }

    public function update(Request $request, $id) {
        try {
            $Client = Client::findOrFail($id);

            $Client->fill($request->all());
            $Client->save();

            return response()->json($Client);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            response()->json($e);
        }
    }


    public function destroy(Request $request, $id) {

        $Client = Client::find($id);
        $Client->delete();

        return "Client #" . $id. " deleted";
    }

}
