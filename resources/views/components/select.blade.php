@props([
    'name',
    'required' => false,
    'floating' => true,
    'fontSize' => 'fs-6',
    'label' => 'Here goes the label',
    'placeholder' => 'Here goes the placeholder',
    'options' => [
        'default' => 'This is a default option on the array with the key of the item as value',
    ],
])

@if ($floating)
    <div class="form-floating">
@endif

<select name="{{ $name }}"
    class="form-select form-select-lg {{ $errors->has($name) ? 'is-invalid' : 'mb-3' }} {{ $fontSize }}"
    {{ $required == true ? 'required' : '' }}>
    <option selected>{{ $placeholder }}</option>
    @foreach ($options as $value => $option)
        <option value="{{ $value }}">{{ $option }}</option>
    @endforeach
</select>

@if ($floating)
    <label for="floatingSelect">{{ $label }}</label>
    </div>
@endif

@error($name)
    <div class="invalid-feedback mb-3">
        {{ $message }}
    </div>
@enderror
