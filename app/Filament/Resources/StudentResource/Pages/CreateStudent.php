<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Enums\Roles;
use App\Filament\Resources\StudentResource;
use App\Models\User;
use Couchbase\Role;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $user_id = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['registration_number']),
            'role' =>  Roles::STUDENT->value ,
        ])->id;



        $data['user_id'] = $user_id;

        return $data;
    }


}
