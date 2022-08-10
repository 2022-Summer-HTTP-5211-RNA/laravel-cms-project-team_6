@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <!-- about list page -->
    <h2>Manage About</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Image</th>
            <th>Tagline</th>
            <th>Description</th>
            <th></th> <!-- image -->
            <th></th><!-- edit -->
            <th></th> <!-- delete -->
        </tr>
        @foreach ($abouts as $about)
        <tr>
            <td>
                @if ($about->image)
                <img src="{{asset('storage/'.$about->image)}}" width="200">
                @endif
            </td>
            <td>{{$about->tagline}}</td>
            <td>
                {{$about->description}}
            </td>
            <td><a href="/console/abouts/image/{{$about->id}}">Image</a></td>
            <td><a href="/console/abouts/edit/{{$about->id}}">Edit</a></td>
            <td><a href="/console/abouts/delete/{{$about->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

         <!-- redirecting to add about page -->

    <a href="/console/abouts/add" class="w3-button w3-green">New About</a>

</section>

@endsection