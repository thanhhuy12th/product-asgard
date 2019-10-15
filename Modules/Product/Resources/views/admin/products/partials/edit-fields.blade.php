<div class="box-body">
	<div class='form-group{{ $errors->has('product_name') ? ' has-error' : '' }}'>
		{!! Form::label('product_name', trans('product::products.form.product name')) !!}
		{!! Form::text('product_name', old('product_name',$product->product_name), ['class' => 'form-control', 'placeholder' => trans('product::products.form.product name placeholder')]) !!}
		{!! $errors->first('product_name', '<span class="help-block">:message</span>') !!}
	</div>
	<div class='form-group{{ $errors->has('price') ? ' has-error' : '' }}'>
		{!! Form::label('price', trans('product::products.form.price')) !!}
		{!! Form::number('price', old('price',$product->price), ['class' => 'form-control', 'placeholder' => trans('product::products.form.price placeholder')]) !!}
		{!! $errors->first('price', '<span class="help-block">:message</span>') !!}
	</div>
	<div class="form-group">
		@mediaSingle('feature_image',$product)
		@mediaMultiple('gallery',$product)
	</div>
</div>
