<hr/>
<h2 class="subtitle required">Esimese vanema andmed</h2>
<hr/>
<div class="control is-horizontal">
    <div class="control-label">
        <label>Nimi</label>
    </div>
    <div class="control is-grouped">
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('parent1.firstname') ? 'is-danger' : '' }}" value="{{ old('parent1.firstname') }}" type="text" name="parent1[firstname]" placeholder="Eesnimi">
            @if($errors->has('parent1.firstname'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent1.firstname') }}</span>
            @endif
        </p>
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('parent1.lastname') ? 'is-danger' : '' }}" value="{{ old('parent1.lastname') }}"  type="text" name="parent1[lastname]" placeholder="Perenimi">
            @if($errors->has('parent1.lastname'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent1.lastname') }}</span>
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
            <input class="input {{ $errors->has('parent1.personal_code') ? 'is-danger' : '' }}" value="{{ old('parent1.personal_code') }}" type="text" name="parent1[personal_code]" placeholder="Isikukood">
            @if($errors->has('parent1.personal_code'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent1.personal_code') }}</span>
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
            <input class="input {{ $errors->has('parent1.address') ? 'is-danger' : '' }}" value="{{ old('parent1.address') }}" type="text" name="parent1[address]" placeholder="Tänav maja-korter, Linn">
            @if($errors->has('parent1.address'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent1.address') }}</span>
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
            <input class="input {{ $errors->has('parent1.phone') ? 'is-danger' : '' }}" value="{{ old('parent1.phone') }}" type="text" name="parent1[phone]" placeholder="Telefon">
            @if($errors->has('parent1.phone'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent1.phone') }}</span>
            @endif
        </p>
        <p class="control is-expanded has-icon has-icon-right">
            <input class="input {{ $errors->has('parent1.email') ? 'is-danger' : '' }}" value="{{ old('parent1.email') }}" type="email" name="parent1[email]" placeholder="E-post">
            @if($errors->has('parent1.email'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent1.email') }}</span>
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
            <input class="input {{ $errors->has('parent1.work_place') ? 'is-danger' : '' }}" value="{{ old('parent1.work_place') }}" type="text" name="parent1[work_place]" placeholder="Töökoht">
            @if($errors->has('parent1.work_place'))
                <i class="fa fa-warning"></i>
                <span class="help is-danger">{{ $errors->first('parent1.work_place') }}</span>
            @endif
        </p>
    </div>
</div>
