@extends("admin.layout")

@section('sidebar')
    <ul class="nav">
        <li class="nav-item">
            <a href="/admin">
                <i class="la la-dashboard"></i>
                <p>Dashboard</p>
                <span class="badge badge-count">5</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin-components">
                <i class="la la-table"></i>
                <p>Components</p>
                <span class="badge badge-count">14</span>
            </a>
        </li>
        <li class="nav-item active">
            <a href="/admin-artisan">
                <i class="la la-users"></i>
                <p>Artisan</p>
                <span class="badge badge-count">50</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="tables.html">
                <i class="la la-th"></i>
                <p>Tables</p>
                <span class="badge badge-count">6</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="notifications.html">
                <i class="la la-bell"></i>
                <p>Notifications</p>
                <span class="badge badge-success">3</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="typography.html">
                <i class="la la-font"></i>
                <p>Typography</p>
                <span class="badge badge-danger">25</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="icons.html">
                <i class="la la-fonticons"></i>
                <p>Icons</p>
            </a>
        </li>
        <li class="nav-item update-pro">
            <button  data-toggle="modal" data-target="#modalUpdate">
                <i class="la la-hand-pointer-o"></i>
                <p>Update To Pro</p>
            </button>
        </li>
    </ul>


@endsection

@section('content')

<div class="container">
    <h3>Register Staff</h3>
    <form action="/action_page.php">
        <br>
        <h4>General Info</h4>
        <div class="row">
            <div class="form-group">
              <label for="fname">Name:</label>
              <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname">
            </div>
            <div class="form-group">
              <label for="position">Position:</label>
              <input type="text" class="form-control" id="position" placeholder="Position in the Company" name="position">
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" id="address" placeholder="Living Address" name="address">
            </div>
        </div>
        <br>
        <h4>Social Media</h4>
        <div class="row">
            <div class="form-group">
              <label for="fblink">Facebook:</label>
              <input type="url" class="form-control" id="fblink" placeholder="Facebook Address" name="fblink">
            </div>
            <div class="form-group">
              <label for="iglink">Instagram:</label>
              <input type="url" class="form-control" id="iglink" placeholder="Instagram Address" name="iglink">
            </div>
            <div class="form-group">
              <label for="ttlink">Twitter:</label>
              <input type="url" class="form-control" id="ttlink" placeholder="Twitter Address" name="ttlink">
            </div>
            <div class="form-group">
              <label for="lilink">LinkedIn:</label>
              <input type="url" class="form-control" id="lilink" placeholder="LinkedIn Address" name="lilink">
            </div>
        </div>
        <br>
        <h4>Photo</h4>
        <div class="row">
            <div class="form-group">
              <label for="avatar">Photo:</label>
              <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>



@endsection
