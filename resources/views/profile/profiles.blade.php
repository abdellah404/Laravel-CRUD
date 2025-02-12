<x-master title="profiles" >

    <div class="row">

        @foreach ($profiles as $profile)
    <x-profiles-card :profile="$profile"></x-profiles-card>
    @endforeach
    </div>




</x-master>
