<x-master title="profiles" >
    <table class="table">


        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Bio</th>
        </tr>

        @foreach ($profiles as $profile)

        <tr>
            <td>{{$profile['id']}}</td>
            <td>{{$profile['name']}}</td>
            <td>{{$profile['email']}}</td>
            <td>{{Str::limit($profile['bio'] ,50)}}</td>
            <td><a href="{{route('profiledetails' , $profile->id)}}" class="btn btn-primary" >ashow more</a></td>
        </tr>

        @endforeach




    </table>



</x-master>
