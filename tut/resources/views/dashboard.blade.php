<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<br>
    <center>
            <form action="{{url('/send')}}" method="POST">
            @csrf
                <div>  
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
                </div>

                <br>

                <div>  
                <label>Address</label>
                <input type="text" name="address" placeholder="Address">
                </div>

                <br>

                <div>  
                <label>Number</label>
                <input type="number" name="number" placeholder="Phone">
                </div>

                <br>

                <div>  
                <input type="submit" name="" value="Send">
                </div>
            </form>
    </center>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
