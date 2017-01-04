@extends('layouts.public-app')
@section('title')
    Registreerimised
@endsection
@section('content')
<registrations-view inline-template>
    <section class="section">
        <div class="container">
            <datatable url="{{url('admin/registrations/fetch')}}" :columns="columns"></datatable>
            {{-- <table class="table">
              <thead>
                <tr>
                  <th>Lapse nimi</th>
                  <th>Lapse isikukood</th>
                  <th>Lapse vanus</th>
                  <th>Rühm</th>
                  <th>Staatus</th>
                  <th>Kuupäev</th>
                  <th></th>
                </tr>
            </thead>
              <tbody>
                  @foreach ($registrations as $registration)
                      <tr>
                        <td>{{$registration->student->name}}</td>
                        <td>{{$registration->student->personal_code}}</td>
                        <td>{{$registration->student->age}}</td>
                        <td>{{$registration->field->name}}</td>
                        <td>{{$registration->status}}</td>
                        <td>{{$registration->created_at}}</td>
                        <td class="is-icon">
                            <a href="/admin/registrations/{{$registration->id}}">
                              <i class="fa fa-eye"></i>
                            </a>
                        </td>
                      </tr>
                  @endforeach
              </tbody>
            </table> --}}

        </div>
    </section>
</registrations-view>

@endsection
