<div class="d-flex flex-column flex-shrink-0 bg-light h-full fixed-top" style="width: 4.75rem;height:100%;">
    <img class="p-3" src="/images/logoPB.png" alt="logo">

    <ul class="nav nav-flush flex-column mb-auto text-center">

        <li x-data="{ open: false }" class="nav-item">
            <a href="#" class="nav-link bg-primary text-white py-3 border-bottom" aria-current="page"
                @mouseover="open = true">
                <i class="bi bi-house"></i>
            </a>
        </li>


        <li class="nav-item">
            <a href="#" class="nav-link bg-primary text-white py-3 border-bottom" aria-current="page">
                <i class="bi bi-list-columns-reverse"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link bg-primary text-white py-3 border-bottom" aria-current="page">
                <i class="bi bi-person-fill-add"></i>
            </a>
        </li>
    </ul>
    <div class="dropdown border-top">
        <a href="#"
            class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
            id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
