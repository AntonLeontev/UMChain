<div data-page="fitCalculator" x-show="page === 'fitCalculator'" x-cloak>
    <form id="fitCalculator" class="flex flex-col items-center" 
		x-data="{
			form: $form('put', route('users.fit.update'), {
				'gender': '{{ auth()->user()->gender ?? 0 }}',
				'age': '{{ auth()->user()->age }}',
				'height': '{{ auth()->user()->height }}',
				'weight': '{{ auth()->user()->weight }}',
				'activity': '{{ auth()->user()->activity ?? 0 }}',
				'level': '{{ auth()->user()->level ?? 0 }}',
				'direction': '{{ auth()->user()->direction ?? 0 }}',
			}),
			submit() {
				this.form.submit()
					.then(response => {
						{{-- this.$dispatch('toast', { text: 'Success' }); --}}
					})
					{{-- .catch(error => {
						let text = 'Error';
		
						if (error.response.data.message) {
							text = error.response.data.message
						}
		
						this.$dispatch('toast', { text: text, type: 'error' });
					}); --}}
			},
			calcCalories() {
				let activity, level;

				if (this.form.activity == 0) activity = 1.2
				if (this.form.activity == 1) activity = 1.375
				if (this.form.activity == 2) activity = 1.725

				if (this.form.level == 0) level = 0.1
				if (this.form.level == 1) level = 0.15
				if (this.form.level == 2) level = 0.2

				let base = (10 * this.form.weight + 6.25 * this.form.height - 5 * this.form.age + 5) * activity;

				if (this.form.direction == 0) return Math.round(base - base * level) 
				if (this.form.direction == 1) return Math.round(base)
				if (this.form.direction == 2) return Math.round(base + base * level)
			},
			proteins() {
				return this.form.weight * 2
			},
			fats() {
				return this.form.weight * 9
			},
			carbohydrates() {
				return this.proteins() + this.fats()
			},
			cleanNumber() {
				this.$event.target.value = this.$event.target.value.replaceAll(/[\D]/g, '')
			},
		}"
		@change.debounce.500ms="submit"
	>
        <div class="mb-8 main__data">
            <div class="mb-3">
				<div class="reg__name">{{ __('cabinet/fit-calculator.form.Gender') }}</div>
				<div class="flex flex-col gap-1">
					<x-check type="radio" name="gender" value="0" model="form.gender">{{ __('cabinet/fit-calculator.form.Man') }}</x-check>
					<x-check type="radio" name="gender" value="1" model="form.gender">{{ __('cabinet/fit-calculator.form.Woman') }}</x-check>
				</div>
			</div>

            <div class="reg__one">
                <div class="reg__name">{{ __('cabinet/fit-calculator.form.Age') }}</div>
                <div class="reg__field">
                    <input type="number" name="age" class="focus:border-b-pink focus:ring-0" x-model="form.age" @input="cleanNumber">
                    <template x-if="form.invalid('age')">
                        <div class="text-danger" x-text="form.errors.age"></div>
                    </template>
                </div>
            </div>
            <div class="reg__one">
                <div class="reg__name">{{ __('cabinet/fit-calculator.form.Height') }}</div>
                <div class="reg__field">
                    <input type="number" name="height" class="focus:border-b-pink focus:ring-0"
                        x-model="form.height" @input="cleanNumber">
                    <template x-if="form.invalid('height')">
                        <div class="text-danger" x-text="form.errors.height"></div>
                    </template>
                </div>
            </div>
            <div class="mb-3 reg__one">
                <div class="reg__name">{{ __('cabinet/fit-calculator.form.Weight') }}</div>
                <div class="reg__field">
                    <input type="number" name="weight" class="focus:border-b-pink focus:ring-0"
                        x-model="form.weight" @input="cleanNumber">
                    <template x-if="form.invalid('weight')">
                        <div class="text-danger" x-text="form.errors.weight"></div>
                    </template>
                </div>
            </div>
			<div class="mb-3">
				<div class="reg__name">{{ __('cabinet/fit-calculator.form.Activity') }}</div>
				<div class="flex flex-col gap-1">
					<x-check type="radio" name="activity" value="0" model="form.activity">{{ __('cabinet/fit-calculator.form.Minimum') }}</x-check>
					<x-check type="radio" name="activity" value="1" model="form.activity">{{ __('cabinet/fit-calculator.form.Moderate') }}</x-check>
					<x-check type="radio" name="activity" value="2" model="form.activity">{{ __('cabinet/fit-calculator.form.Active') }}</x-check>
				</div>
			</div>
			<div class="mb-3">
				<div class="reg__name">{{ __('cabinet/fit-calculator.form.Level') }}</div>
				<div class="flex flex-col gap-1">
					<x-check type="radio" name="level" value="0" model="form.level">{{ __('cabinet/fit-calculator.form.Weak') }}</x-check>
					<x-check type="radio" name="level" value="1" model="form.level">{{ __('cabinet/fit-calculator.form.Normal') }}</x-check>
					<x-check type="radio" name="level" value="2" model="form.level">{{ __('cabinet/fit-calculator.form.Strong') }}</x-check>
				</div>
			</div>
			<div>
				<div class="reg__name">{{ __('cabinet/fit-calculator.form.Direction') }}</div>
				<div class="flex flex-col gap-1">
					<x-check type="radio" name="direction" value="0" model="form.direction">{{ __('cabinet/fit-calculator.form.loss') }}</x-check>
					<x-check type="radio" name="direction" value="1" model="form.direction">{{ __('cabinet/fit-calculator.form.keep') }}</x-check>
					<x-check type="radio" name="direction" value="2" model="form.direction">{{ __('cabinet/fit-calculator.form.gain') }}</x-check>
				</div>
			</div>
        </div>

		<template x-if="form?.age && form?.height && form?.weight">
			<div class="">
				<div class="mb-3">
					<div class="text-center">{{ __('cabinet/fit-calculator.form.income') }}</div>
					<div class="text-center text-[25px]">
						<span x-text="calcCalories"></span>
						<span class="">{{ __('cabinet/fit-calculator.form.kCal') }}</span>
					</div>
				</div>
				<div class="mb-6">
					<div class="text-center">{{ __('cabinet/fit-calculator.form.PFC') }}</div>
					<div class="flex justify-between gap-1">
						<span>{{ __('cabinet/fit-calculator.form.Proteins') }}</span>
						<span x-text="proteins"></span>
					</div>
					<div class="flex justify-between gap-1">
						<span>{{ __('cabinet/fit-calculator.form.Fats') }}</span>
						<span x-text="fats"></span>
					</div>
					<div class="flex justify-between gap-1">
						<span>{{ __('cabinet/fit-calculator.form.Carbohydrates') }}</span>
						<span x-text="carbohydrates"></span>
					</div>
				</div>
			</div>
		</template>
    </form>
</div>
