<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreKaderRegistrationStep1Request;

class KaderRegistrationController extends Controller
{
    public function showStep1()
    {
        return view('auth.kader.register.step1');
    }

    public function storeStep1(StoreKaderRegistrationStep1Request $request)
    {
        $validated = $request->validated();
        session()->put('kader_registration.step1', $validated);
        return redirect()->route('kader.register.step2');
    }

    public function showStep2()
    {
        return view('auth.kader.register.step2');
    }

    public function storeStep2(\App\Http\Requests\StoreKaderRegistrationStep2Request $request)
    {
        $validated = $request->validated();
        session()->put('kader_registration.step2', $validated);
        return redirect()->route('kader.register.step3');
    }

    public function showStep3()
    {
        return view('auth.kader.register.step3');
    }

    public function storeStep3(\App\Http\Requests\StoreKaderRegistrationStep3Request $request)
    {
        $validated = $request->validated();
        session()->put('kader_registration.step3', $validated);
        return redirect()->route('kader.register.step4');
    }

    public function showStep4()
    {
        return view('auth.kader.register.step4');
    }

    public function storeStep4(\App\Http\Requests\StoreKaderRegistrationStep4Request $request)
    {
        $validated = $request->validated();
        session()->put('kader_registration.step4', $validated);
        return redirect()->route('kader.register.step5');
    }

    public function showStep5()
    {
        return view('auth.kader.register.step5');
    }

    public function storeStep5(\App\Http\Requests\StoreKaderRegistrationStep5Request $request)
    {
        $validated = $request->validated();
        session()->put('kader_registration.step5', $validated);
        return redirect()->route('kader.register.step6');
    }

    public function showStep6()
    {
        return view('auth.kader.register.step6');
    }

    public function submit(\App\Http\Requests\StoreKaderRegistrationStep6Request $request, \App\Services\KaderRegistrationService $service)
    {
        $validated = $request->validated();
        session()->put('kader_registration.step6', $validated);
        
        $allData = session()->get('kader_registration');
        $service->registerKader($allData);
        
        session()->forget('kader_registration');
        
        return redirect()->route('kader.register.success');
    }

    public function success()
    {
        return view('auth.kader.register.success');
    }
}
