
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Gorest user</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
         <div class="card ">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ url('/user/update') }}">
         @csrf
         <input type="hidden" name="user_id" value="{{ $finaldata['id'] }}">
        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name"  value="{{ $finaldata['name'] }}" disabled/>
          </div>
         
          <div class="form-group">
              <label for="price">Email :</label>
              <input type="email" class="form-control" name="email"  value="{{ $finaldata['email'] }}" disabled/>
          </div>
          <div class="form-group">
              <label for="quantity">Gender:</label>
              <input type="text" class="form-control" name="gender"  value="{{ $finaldata['gender'] }}"disabled/>
          </div>
          <div class="form-group">
              <label for="quantity">Status:</label>
              <input type="text" class="form-control" name="status"  value="{{ $finaldata['status'] }}"disabled/>
          </div>

      </form>
  </div>
</div>
    </div>
  </div>
