<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use  \Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function save(Request $request){

        $rulls=[
          'name'=>'required|min:3|max:150',
          'mail'=>'required|email',
          'phone'=>'required',
          'country'=>'required|max:50',
          'comment'=>'max:250',
        ];

        $this->validate($request,$rulls);
        try{
            $request->phone = str_replace(['+', '-'], '', filter_var($request->phone, FILTER_SANITIZE_NUMBER_INT));

            if($client = Clients::whereEmail($request->mail)->first()){
                $client->update(['phone' => $request->phone]);
            }else{
                $client = Clients::create(['email' => $request->mail, 'name' => $request->name,'phone' => $request->phone])->first();
            }
            $comment = $request->comment ?? "";
            $newREquest = new Requests(['country' => $request->country, 'comment' => $comment]);
            $newREquest->clients()->associate($client->id);
            $newREquest->save();
            $text = "Вы получили новую заявку. ";

            Mail::send('request', ['text' => $text,'client' =>$client,'comment'=>$comment], function($message){
                $message->from('postmaster@sandbox714a27900b0e42f794dcfd7679bfbd63.mailgun.org', 'Новая заявка');
                $message->to(['evatouragenstvo@gmail.com'])->subject('Заявка');
            });
            return redirect()->back()->with([
                'flash_message'            => 'Заявка отправлена успешно',
                'flash_message_important' => true,
                'flash_notification_level' => 'success',
            ]);

        }catch(\Exception $e){
            Log::error("File: ".basename(__FILE__)." Line:".$e->getLine()." ". $e->getMessage());
            return redirect()->back()->with([
                'flash_message'            => 'Ошибка при сохранении',
                'flash_message_important' => true,
                'flash_notification_level' => 'error',
            ]);
        }

        dd($request);
    }
}
