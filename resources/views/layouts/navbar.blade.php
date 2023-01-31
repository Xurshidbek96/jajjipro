<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <img src="/assets/img/logo jp.png" width="90" height="90" alt="lorem">
        <a href="/" class="navbar-brand font-weight-bold text-secondary" style="font-size: 25px;">
            <span class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">J</font><font color="#9C0568">a</font><font color="blue">j</font><font color="#06960E">j</font><font color="#9C0568">i</font><br>
                <font color="red">P</font><font color="black">r</font><font color="#E0D605">o</font><font color="#33F7EB">f</font><font color="#EDB426">e</font><font color="red">s</font><font color="#26D2ED">s</font><font color="#A54A4A">o</font><font color="blue">r</font></span>
                </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="/" class="nav-item nav-link @yield('home')">Bosh sahifa</a>
                <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                <a href="/front/groups" class="nav-item nav-link @yield('groups')">Sinflar</a>
                <a href="/front/teachers" class="nav-item nav-link @yield('teachers')">O'qituvchilar</a>
                <a href="/front/wins" class="nav-item nav-link @yield('wins')">Yutuqlar</a>
                <a href="/front/gallery" class="nav-item nav-link @yield('gallery')">Galereya</a>
                <a href="/front/blogs" class="nav-item nav-link @yield('blogs')">Maqolalar</a>
                <a href="/front/contact" class="nav-item nav-link @yield('contact')">Aloqa</a>
            </div>
            </div>
            <a class="btn btn-primaryy px-4" href="Uzb"><img style="padding: 3px;" src="/assets/img/Uzbekistan-Flag-icon.png" width="35" height="35" alt="lorem"></a>
            <a class="btn btn-primaryy px-4" href="Uzb"><img style="padding: 3px;" src="/assets/img/united-states-of-america-flag-png-xl.png" width="35" height="35" alt="lorem"></a>
            <a class="btn btn-primaryy px-4" href="Uzb"><img style="padding: 3px;" src="/assets/img/Russia-flag.png" width="35" height="35" alt="lorem"></a>
            <!-- <a  href="tel:+998996111300" class="btn btn-primary px-4"><img src="/assets/img/missed-call.png" width="35" height="35" alt="lorem">  Qong'iroq qiling</a> -->
        </div>
    </nav>
</div>
<!-- Navbar End -->
