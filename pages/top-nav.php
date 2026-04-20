<div class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed text-sm">
   <!-- <div class="preloader2">
		<div class="loading">
			<img src="image/ccc.gif" width="400"><br>
		</div>
	</div>  -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="padding: 0.5rem 1rem; border-bottom: 2px solid #C74634; background-color: #211E1C !important;">
        <a class="navbar-brand ps-3 d-flex align-items-center" href="#" style="color: #ecf0f1; font-weight: bold;">
            <img src=""  alt="Image Logo" height="40" class="me-2"> 
        </a>
        <div class="ms-auto me-3 d-none d-md-inline text-white-50" style="font-size: 0.9rem;">
            <i class="fas fa-clock me-1"></i>
            <span class="text-muted">|</span>
            <i class="fas fa-calendar-alt me-1"></i> <?= date('l, d F Y') ?>    
            
        </div>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white ml-2" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mentalleger.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Your Name Here</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
            <script>
                const usernameElement = document.querySelector('#dropdownUser1 strong');
                const fullName = usernameElement.textContent.trim();
                const firstName = fullName.split(" ")[0]; // take only the first word
                usernameElement.textContent = firstName;
            </script>
        </div>
    </nav>
</div>