<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactBudgetRequest;
use App\Http\Requests\ContactMessageRequest;
use App\Models\Form;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact(){
        return view('front.contact');
    }
    public function home(){
        return view('front.home');
    }
    public function contactProject(ContactBudgetRequest $request){
        $this->sendMessage($request);
        return redirect('/')->with(['messageModal' => [
            'title' => '¡Excelente!',
            'text' => "!Hemos recibido tu solicitud, nuestro equipo la esta revisando, en breve nos contactaremos contigo!",
            'type' => 'success',
        ]]);
    }
    public function contactMessage(ContactMessageRequest $request){
        $this->sendMessage($request);
        return redirect('/')->with(['messageModal' => [
            'title' => '¡Excelente!',
            'text' => "!Hemos recibido tu mensaje, ya lo estamos leyendo en breve nos contactaremos contigo!",
            'type' => 'success',
        ]]);
    }
    private function sendMessage($request){
        $image = ($request->hasFile('attached')) ? $request->file('attached')->store('forms','public'):'';
        $data = $request->all();
        $data['attached'] = $image;
        Form::create($data);
    }
}
