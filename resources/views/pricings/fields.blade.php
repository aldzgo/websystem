<!-- Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product', 'Product:') !!}
    {!! Form::text('Product', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_price', 'Product Price:') !!}
    {!! Form::text('Product_price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Discount Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Discount_price', 'Discount Price:') !!}
    {!! Form::text('Discount_price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>