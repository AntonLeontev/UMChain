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
		}"
		@change.debounce.500ms="submit"
	>
        <div class="mb-8 main__data">
            <div class="mb-3">
				<div class="reg__name">Gender</div>
				<div class="flex flex-col gap-1">
					<x-check type="radio" name="gender" value="0" model="form.gender">Man</x-check>
					<x-check type="radio" name="gender" value="1" model="form.gender">Woman</x-check>
				</div>
			</div>

            <div class="reg__one">
                <div class="reg__name">Age</div>
                <div class="reg__field">
                    <input type="number" name="age" class="focus:border-b-pink focus:ring-0" x-model="form.age"
                        @input="form.validate('age')">
                    <template x-if="form.invalid('age')">
                        <div class="text-danger" x-text="form.errors.age"></div>
                    </template>
                </div>
            </div>
            <div class="reg__one">
                <div class="reg__name">Height, cm</div>
                <div class="reg__field">
                    <input type="text" name="height" class="focus:border-b-pink focus:ring-0"
                        x-model="form.height" @change="form.validate('height')">
                    <template x-if="form.invalid('height')">
                        <div class="text-danger" x-text="form.errors.height"></div>
                    </template>
                </div>
            </div>
            <div class="mb-3 reg__one">
                <div class="reg__name">Weight, kg</div>
                <div class="reg__field">
                    <input type="text" name="weight" class="focus:border-b-pink focus:ring-0"
                        x-model="form.weight" @change="form.validate('weight')">
                    <template x-if="form.invalid('weight')">
                        <div class="text-danger" x-text="form.errors.weight"></div>
                    </template>
                </div>
            </div>
			<div class="mb-3">
				<div class="reg__name">Activity</div>
				<div class="flex flex-col gap-1">
					<x-check type="radio" name="activity" value="0" model="form.activity">Minimum</x-check>
					<x-check type="radio" name="activity" value="1" model="form.activity">Moderate</x-check>
					<x-check type="radio" name="activity" value="2" model="form.activity">Active</x-check>
				</div>
			</div>
			<div class="mb-3">
				<div class="reg__name">Level</div>
				<div class="flex flex-col gap-1">
					<x-check type="radio" name="level" value="0" model="form.level">Weak</x-check>
					<x-check type="radio" name="level" value="1" model="form.level">Normal</x-check>
					<x-check type="radio" name="level" value="2" model="form.level">Strong</x-check>
				</div>
			</div>
			<div>
				<div class="reg__name">Direction</div>
				<div class="flex flex-col gap-1">
					<x-check type="radio" name="direction" value="0" model="form.direction">Weight loss</x-check>
					<x-check type="radio" name="direction" value="1" model="form.direction">Keeping weight</x-check>
					<x-check type="radio" name="direction" value="2" model="form.direction">Weight gain</x-check>
				</div>
			</div>
        </div>

		<template x-if="form?.age && form?.height && form?.weight">
			<div class="">
				<div class="mb-3">
					<div class="text-center">Recommended daily calories income:</div>
					<div class="text-center text-[25px]">
						<span x-text="calcCalories"></span>
						<span class="">kCal</span>
					</div>
				</div>
				<div class="mb-6">
					<div class="text-center">PFC calculation:</div>
					<div class="flex justify-between gap-1">
						<span>Proteins</span>
						<span x-text="proteins"></span>
					</div>
					<div class="flex justify-between gap-1">
						<span>Fats</span>
						<span x-text="fats"></span>
					</div>
					<div class="flex justify-between gap-1">
						<span>Carbohydrates</span>
						<span x-text="carbohydrates"></span>
					</div>
				</div>
			</div>
		</template>
    </form>
</div>
