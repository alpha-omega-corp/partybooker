<div class="admin-messages">
    @foreach ($notifications as $message)
        <div class="message-card">

            <div @class([
                'message-header',
                'bg-warning' => !$message->is_resolved,
                'bg-primary' => $message->is_resolved,
            ])>
                <div class="message-content">
                    @include('app.admin.message.partials.message', ['item' => $message])
                </div>
                <div class="message-user">
                    @if($message->user)
                        <span class="badge text-bg-blue text-white">{{$message->user->name}}</span>
                    @else
                        <span class="badge text-bg-secondary">{{__('home.guest')}}</span>
                    @endif
                </div>
            </div>

            <div class="message-information">
                <x-icon.text :icon="$dateIcon" :text="$message->created_at"/>
                <x-icon.text :icon="$emailIcon" :text="$message->email"/>
                <x-icon.text :icon="$phoneIcon" :text="$message->phone"/>


                @if ($message->notifiable->plan)
                    <x-icon.text icon="heroicon-o-shopping-cart">
                        <x-plan.badge :plan="$message->notifiable->plan"/>
                    </x-icon.text>
                @endif

            </div>

            <div class="message-action">
                <form
                    method="POST"
                    action="{{route('admin.notification.status', ['notification' => $message])}}"
                >
                    @csrf
                    @method('PUT')

                    @if(!$message->is_resolved)
                        <button type="submit" class="btn btn-secondary w-100 tippy rounded-0"
                                data-tippy-content="Mark resolved">
                            @svg('heroicon-o-check-circle')
                        </button>
                    @else
                        <button type="submit" class="btn btn-secondary w-100 tippy rounded-0"
                                data-tippy-content="Mark unresolved">
                            @svg('heroicon-o-arrow-uturn-left')
                        </button>
                    @endif
                </form>
            </div>
        </div>
    @endforeach
</div>

