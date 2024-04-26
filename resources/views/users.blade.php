<x-layout>
    <x-slot:heading>
        All Users
    </x-slot:heading>
    <table class="table-auto w-100">
        <tr>
            <td>S/N</td>
            <td>Name</td>
            <td>Age</td>
        </tr>
               @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['age'] }} Years</td>
                <td><a href="/user/{{ $user['id'] }}"><button class="relative flex max-w-xs items-center rounded-full bg-primary-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">view</button></a></td>
            </tr>
        @endforeach
    </table>
</x-layout>