<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactBudgetRequest;
use App\Http\Requests\ContactMessageRequest;
use App\Mail\NewForm;
use App\Models\Form;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact()
    {
        return view('front.contact');
    }

    public function home()
    {
        $messages = Message::where('day',Carbon::today()->dayOfWeek)->where('status',1)->orderBy('order')->get();
        return view('front.home',compact('messages'));
    }

    public function wedo()
    {
        return view('front.web');
    }

    public function apps()
    {
        return view('front.apps');
    }

    public function marketing()
    {
        return view('front.marketing');
    }
    public function learning()
    {
        return view('front.learning');
    }
    public function ThreeD()
    {
        return view('front.3d');
    }

    public function contactProject(ContactBudgetRequest $request)
    {
        $this->sendMessage($request);
        return redirect('/')->with(['messageModal' => [
            'title' => '¡Excelente!',
            'text' => "!Hemos recibido tu solicitud, nuestro equipo la esta revisando, en breve nos contactaremos contigo!",
            'type' => 'success',
        ]]);
    }

    public function contactMessage(ContactMessageRequest $request)
    {
        $this->sendMessage($request);
        return redirect('/')->with(['messageModal' => [
            'title' => '¡Excelente!',
            'text' => "!Hemos recibido tu mensaje, ya lo estamos leyendo en breve nos contactaremos contigo!",
            'type' => 'success',
        ]]);
    }

    private function sendMessage($request)
    {
        $image = ($request->hasFile('attached')) ? $request->file('attached')->store('forms', 'public') : '';
        $data = $request->all();
        $data['attached'] = $image;
        $form = Form::create($data);
        \Mail::to('hola@artico.io')->send(new NewForm($form));
    }
}
