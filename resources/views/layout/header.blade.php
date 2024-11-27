        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ url('index') }}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('index') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('about-us') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('services') }}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('blog') }}" class="dropdown-item">Blog Grid</a>
                            <a href="{{ url('blog-detail') }}" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('pricing-plan') }}" class="dropdown-item">Pricing Plan</a>
                            <a href="{{ url('feature') }}" class="dropdown-item">Our features</a>
                            <a href="{{ url('team-members') }}" class="dropdown-item">Team Members</a>
                            <a href="{{ url('testimonials') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ url('quote') }}" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="#" class="btn btn-primary py-2 px-4 ms-3">Download Pro
                    Version</a>
            </div>
        </nav>