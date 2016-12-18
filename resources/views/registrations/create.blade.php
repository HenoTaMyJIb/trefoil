@extends('layouts.public-app')
@section('title')
    Registreerimine
@endsection
@section('subtitle')
Täitmiseks kohustuslikud väljad on märgitud * tärniga
@endsection
@section('content')
<section class="section">
    <div class="container">

        <div class="columns">
            <div class="column is-three-quarters">
                <form method="post" action="/registrations">
                    {!! csrf_field() !!}
                    <div class="control is-horizontal">
                        <div class="control-label required">
                            <label>Rühm</label>
                        </div>
                        <div class="control is-grouped  has-icon has-icon-right">
                            <div class="select is-fullwidth">
                                <select class="input {{ $errors->has('field') ? 'is-danger' : '' }}" name="field" placeholder="Rühm">
                                        <option disabled selected>Vali...</option>
                                        @foreach($fields as $field)
                                            <option value="{{$field->id}}" {{ old('field') == $field->id ? 'selected' : '' }}>{{$field->name}}</option>
                                        @endforeach
                                </select>
                                @if($errors->has('field'))
                                    <span class="help is-danger">{{ $errors->first('field') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>


                    @include('registrations._student')
                    @include('registrations._parent1')
                    @include('registrations._parent2')

                    <hr/>
                    <div class="control is-horizontal">
                      <div class="control-label">
                        <label>Kommentaar</label>
                      </div>
                      <div class="control is-grouped">
                        <textarea class="textarea" name="comment" placeholder="Küsimus">{{ old('comment') }}</textarea>
                      </div>
                    </div>

                    <p class="control">
                        <button class="button is-primary">Registreeri</button>
                    </p>

                </form>
            </div>
        </div>

    </div>
</section>

@endsection
