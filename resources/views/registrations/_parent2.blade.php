<hr/>
<h2 class="subtitle">Teise vanema andmed</h2>
<hr/>
<div class="control is-horizontal">
    <div class="control-label">
        <label>Nimi</label>
    </div>
    <div class="control is-grouped">
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('parent2.firstname') ? 'is-danger' : '' }}" value="{{ old('parent2.firstname') }}" type="text" name="parent2[firstname]" placeholder="Eesnimi">
            @if($errors->has('parent2.firstname'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent2.firstname') }}</span>
            @endif
        </p>
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('parent2.lastname') ? 'is-danger' : '' }}" value="{{ old('parent2.lastname') }}"  type="text" name="parent2[lastname]" placeholder="Perenimi">
            @if($errors->has('parent2.lastname'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent2.lastname') }}</span>
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
            <input class="input {{ $errors->has('parent2.personal_code') ? 'is-danger' : '' }}" value="{{ old('parent2.personal_code') }}" type="text" name="parent2[personal_code]" placeholder="Isikukood">
            @if($errors->has('parent2.personal_code'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent2.personal_code') }}</span>
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
            <input class="input {{ $errors->has('parent2.address') ? 'is-danger' : '' }}" value="{{ old('parent2.address') }}" type="text" name="parent2[address]" placeholder="Tänav maja-korter, Linn">
            @if($errors->has('parent2.address'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent2.address') }}</span>
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
            <input class="input {{ $errors->has('parent2.phone') ? 'is-danger' : '' }}" value="{{ old('parent2.phone') }}" type="text" name="parent2[phone]" placeholder="Telefon">
            @if($errors->has('parent2.phone'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent2.phone') }}</span>
            @endif
        </p>
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('parent2.email') ? 'is-danger' : '' }}" value="{{ old('parent2.email') }}" type="email" name="parent2[email]" placeholder="E-post">
            @if($errors->has('parent2.email'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent2.email') }}</span>
            @endif
        </p>
    </div>
</div>

<div class="control is-horizontal">
    <div class="control-label">
        <label>Töökoht</label>
    </div>
    <div class="control is-grouped">
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('parent2.work_place') ? 'is-danger' : '' }}" value="{{ old('parent2.work_place') }}" type="text" name="parent2[work_place]" placeholder="Töökoht">
            @if($errors->has('parent2.work_place'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent2.work_place') }}</span>
            @endif
        </p>
    </div>
</div>
