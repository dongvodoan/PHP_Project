<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Office Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('office_number', 'Office Number:') !!}
    {!! Form::text('office_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Manager Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manager', 'Manager:') !!}
    {!! Form::text('manager', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('departments.index') !!}" class="btn btn-default">Cancel</a>
</div>
