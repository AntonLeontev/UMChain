@props([
	'name',
	'type' => 'check',
	'value' => '',
	'disabled' => false,
	'checked' => false,
	'model' => '',
])

<label {{ $attributes->merge(['class' => 'relative flex items-center gap-2 cursor-pointer']) }}>
	<input 
		type="{{ $type }}" 
		name="{{ $name }}" 
		value="{{ $value }}" 
		@if($disabled) disabled @endif 
		@if($checked) checked @endif 
		class="pl-3 after:rounded"
		@if($model) x-model="{{ $model }}"@endif 
	>
	<span class="@if($disabled) text-[#777] @endif">{{ $slot }}</span>
</label>
