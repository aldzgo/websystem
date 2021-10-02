<!-- Product Field -->
<div class="col-sm-12">
    {!! Form::label('Product', 'Product:') !!}
    <p>{{ $pricing->Product }}</p>
</div>

<!-- Product Price Field -->
<div class="col-sm-12">
    {!! Form::label('Product_price', 'Product Price:') !!}
    <p>{{ $pricing->Product_price }}</p>
</div>

<!-- Discount Price Field -->
<div class="col-sm-12">
    {!! Form::label('Discount_price', 'Discount Price:') !!}
    <p>{{ $pricing->Discount_price }}</p>
</div>

