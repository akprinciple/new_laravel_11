<x-layout>
    <x-slot:heading>
        All Users
    </x-slot:heading>
   <h1>Welcome Mr {{ $user['name'] }}</h1>
   <h3>You are {{ $user['age'] }} years</h3>
   <h3>Your email address is {{ $user['email'] }}php</h3>
   <h4>Your id is {{ $user['id'] }}</h4>
</x-layout>