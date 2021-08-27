@if($errors->any())
    <div class = " alert alert-danger" id ="message-error">
        @foreach ($errors->all() as $error)
            <li> {{$error}}</li>
        @endforeach
     </div>   
@endif