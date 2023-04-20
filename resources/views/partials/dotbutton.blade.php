<span class="d-flex justify-content-end">
   <ul class="navbar-nav">
      <li class="nav-item dropdown">
         <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i>
         </a>
         <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
            {{-- edit button --}}
            <li><a class="dropdown-item btn btn-tertiary" href="">Save</a>
            </li>
            <li><a class="dropdown-item btn btn-tertiary" href="">Report</a>
            </li>
            {{-- delete button --}}
            @can('admin')
               <li>
                  <form action="/dashboard/profile/{{ $post->slug }}" method="post">
                     @csrf
                     @method('delete')
                     <button class="dropdown-item btn btn-tertiary text-danger"
                        onclick="return confirm('are you sure?')">Delete</button>
                  </form>
               </li>
            @endcan
         </ul>
      </li>
   </ul>
</span>
