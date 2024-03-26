<x-app-layout>
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>
        <div>
            <form action="{{ route('dashboard.store') }}" method="post">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="name">
                </div>
                </br>
                <div>
                    <label for="contact">Contact No:</label>
                    <input type="number" name="contact">
                </div>
                </br>
                <div>
                    <label for="address">Address:</label>
                    <input type="text" name="address">
                </div>
                </br>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                </div>
                </br>
                <div>
                    <label for="gender">Gender: </label>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Other">Other
                </div>
                </br>


                <div>
                    <button type="submit">Submit</button>
                </div>

            </form>
        </div>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </x-authentication-card>

</x-app-layout>
