<?php

namespace App\Http\Responses;

use App\Enums\Roles;
use App\Filament\Resources\MarkResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Livewire\Features\SupportRedirects\Redirector;
use Yebor974\Filament\RenewPassword\RenewPasswordPlugin;


class LoginResponse extends \Filament\Http\Responses\Auth\LoginResponse
{

    public function toResponse($request): RedirectResponse|Redirector
    {
        $user = auth()->user();

       if($user->role !== Roles::STUDENT->value) {
           return redirect('/admin');
       }


            return redirect()->to(MarkResource::getUrl());


    }

}
