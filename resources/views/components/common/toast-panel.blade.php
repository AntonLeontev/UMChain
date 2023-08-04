<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('toastPanel', () => ({
            toasts: [],
            id: 1,

            fire() {
                this.toasts.push({
                    id: this.id,
                    text: this.$event.detail.text,
                    type: this.$event.detail.type
                });
                this.id++;
            },
            hide(event) {
                const id = event.target.closest('.toast').dataset.id;

                let el = this.toasts.find((el) => el.id == id);

                this.toasts.pop(el);
            },
        }))
    })
</script>

<div class="fixed flex flex-col gap-2 bottom-10 right-10" x-data="toastPanel" @toast.window="fire">
    <template x-for="toast in toasts">
        <div class="toast relative w-[300px] rounded border p-5 text-white"
            :class="toast.type === 'error' ? 'border-transparent bg-danger' : 'border-pink bg-black'"
            :data-id="toast.id">
            <span x-text="toast.text"></span>
            <div class="absolute right-1 top-1" @click="hide">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
    </template>
</div>
