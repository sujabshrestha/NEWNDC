@component('mail::message')

@section('mailLogo')
    <a href="{{ route('frontend.home') }}" >
        <img src="{{ getOriginalUrl(returnSiteSetting('logo')) ?? '' }}" style="width: 120px;" alt="Egp Nepal Logo">
    </a>
@endsection

@component('mail::panel')
    Thank you for Signing with <a href='{{ env('site_url') }}' > {{ returnSiteSetting('title') ?? 'Egp Nepal'}} </a>

    <br>
@endcomponent

@component('mail::table')
|                                 |                            |
| ------------------              |:-------------------------: |
| <strong>Name:</strong>           | {{ $details['name'] }}     |
| <strong>Email:</strong>          | {{ $details['email'] }}    |
| <strong>Phone No:</strong>       | {{ $details['phone_no'] }} |
@endcomponent

@component('mail::button', ['url' => env('site_url').'/auth/verify/'.$details['id'].'/','color' => 'success'])
Verify Email
@endcomponent


Thanks,<br>
{{ returnSiteSetting('title') ?? 'EGP Nepal' }}

@endcomponent
