<hr/>
<h2 class="subtitle required">Lapse andmed</h2>
<hr/>
<div class="control is-horizontal">
    <div class="control-label">
        <label>Nimi</label>
    </div>
    <div class="control is-grouped">
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('student.firstname') ? 'is-danger' : '' }}" value="{{ old('student.firstname') }}" type="text" name="student[firstname]" placeholder="Eesnimi">
            @if($errors->has('student.firstname'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('student.firstname') }}</span>
            @endif
        </p>
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('student.lastname') ? 'is-danger' : '' }}" type="text" value="{{ old('student.lastname') }}" name="student[lastname]" placeholder="Perenimi">
            @if($errors->has('student.firstname'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('student.lastname') }}</span>
            @endif
        </p>
    </div>
</div>

<div class="control is-horizontal">
    <div class="control-label">
        <label>Isikukood</label>
    </div>
    <div class="control is-grouped">
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('student.personal_code') ? 'is-danger' : '' }}" type="text" value="{{ old('student.personal_code') }}" name="student[personal_code]" placeholder="Isikukood">
            @if($errors->has('student.personal_code'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('student.personal_code') }}</span>
            @endif
        </p>
    </div>
</div>

<div class="control is-horizontal">
    <div class="control-label">
        <label>Aadress</label>
    </div>
    <div class="control is-grouped">
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('student.address') ? 'is-danger' : '' }}" type="text" value="{{ old('student.address') }}" name="student[address]" placeholder="Tänav maja-korter, Linn">
            @if($errors->has('student.address'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('student.address') }}</span>
            @endif
        </p>
    </div>
</div>

<div class="control is-horizontal">
    <div class="control-label">
        <label>Kontaktandmed</label>
    </div>
    <div class="control is-grouped">
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input" type="text" name="student[phone]" value="{{ old('student.phone') }}"  placeholder="Telefon (kui on olemas)">
        </p>
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input" type="email" name="student[email]" value="{{ old('student.email') }}"  placeholder="E-post (kui on olemas)">
        </p>
    </div>
</div>
