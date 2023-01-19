
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
        <label>{{ $label }}</label>
        <input name="{{ $name }}" type="{{ $type }}" class="form-controler" value="{{ old('name') }}" placeholder="{{ $placeholder }}" /><br>
        <span class="text-danger">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>

