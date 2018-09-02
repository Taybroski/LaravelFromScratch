
{{-- Do not tag forms with Required, it will override the messages being visible. --}}
<div class="form-group">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
</div>