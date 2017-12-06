@if( $flash = session('status'))
    <div id="flash-message" class="alert alert-success">
        {!! $flash !!}
    </div>
@endif