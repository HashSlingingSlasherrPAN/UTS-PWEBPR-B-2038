@extends('components.template')
@section('title','dashboard')

@section('content')
<section class="my-[90px]">
    <table>
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>

                <td>{{ $loop->iteration }}</td>
                <td>{{ $contact["name"] }}</td>
                <td>{{ $contact["email"] }}</td>
                <td>{{ $contact["phone"] }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
