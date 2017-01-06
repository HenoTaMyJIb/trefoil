@extends('layouts.public-app')
@section('title')
    Registreerimised
@endsection
@section('content')
<registrations-view inline-template>
    <section class="section">
        <div class="container">
            <tabs>
            <tab name="Kõik" :selected="true">
                <datatable url="{{url('admin/registrations/fetch')}}" ref="registrationsTable" :columns="columns"></datatable>
            </tab>

            <tab name="Ootel">
                <datatable url="{{url('admin/registrations/fetch?status=waiting')}}" ref="waitingRegistrationsTable" :columns="columns"></datatable>
            </tab>
        </tabs>

        </div>
    </section>
</registrations-view>

@endsection
