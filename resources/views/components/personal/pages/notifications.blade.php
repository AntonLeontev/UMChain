<div data-page="notifications" x-show="page === 'notifications'" x-cloak>
    <div class="main__uved">
        <div class="flex justify-between uved__title">
            <p>{{ __('cabinet/notifications.title') }}</p>
            <template x-if="user.unread_notifications_count > 0">
                <button class="p-1 text-xs text-white bg-black rounded"
                    @click="axios.post(route('notifications.mark-read')).then(() => user.unread_notifications_count = 0)">
                    {{ __('cabinet/notifications.mark') }}
                </button>
            </template>
            {{-- <div class="uved__count">1</div> --}}
        </div>
        <div class="uved__wrapper">
            @foreach (auth()->user()->unreadNotifications as $notification)
                <div class="uved__item">
                    <div class="uved__info">
                        <div class="mb-0 uved__name uved__new">
                            {{ __('notifications.' . $notification->data['lang'], $notification->data['values']) }}
                        </div>
                        {{-- <div class="uved__description"></div> --}}
                    </div>
                    <div class="uved__date">{{ $notification->created_at->translatedFormat('d F Y') }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
