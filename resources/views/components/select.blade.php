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


<div class="input-group">
    <div class="@if ($floating) form-floating @endif">
        <select name="{{ $name }}"
            class="form-select form-select-lg {{ $errors->has($name) ? 'is-invalid' : 'mb-3' }} {{ $fontSize }}"
            {{ $required == true ? 'required' : '' }} id="floatingSelect{{ $name }}">
            <option selected>{{ $placeholder }}</option>
            @foreach ($options as $value => $option)
                <option value="{{ $value }}">{{ $option }}</option>
            @endforeach
        </select>

        @if ($floating)
            <label for="floatingSelect{{ $name }}">{{ $label }}</label>
        @endif
    </div>

    @error($name)
        <div class="invalid-feedback mb-3" style="display: block !important;">
            {{ $message }}
        </div>
    @enderror
</div>
