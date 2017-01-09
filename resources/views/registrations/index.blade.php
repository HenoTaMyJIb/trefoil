@extends('layouts.public-app')
@section('title')
    Registreerimised
@endsection
@section('content')
<registrations-view inline-template>
    <section class="section">
        <div class="container">
            <div style="margin-bottom:20px">
                <button class="button is-light" :class="{'is-primary': tab =='all'}" @click="all">Kõik</button>
                <button class="button is-light" :class="{'is-primary': tab =='waiting'}" @click="waiting">Ootel <span class="tag is-warning is-small" v-cloak>@{{waitingCount}}</span></button>
            </div>


            <datatable url="{{url('admin/registrations/fetch')}}" :sort-order="sortOrder" ref="registrationsTable" :columns="columns" :filters="filters"></datatable>
            {{-- <tabs>
            <tab name="Kõik" :selected="true">
                <datatable url="{{url('admin/registrations/fetch')}}" :sort-order="sortOrder" ref="registrationsTable" :columns="columns"></datatable>
            </tab>

            <tab name="Ootel">
                <datatable url="{{url('admin/registrations/fetch?status=waiting')}}" ref="waitingRegistrationsTable" :columns="columns"></datatable>
            </tab>
        </tabs> --}}

        </div>
    </section>
</registrations-view>

@endsection
