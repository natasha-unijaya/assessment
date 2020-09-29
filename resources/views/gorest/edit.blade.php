

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
      <form method="post" action="{{ url('/json/update') }}">
         @csrf
         <input type="hidden" name="id" value="{{ $finaldata['id'] }}">
        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name"  value="{{ $finaldata['name'] }}" />
          </div>
         
          <div class="form-group">
              <label for="price">Email :</label>
              <input type="text" class="form-control" name="email"  value="{{ $finaldata['email'] }}" />
          </div>
          <div class="form-group">
              <label for="quantity">Gender:</label>
              <input type="text" class="form-control" name="gender"  value="{{ $finaldata['gender'] }}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Status:</label>
              <input type="text" class="form-control" name="status"  value="{{ $finaldata['status'] }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>

      </form>
  </div>
</div>
    </div>
  </div>
