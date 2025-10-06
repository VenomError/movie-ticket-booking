 @props(['name', 'label' => ''])
 @php
     $id = Str::slug($name) . '-input';
 @endphp
 <div class="form-group">
     <label for="{{ $id }}">{{ Str::title($label) }}</label>
     <input
         {{ $attributes->merge([
             'type' => 'text',
             'id' => $id,
             'placeholder' => 'Enter ' . Str::title($label),
             'name' => $name,
             'value' => old($name)
         ]) }}
         @error($name)
             class="border-bottom border-danger"
        @enderror
     >
     @error($name)
         <small class="text-danger">{{ $message }}</small>
     @enderror
 </div>
