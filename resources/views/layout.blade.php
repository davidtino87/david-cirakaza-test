<!DOCTYPE html>
<html lang="en">

<head>
    <x-meta></x-meta>
</head>

<body>
    <header>
        <div class="bg-warning py-2">
            <!-- le conteneur fenêtre -->
<div class="marquee-rtl">
    <!-- le contenu défilant -->
    <div>Le message que l'on veut voir défilé horizontalement...</div>
</div>
        </div>

        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Brand</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                    </ul>
                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    </header>

    <x-script></x-script>
</body>

</html>
