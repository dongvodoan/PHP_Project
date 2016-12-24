<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $department->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $department->name !!}</p>
</div>

<!-- Office Number Field -->
<div class="form-group">
    {!! Form::label('office_number', 'Office Number:') !!}
    <p>{!! $department->office_number !!}</p>
</div>

<!-- Manager Field -->
<div class="form-group">
    {!! Form::label('manager', 'Manager:') !!}
    <p>{!! $department->manager !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $department->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $department->updated_at !!}</p>
</div>

