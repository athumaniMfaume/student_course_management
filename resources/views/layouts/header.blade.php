<nav
class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
>
<div class="container-fluid">
  <nav
    class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
  >
    <div class="input-group">
      <div class="input-group-prepend">
        <button type="submit" class="btn btn-search pe-1">
          <i class="fa fa-search search-icon"></i>
        </button>
      </div>
      <input
        type="text"
        placeholder="Search ..."
        class="form-control"
      />
    </div>
  </nav>

  <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
    <li
      class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
    >
      <a
        class="nav-link dropdown-toggle"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-expanded="false"
        aria-haspopup="true"
      >
        <i class="fa fa-search"></i>
      </a>
      <ul class="dropdown-menu dropdown-search animated fadeIn">
        <form class="navbar-left navbar-form nav-search">
          <div class="input-group">
            <input
              type="text"
              placeholder="Search ..."
              class="form-control"
            />
          </div>
        </form>
      </ul>
    </li>

   
    
    
    <li class="nav-item topbar-user dropdown hidden-caret">
      <a
        class="dropdown-toggle profile-pic"
        data-bs-toggle="dropdown"
        href="#"
        aria-expanded="false"
      >
        <div class="avatar-sm">
          <img
            src="{{asset('')}}assets/img/profile.jpg"
            alt="..."
            class="avatar-img rounded-circle"
          />
        </div>
        <span class="profile-username">
          <span class="op-7">Hi,</span>
          <span class="fw-bold">Hizrian</span>
        </span>
      </a>
      <ul class="dropdown-menu dropdown-user animated fadeIn">
        <div class="dropdown-user-scroll scrollbar-outer">
          <li>
            <div class="user-box">
              <div class="avatar-lg">
                <img
                  src="{{asset('')}}assets/img/profile.jpg"
                  alt="image profile"
                  class="avatar-img rounded"
                />
              </div>
              <div class="u-text">
                <h4>Hizrian</h4>
                <p class="text-muted">hello@example.com</p>
                <a
                  href="profile.html"
                  class="btn btn-xs btn-secondary btn-sm"
                  >View Profile</a
                >
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">My Balance</a>
            <a class="dropdown-item" href="#">Inbox</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Account Setting</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </div>
      </ul>
    </li>
  </ul>
</div>
</nav>
<!-- End Navbar -->
</div>

<div class="container">
<div class="page-inner">
<div class="page-header">
  <h3 class="fw-bold mb-3">Forms</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home">
      <a href="#">
        <i class="icon-home"></i>
      </a>
    </li>
    <li class="separator">
      <i class="icon-arrow-right"></i>
    </li>
    <li class="nav-item">
      <a href="#">Forms</a>
    </li>
    <li class="separator">
      <i class="icon-arrow-right"></i>
    </li>
    <li class="nav-item">
      <a href="#">Basic Form</a>
    </li>
  </ul>
</div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header">

        <div class="card-title">
            <a href="{{route('courses.index')}}" style="color: white" class="btn btn-primary">View courses</a>
            @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            
            
       
        </div>
      </div>
      <div class="card-body">
        
          <div class="col-md-6 col-lg-8">

           <form action="{{route('courses.store')}}" method="POST">
                @csrf
            <div class="form-group">
                <label for="email2">Course Name</label>
                <input
                  type="name"
                  name="course_name"
                  class="form-control"
                  placeholder="Enter Name"
                />
                @error('course_name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
               
              </div>



            <div class="form-group">
              <label for="email2">Description</label>
              <textarea
                type="text"
                name="description"
                class="form-control"
                placeholder="Enter Description"
              ></textarea>

              @error('description')
              <p class="text-danger">{{$message}}</p>
          @enderror
             
            </div>
           

            <div class="form-group">

            <button type="submit" class="btn btn-primary">Add</button>
            </div>
          
          
        </form>
        
      </div>
     
    </div>
  </div>
</div>
</div>
</div>

<footer class="footer">
<div class="container-fluid d-flex justify-content-between">
<nav class="pull-left">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="http://www.themekita.com">
        ThemeKita
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"> Help </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"> Licenses </a>
    </li>
  </ul>
</nav>