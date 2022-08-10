@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Connection</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Logo</th>
            <th>Title</th>
            <th>Link</th>
            <!-- image -->
            <th></th>
            <!-- edit -->
            <th></th>
            <!-- delete -->
            <th></th>
        </tr>
        @foreach ($connects as $connect)
        <tr>
            <td>
                @if ($connect->image)
                <img src="{{asset('storage/'.$connect->image)}}" width="200">
                @endif
            </td>
            <td>{{$connect->title}}</td>
            <td>
                {{$connect->link}}
            </td>
            <td><a href="/console/connects/image/{{$connect->id}}">Image</a></td>
            <td><a href="/console/connects/edit/{{$connect->id}}">Edit</a></td>
            <td><a href="/console/connects/delete/{{$connect->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

    <a href="/console/connects/add" class="w3-button w3-green">New Connection</a>

</section>

@endsection