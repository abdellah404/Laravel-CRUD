<x-master title="homepage">

{{-- <x-alert type="warning" >  hey </x-alert> --}}

<div class="row">

    @foreach ($users as $user)
<x-users-card :user="$user "></x-users-card>
@endforeach
</div>

</x-master>
