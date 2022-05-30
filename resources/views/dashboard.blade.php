<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h1><b><u> You're logged in!</h1></b></u>
                   <h2 class="card-title">Name         : {{@$user->name}}</h2>
                   <h2 class="card-title">Surname           : {{$user->surname}}</h2>
                   <h2 class="card-title">Email            : {{$user->email}}</h2>
                   <h2 class="card-title">Phone no       : {{$user->phone_no}}</h2>
                   <h2 class="card-title">Address         : {{$user->address}}</h2>
                   <h2 class="card-title">Pincode          : {{$user->pin_code}}</h2>
                   <h2 class="card-title">Country            : {{$country->name}}</h2>
                   <h2 class="card-title">State         : {{$state->name}}</h2>
                   <h2 class="card-title">city         : {{$city->name}}</h2>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
