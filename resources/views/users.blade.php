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
            </tr>
        @endforeach
    </table>
</x-layout>