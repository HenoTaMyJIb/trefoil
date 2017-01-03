@extends('layouts.public-app')
@section('title')
    Registreerimine
@endsection
@section('subtitle')
Täitmiseks kohustuslikud väljad on märgitud * tärniga
@endsection
@section('content')
<create-registration-view inline-template :fields="{{$fields}}">
<section class="section" v-cloak>
    <div class="container">

        <div class="columns">
            <div class="column is-three-quarters">
                <form method="post" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
                    <div class="control is-horizontal">
                        <div class="control-label required">
                            <label>Rühm</label>
                        </div>
                        <div class="control is-grouped  has-icon has-icon-right">
                            <div class="select is-fullwidth">
                                <select class="input {{ $errors->has('field') ? 'is-danger' : '' }}" v-model="form.field" @change="isFieldFull" name="field" placeholder="Rühm">
                                    <option v-for="field in fields" :value="field.id" v-text="field.name"></option>
                                </select>
                                <p class="help is-info title is-6" v-if="fieldFull"><i class="fa fa-warning"></i> Rühm on täis. Teie taotlus on automaatselt staatusega 'Ootel'.</p>
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
                        <textarea class="textarea" name="comment" v-model="form.comment" placeholder="Küsimus">{{ old('comment') }}</textarea>
                      </div>
                    </div>

                    <div class="notification is-warning" v-if="form.errors.any()">
                        <h5 class="title is-5">Kontrolli andmed</h5>
                    </div>

                    <p class="control">
                        <button class="button is-primary" :disabled="form.errors.any()">Registreeri</button>
                    </p>

                </form>
            </div>
        </div>

    </div>
</section>
</create-registration-view>

@endsection
