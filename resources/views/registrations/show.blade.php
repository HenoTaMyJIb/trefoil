@extends('layouts.public-app')
@section('title')
    Registreerimine #{{$registration->id}}
@endsection
@section('subtitle')
    {{$registration->created_at}}
@endsection
@section('content')
<section class="section">
    <div class="container">
        {{-- <modal></modal> --}}
        <div class="box">
            <div class="columns">
                <div class="column is-half">
                    <h2 class="title is-5"><strong>Rühm:</strong> {{$registration->field->name}}</h2>
                </div>
                <div class="column is-half has-text-right">
                     <p class="text-primary">{{ $registration->status}}</p>
                </div>
            </div>


        </div>
        <div class="box">
            <div class="columns">
                <div class="column is-half">
                    <h2 class="subtitle">Lapse andmed</h2>
                    <table class="table">
                        <tr>
                            <td><b>Nimi:</b></td>
                            <td>{{$registration->student->name}}</td>
                        </tr>
                        <tr>
                            <td><b>Isikukood:</b></td>
                            <td>{{$registration->student->personal_code}}</td>
                        </tr>
                        <tr>
                            <td><b>Vanus:</b></td>
                            <td>{{$registration->student->age}}</td>
                        </tr>
                        <tr>
                            <td><b>Aadress:</b></td>
                            <td>{{$registration->student->address}}</td>
                        </tr>
                        <tr>
                            <td><b>Telefon:</b></td>
                            <td>{{$registration->student->phone}}</td>
                        </tr>
                        <tr>
                            <td><b>E-post:</b></td>
                            <td>{{$registration->student->email}}</td>
                        </tr>
                    </table>
                </div>
                <div class="column is-half">
                    <p><strong>Kommentaar: </strong> {{ $registration->comment}}</p>
                </div>
            </div>


        </div>
        <div class="columns">
            <div class="column is-half">
                <div class="box">
                    <h2 class="subtitle">Esimese vanema andmed</h2>
                    <table class="table">
                        <tr>
                            <td><b>Nimi:</b></td>
                            <td>{{$registration->parent1->name}}</td>
                        </tr>
                        <tr>
                            <td><b>Isikukood:</b></td>
                            <td>{{$registration->parent1->personal_code}}</td>
                        </tr>
                        <tr>
                            <td><b>Aadress:</b></td>
                            <td>{{$registration->parent1->address}}</td>
                        </tr>
                        <tr>
                            <td><b>Telefon:</b></td>
                            <td>{{$registration->parent1->phone}}</td>
                        </tr>
                        <tr>
                            <td><b>E-post:</b></td>
                            <td>{{$registration->parent1->email}}</td>
                        </tr>
                        <tr>
                            <td><b>Töökoht:</b></td>
                            <td>{{$registration->parent1->work_place}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="column is-half">
                <div class="box">
                    <h2 class="subtitle">Teise vanema andmed</h2>
                    @if($registration->parent2)
                        <table class="table">
                            <tr>
                                <td><b>Nimi:</b></td>
                                <td>{{$registration->parent2->name}}</td>
                            </tr>
                            <tr>
                                <td><b>Isikukood:</b></td>
                                <td>{{$registration->parent2->personal_code}}</td>
                            </tr>
                            <tr>
                                <td><b>Aadress:</b></td>
                                <td>{{$registration->parent2->address}}</td>
                            </tr>
                            <tr>
                                <td><b>Telefon:</b></td>
                                <td>{{$registration->parent2->phone}}</td>
                            </tr>
                            <tr>
                                <td><b>E-post:</b></td>
                                <td>{{$registration->parent2->email}}</td>
                            </tr>
                            <tr>
                                <td><b>Töökoht:</b></td>
                                <td>{{$registration->parent2->work_place}}</td>
                            </tr>
                        </table>
                        @else
                            <p>Andmeid pole</p>
                    @endif
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="button is-primary">Tagasi</a>

    </div>
</section>

@endsection
