<select {{ $attributes->merge(
                        ['class'=>'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-brand-bg-maingreen sm:text-sm sm:leading-6'])}}>
    <option value="">-Select-</option>
    @foreach ($options as $option)
        <option value="{{ $option }}" @selected(old('option') == $option)>
            {{ $option }}
        </option>
    @endforeach
</select>