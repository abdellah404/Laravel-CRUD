<div class="col-sm-4 mb-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body" align="center">
          <h5 class="card-title">{{$profile['name']}}</h5>
          <p class="card-text">{{$profile['bio']}}</p>
          <a href="{{ route('profiledetails', ['id' => $profile['id']]) }}" class="btn btn-primary">Show More</a>
        </div>
      </div>

</div>
