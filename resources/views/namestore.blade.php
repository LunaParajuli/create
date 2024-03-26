<div>
    <a href="{{ route('name') }}">Details</a>
</div>
<div>
    <table>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            th>Address</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <tr>
            @foreach ($newform as $form)
                <td>{{ $form->id }}</td>
                <td>{{ $form->name }}</td>
                <td>{{ $form->contact }}</td>
                <td>{{ $form->address }}</td>
                <td>{{ $form->email }}</td>
                <td>{{ $form->gender }}</td>
            @endforeach
        </tr>
</div>
</table>

</div>
