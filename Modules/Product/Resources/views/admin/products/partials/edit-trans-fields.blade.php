<div class='form-group{{ $errors->has("{$lang}.title") ? ' has-error' : '' }}'>
    {!! Form::label("{$lang}[title]", trans('product::products.form.title')) !!}
    {!! Form::text("{$lang}[title]", old("title",$product->translate($lang)->title), ['class' => 'form-control', 'placeholder' => trans('product::products.form.title placeholder')]) !!}
    {!! $errors->first("{$lang}[title]", '<span class="help-block">:message</span>') !!}
</div>
<div class='form-group{{ $errors->has("{$lang}.description") ? ' has-error' : '' }}'>
	@editor('description', trans('product::products.form.description'), old("{$lang}.description",$product->translate($lang)->title), $lang)
</div>