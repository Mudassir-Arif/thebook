 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Author</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link {{Request::is('dashboard') ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="/add_book" class="nav-item nav-link {{Request::is('add_book') ? 'active' : ''}}"><i class="fa fa-th me-2"></i>Add Book</a>
                    <a href={{url('/all_author_books' , Auth::user()->name)}} class="nav-item nav-link {{Request::is('all_books') ? 'active' : ''}}"><i class="fa fa-keyboard me-2"></i>All Books</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->