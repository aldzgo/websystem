<!-- Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product', 'Product:') !!}
    {!! Form::text('Product', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Total Sales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Total_sales', 'Total Sales:') !!}
    {!! Form::number('Total_sales', null, ['class' => 'form-control']) !!}
</div>