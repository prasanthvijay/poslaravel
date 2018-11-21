{{ Form::open(array('url' => 'showroom/create','method' => 'GET')) }}

<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('sh_name', 'Name') !!}
            {!! Form::text('sh_name', null, [
                'class' => 'form-control',
                'name' => 'sh_name',
                //'required',
                'placeholder' => 'Name',

            ]) !!}            
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('TIN_number', 'TIN Number') !!}
                {!! Form::text('TIN_number',null, [
                    'class' => 'form-control',
                    'name' => 'TIN_number',
                    //'required',
                    'placeholder' => 'TIN number'
                ]) !!} 
      
    </div>
</div>
<div class="form-group">
    {!! Form::label('inputAddress', 'Address') !!}
                    {!! Form::textarea('sh_address',null, [
                        'class' => 'form-control',
                        'rows' => 4, 
                        'cols' => 54,
                        'placeholder' => 'Type here...',
 
                    ]) !!} 
    
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('sh_phone', 'Phone') !!}
            {!! Form::text('sh_phone', null, [
                'class' => 'form-control',
                'name' => 'sh_phone',
                //'required',
                'placeholder' => 'Phone',

            ]) !!}            
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sh_city', 'City') !!}
                {!! Form::text('sh_city',null, [
                    'class' => 'form-control',
                    'name' => 'sh_city',
                    //'required',
                    'placeholder' => 'City'
                ]) !!} 
      
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('sh_pincode', 'City') !!}
                    {!! Form::text('sh_pincode',null, [
                        'class' => 'form-control',
                        'name' => 'sh_pincode',
                        //'required',
                        'placeholder' => 'Zip code'
                    ]) !!} 
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12" align="right">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
               
</div>
{{ Form::close() }}