@if(auth()->check())
<div class="hero-foot">
    <div class="container">
        <nav class="tabs is-boxed">
            <ul>
                <li class="is-active"><a href="{{url('admin/registrations')}}">Registreerimised</a></li>
            </ul>
        </nav>
    </div>

</div>
@endif
