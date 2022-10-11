@props(['type', 'label', 'name', 'required' => false, 'retrieveOld' => true])
<div class="input-group has-validation">
    <div class="form-floating mb-3 {{ $errors->has($name) ? 'is-invalid' : '' }}">
        <input type="{{ $type }}" class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}"
            id="floatingInput{{ strtolower(str_replace(' ', '', $label)) }}" name="{{ $name }}"
            placeholder="name@example.com" oninput="QuitInvalid(this)" autocomplete="off" {!! $required == true ? 'required' : '' !!}
            {{ $attributes(['value' => $retrieveOld ? old($name) : request($name)]) }}>
        <label for="floatingInput{{ strtolower(str_replace(' ', '', $label)) }}">{{ $label }}</label>
    </div>
    @error($name)
        <div class="invalid-feedback mb-1">
            {{ $message }}
        </div>
    @enderror
</div>
