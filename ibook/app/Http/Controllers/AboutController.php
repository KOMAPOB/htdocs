<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller {
    
    public function submit(Request $req) {
        // dd($req->input('book'));
        $validation = $req->validate([
            'book' => 'required|min:0|',
            'name' => 'required|min:0|' 
        ]);

        $about = new About();
        $about->book = $req->input('book');
        $about->name = $req->input('name');

        $about->save();

        return redirect()->route('home')->with('success' , 'Книга была добавлена');
    }
    
    public function allData() {
        $about = new About;
        return view('messages', ['data' => $about->orderBy('id', 'asc')->get()]);
    }

    public function showOneMessage($id) {
        $about = new About;
        return view('one-message', ['data' => $about->find($id)]);
    }


    public function updateMessage($id) {
        $about = new About;
        return view('update-message', ['data' => $about->find($id)]);
    }

    public function updateMessageSubmit($id, Request $req) {

        $about = About::find($id);
        $about->book = $req->input('book');
        $about->name = $req->input('name');

        $about->save();

        return redirect()->route('about-data-one', $id)->with('success' , 'Книга была изменена');
    }

    public function deleteMessage($id) {
        About::find($id)->delete();
        return redirect()->route('about-data')->with('success' , 'Книга была удалена');
    }

}