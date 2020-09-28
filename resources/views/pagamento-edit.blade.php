@extends('layouts.main-layout')
@section('content')
    
    <form action="" method="POST">
        @csrf
        @method("POST")
        <div class="form-group">
            <label for="status">status</label>
            <input type="text" name="status" value="{{$pagamento -> status}}">
        </div>

        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" value="{{$pagamento -> price}}">
        </div>
        <button type="submit"> EDIT</button>
    </form>

@endsection