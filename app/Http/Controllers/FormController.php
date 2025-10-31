<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Mail\SenderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = new \stdClass();
        $data->name = $request->name;
        $data->age = $request->age;
        $data->phone = $request->phone;
        //отправляет туда все данные и отправляет на страницу result.blade
        Mail::to("dovodsupport@reverseman3.ru")->send(new SenderMail($data));
        //Если данные свалидированны, отобрази блок success
        return back()->with('success', 'Данные успешно отправлены!');
    }
}
