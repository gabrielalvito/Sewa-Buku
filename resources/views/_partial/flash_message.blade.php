@if (Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('Penting')? 'alert-important' : '' }}" >
        {{ Session::get('flash_message') }}
    </div>
@endif