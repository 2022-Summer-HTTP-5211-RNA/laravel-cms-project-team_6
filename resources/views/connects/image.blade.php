@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Connect Image</h2>

    <div class="w3-margin-bottom">
        @if($connect->image)
            <img src="{{asset('storage/'.$connect->image)}}" width="200">
        @endif
    </div>

    <form method="post" action="/console/connects/image/{{$connect->id}}" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        @csrf

        <div class="w3-margin-bottom">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" value="{{old('image')}}" required>
            
            @if ($errors->first('image'))
                <br>
                <span class="w3-text-red">{{$errors->first('image')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Image</button>

    </form>

    <a href="/console/connects/list">Back to Connection's List</a>

</section>

@endsection
