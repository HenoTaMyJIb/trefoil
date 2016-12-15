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
                                <select class="input {{ $errors->has('field') ? 'is-danger' : '' }}" name="field" placeholder="Rühm" v-model="field">
                                        <option disabled selected>Vali...</option>
                                        @foreach($fields as $field)
                                            <option value="{{$field->id}}">{{$field->name}}</option>
                                        @endforeach
                                </select>
                                @if($errors->has('field'))
                                    <span class="help is-danger">{{ $errors->first('field') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>

                    @foreach($fields as $field)
                        <div class="control is-horizontal" v-if="{{$field->id}} == field && {{$field->is_full}} == 1">
                            <div class="control-label">
                                <label></label>
                            </div>
                            <div class="control is-grouped  has-icon has-icon-right">
                                <article class="message is-danger">
                                  <div class="message-body">
                                      Rühm on täis.
                                  </div>
                                </article>
                            </div>
                        </div>
                    @endforeach

                    @include('registrations._student')
                    @include('registrations._parent1')
                    @include('registrations._parent2')

                    <hr/>
                    <div class="control is-horizontal">
                      <div class="control-label">
                        <label>Kommentaar</label>
                      </div>
                      <div class="control is-grouped">
                        <textarea class="textarea" name="comment" placeholder="Küsimus"></textarea>
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
