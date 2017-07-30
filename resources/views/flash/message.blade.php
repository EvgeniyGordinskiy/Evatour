@if (Session::has('flash_message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="alert alert-{{ Session::get('flash_notification_level') }} {{Session::has('flash_message_important')? 'alert-important' :'' }}    ">
       @if (Session::has('flash_message_important'))
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       @endif
            {{ Session::get('flash_message') }}
        </div>
    @endif
@endif