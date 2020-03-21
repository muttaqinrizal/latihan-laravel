<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class HomeController extends Controller
{
    public function home(){
        $data = Todo::all();
        // $data = Todo::first();
        // $data = Todo::find(2);
        // $data = Todo::where('email', '=' ,'user@gmail.com')->get();
        // $data = Todo::paginate(5);
        // dd($data);

        return view('home', [ 'data' => $data]);
        // return view('home')->with('data', $data);
    }

    public function create(Request $request){
        // $data = new Todo;
        // $data->email = $request->email;
        // $data->save();

        $data = Todo::create([
            "email" => $request->email
        ]);

        return redirect('home');
    }

    public function edit($id)
    {
        $data = Todo::find($id);

        return view('edit', [ 'data' => $data ]);
    }

    public function update(Request $request)
    {

    }

    public function about(){
        return view('home');
    }
    public function contact(){
        return view('home');
    }
}
