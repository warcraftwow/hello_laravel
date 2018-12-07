@if($errors->any())
    <div class="ui error message">
        <ul class="list">
            @foreach($errors->all() as $error_msg)
                <li>{{ $error_msg }}</li>
            @endforeach
        </ul>
    </div>
@endif