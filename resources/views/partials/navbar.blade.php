<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light" style="background-color: #D9D9D9;">
    <div class="container-md">
        
        <a class="navbar-brand" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
              </svg>
        </a>

        <ul class="navbar-nav justify-content-end row">
            <li class="nav-item col">
                <a class="nav-link {{ ($title==="Home")? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item col">
                <a class="nav-link {{ ($title==="News")? 'active' : '' }}" href="/news">News</a>
            </li>
            <li class="nav-item col">
                <a class="nav-link {{ ($title==="Division")? 'active' : '' }}" href="/division">Division</a>
            </li>
            <li class="nav-item col">
                <a class="nav-link {{ ($title==="About")? 'active' : '' }}" href="/about">About</a>
            </li>
        </ul>
    </div>
</nav>