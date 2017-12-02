<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            {{--  <label>Company</label>
            <input type="text" class="form-control border-input" disabled placeholder="Company" value="Creative Code Inc.">  --}}
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{--  <label>Username</label>
            <input type="text" class="form-control border-input" placeholder="Username" value="michael23">  --}}
            {!! Form::label('Idade') !!}
            {!! Form::number('age', null, ['id', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{--  <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control border-input" placeholder="Email">  --}}
            {!! Form::label('Peso') !!}
            {!! Form::number('wieght', null, ['id', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{--  <label>First Name</label>
            <input type="text" class="form-control border-input" placeholder="Company" value="Chet">  --}}
            {!! Form::label('Primeiro Nome') !!}
            {!! Form::text('first_name', null, ['id' => 'first_name', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {{--  <label>Last Name</label>
            <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">  --}}
            {!! Form::label('Último Nome') !!}
            {!! Form::text('last_name', null, ['id' => 'last_name', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{--  <label>Address</label>
            <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">  --}}
            {!! Form::label('Email') !!}
            {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{--  <label>City</label>
            <input type="text" class="form-control border-input" placeholder="City" value="Melbourne">  --}}
            {!! Form::label('Cidade') !!}
            {!! Form::select('city', [ 1 => 'Anápois' ], null, ['id' => 'city', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{--  <label>Country</label>  --}}
            {{--  <input type="text" class="form-control border-input" placeholder="Country" value="Australia">  --}}
            {!! Form::label('Pais') !!}
            {!! Form::select('country', [ 1 => 'Brasil' ], null, ['id' => 'city', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{--  <label>Postal Code</label>
            <input type="number" class="form-control border-input" placeholder="ZIP Code">  --}}
            {!! Form::label('CEP') !!}
            {!! Form::text('zip_code', null, ['id' => 'zip_code', 'class' => 'form-control border-input']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
        {!! Form::label('Sebre mim') !!}
        {!! Form::textarea('about', null, ['id' => 'about', 'rows' => '5', 'class' => 'form-control border-input']) !!}
            {{--  <label>About Me</label>
            <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>  --}}
        </div>
    </div>
</div>