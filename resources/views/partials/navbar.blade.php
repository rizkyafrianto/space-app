<nav class="navbar navbar-expand bg-body-tertiary">
   <div class="container-fluid">
      <div class="d-flex">
         <a class="navbar-brand" href="/"><i class="bi bi-rocket-takeoff"></i></a>

         {{-- fitur search --}}
         <div class="search-input">
            <form action="/" class="d-flex">
               <input type="text" class="form-control me-2" name="search" value="{{ request('search') }}"
                  autocomplete="off" placeholder="Search...">
               <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
         </div>
      </div>

      <div class="navbar-collapse justify-content-end">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="/dashboard/profile/create"><i
                     class="bi bi-pencil-square">
                     Write</i></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><i class="bi bi-bell"></i></a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                     class="bi bi-person-circle"></i>
               </a>
               <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                  <li><a class="dropdown-item btn btn-tertiary" href="/dashboard/profile"><i
                           class="bi bi-person-fill"></i>
                        Profile</a>
                  </li>
                  <li>
                     {{-- logout for user --}}
                     <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item btn btn-tertiary"><i
                              class="bi bi-box-arrow-in-right"></i>
                           Sign Out</button>
                     </form>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
</nav>
