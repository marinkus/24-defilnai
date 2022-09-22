<select data-create class="form-select mb-3" name="truck_id">
    @foreach ($trucks as $truck)
        <option value="{{ $truck->id }}">{{ $truck->maker }}, VN: {{ $truck->plate }}
        </option>
    @endforeach
</select>
