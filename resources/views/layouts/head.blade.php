 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         {{-- <li class="nav-item d-none d-sm-inline-block">
             <a href="{{ url('/') }}" class="nav-link">Home</a>
         </li> --}}
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         {{-- <li class="nav-item">
             <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                 <i class="fas fa-search"></i>
             </a>
             <div class="navbar-search-block">
                 <form class="form-inline">
                     <div class="input-group input-group-sm">
                         <input class="form-control form-control-navbar" type="search" placeholder="Search"
                             aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-navbar" type="submit">
                                 <i class="fas fa-search"></i>
                             </button>
                             <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </li> --}}

         <li class="nav-item">
             <div class="theme-switch-wrapper nav-link">
                 <label class="theme-switch" for="checkbox">
                     <input type="checkbox" id="checkbox">
                     <span class="slider round"></span>
                 </label>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
         {{-- <form action="{{ route('logout') }}" method="post" style="d-inline">
             @csrf
             <li class="nav-item">
                 <button class="btn btn-danger" type="submit"
                     onclick="return confirm('Anda yakin untuk logout!')">Logout <i
                         class="bi bi-box-arrow-right"></i></button>
             </li>
         </form> --}}
     </ul>
 </nav>
 <!-- /.navbar -->
 <script>
     var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
     var currentTheme = localStorage.getItem('theme');
     var mainHeader = document.querySelector('.main-header');

     if (currentTheme) {
         if (currentTheme === 'dark') {
             if (!document.body.classList.contains('dark-mode')) {
                 document.body.classList.add("dark-mode");
             }
             if (mainHeader.classList.contains('navbar-light')) {
                 mainHeader.classList.add('navbar-dark');
                 mainHeader.classList.remove('navbar-light');
             }
             toggleSwitch.checked = true;
         }
     }

     function switchTheme(e) {
         if (e.target.checked) {
             if (!document.body.classList.contains('dark-mode')) {
                 document.body.classList.add("dark-mode");
             }
             if (mainHeader.classList.contains('navbar-light')) {
                 mainHeader.classList.add('navbar-dark');
                 mainHeader.classList.remove('navbar-light');
             }
             localStorage.setItem('theme', 'dark');
         } else {
             if (document.body.classList.contains('dark-mode')) {
                 document.body.classList.remove("dark-mode");
             }
             if (mainHeader.classList.contains('navbar-dark')) {
                 mainHeader.classList.add('navbar-light');
                 mainHeader.classList.remove('navbar-dark');
             }
             localStorage.setItem('theme', 'light');
         }
     }

     toggleSwitch.addEventListener('change', switchTheme, false);
 </script>
