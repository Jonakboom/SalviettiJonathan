<!DOCTYPE html>
<html lang="es" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvietti | Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    :root {
        
        --bs-success-base: #166b34;
        --bs-success-bg: #166b34;
        --bs-success-bg-subtle: #dcefe3;
        --bs-success-bg-muted: #b4dcc1;
        --bs-success-fg: #166b34;
        --bs-success-fg-emphasis: #0c3d1d;
        --bs-success-border: #7fb894;
        --bs-success-focus-ring: color-mix(in oklch, #166b34 50%, white);
        --bs-success-contrast: #ffffff;

        
        --bs-danger-base: #cf1a1f;
        --bs-danger-bg: #cf1a1f;
        --bs-danger-bg-subtle: #fbe0e1;
        --bs-danger-bg-muted: #f4b8ba;
        --bs-danger-fg: #b3161a;
        --bs-danger-fg-emphasis: #700e10;
        --bs-danger-border: #e8898c;
        --bs-danger-focus-ring: color-mix(in oklch, #cf1a1f 50%, white);
        --bs-danger-contrast: #ffffff;

        
        --bs-warning-base: #fdc916;
        --bs-warning-bg: #fdc916;
        --bs-warning-bg-subtle: #fff4cc;
        --bs-warning-bg-muted: #ffe699;
        --bs-warning-fg: #000000;
        --bs-warning-fg-emphasis: #000000;
        --bs-warning-border: #f0cf5a;
        --bs-warning-focus-ring: color-mix(in oklch, #fdc916 50%, white);
        --bs-warning-contrast: #000000;
    }
</style>
</head>
<body>

    <nav class="navbar md:navbar-expand bg-success sticky-top shadow" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="Salvietti" width="48" height="48">
            </a>

            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menú">
                <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>

            <dialog class="drawer drawer-end" tabindex="-1" id="menuPrincipal" aria-labelledby="menuPrincipalTitulo">
                <div class="drawer-header">
                    <h5 class="drawer-title" id="menuPrincipalTitulo">Menú</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Cerrar"></button>
                </div>
                <div class="drawer-body">
                    <ul class="navbar-nav me-auto mb-5 md:mb-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inventario.php">Inventario</a>
                        </li>
                    </ul>
                    <a class="btn-solid theme-warning" href="login.php">Iniciar sesión</a>
                </div>
            </dialog>
        </div>
    </nav>

    <main>
        <section class="container mt-7">
            <div id="carruselInicio" class="carousel slide" data-bs-autoplay="true">
                <div class="carousel-inner rounded-5">

                    <div class="carousel-item active">
                        <img src="img/banner-1.jpg" class="d-block w-100 object-fit-cover" width="1200" height="400" alt="Gaseosas Salvietti bien frías">
                        <div class="bg-danger fg-contrast-danger text-center p-7">
                            <h2 class="fs-2xl fw-bold mb-3">Refréscate con Salvietti</h2>
                            <p class="mb-0">Gaseosas de Bolivia para disfrutar bien frías.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/banner-2.jpg" class="d-block w-100 object-fit-cover" width="1200" height="400" alt="Amigos y familia compartiendo gaseosas">
                        <div class="bg-success fg-contrast-success text-center p-7">
                            <h2 class="fs-2xl fw-bold mb-3">Sabores para compartir</h2>
                            <p class="mb-0">Para la familia, los amigos y cada celebración.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/banner-3.jpg" class="d-block w-100 object-fit-cover" width="1200" height="400" alt="Variedad de sabores de gaseosas">
                        <div class="bg-warning fg-contrast-warning text-center p-7">
                            <h2 class="fs-2xl fw-bold mb-3">Una gaseosa para cada gusto</h2>
                            <p class="mb-0">Variedad de sabores para todos.</p>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Diapositiva 1"></button>
                        <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="1" aria-label="Diapositiva 2"></button>
                        <button type="button" data-bs-target="#carruselInicio" data-bs-slide-to="2" aria-label="Diapositiva 3"></button>
                    </div>
                    <div>
                        <button class="btn-icon btn-sm carousel-control-play-pause" type="button" data-bs-target="#carruselInicio" aria-label="Pausar" data-bs-pause-label="Pausar" data-bs-play-label="Reproducir">
                            <span class="carousel-icon-pause" aria-hidden="true"></span>
                            <span class="carousel-icon-play" aria-hidden="true"></span>
                        </button>
                        <button class="btn-icon btn-sm" type="button" data-bs-target="#carruselInicio" data-bs-slide="prev">
                            <span class="carousel-icon-prev" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="btn-icon btn-sm" type="button" data-bs-target="#carruselInicio" data-bs-slide="next">
                            <span class="carousel-icon-next" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="container text-center py-12">
            <h1 class="fs-4xl fw-bold fg-success">Sabor que se comparte</h1>
            <p class="fs-lg lg:col-8 mx-auto mb-7">
                Somos una empresa boliviana dedicada a elaborar gaseosas de distintos sabores,
                pensadas para acompañar cada momento.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <span class="badge theme-danger">Refrescantes</span>
                <span class="badge theme-warning">Para compartir</span>
                <span class="badge theme-success">Hechas en Bolivia</span>
            </div>
        </section>

        <section class="container pb-12">
            <div class="card card-subtle theme-warning hover-lift overflow-hidden">
                <div class="row g-0 align-items-center">

                    <div class="md:col-5">
                        <img src="img/destacado.jpeg" class="d-block w-100 object-fit-cover" width="800" height="800" alt="Gaseosa Salvietti sabor papaya">
                    </div>

                    <div class="md:col-7">
                        <div class="card-body p-9">
                            <div class="d-flex flex-wrap gap-3">
                                <span class="badge theme-danger">Sabor destacado</span>
                                <span class="badge badge-outline theme-success">Clásico</span>
                            </div>
                            <h2 class="fs-3xl fw-bold fg-emphasis-warning">Papaya Salvietti</h2>
                            <p class="fs-lg mb-0">
                                Dulce, tropical y burbujeante. Uno de los sabores más queridos de la marca,
                                perfecto para servir bien frío.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-subtle-warning py-12">
            <div class="container">
                <h2 class="fs-3xl fw-bold text-center fg-danger mb-9">Disfruta tu Salvietti</h2>

                <div class="row g-9">
                    <div class="md:col-6">
                        <h3 class="h4 mb-5">Cómo disfrutarla</h3>
                        <ol class="stepper stepper-vertical">
                            <li class="stepper-item align-items-start active theme-danger">
                                <div class="pt-1">
                                    <div class="fw-semibold">Enfríala</div>
                                    <div>Guárdala en el refrigerador unas horas antes de tomarla.</div>
                                </div>
                            </li>
                            <li class="stepper-item align-items-start active theme-success">
                                <div class="pt-1">
                                    <div class="fw-semibold">Sírvela</div>
                                    <div>Usa un vaso con hielo y destapa con cuidado.</div>
                                </div>
                            </li>
                            <li class="stepper-item align-items-start active theme-warning">
                                <div class="pt-1">
                                    <div class="fw-semibold">Compártela</div>
                                    <div>Una gaseosa sabe mejor en buena compañía.</div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="md:col-6">
                        <h3 class="h4 mb-5">Para cada ocasión</h3>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fw-semibold">Almuerzos en familia</div>
                                    <div class="small">El acompañante ideal de la comida del domingo.</div>
                                </div>
                                <span class="badge theme-success">Hogar</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fw-semibold">Cumpleaños y fiestas</div>
                                    <div class="small">Para brindar con todos los invitados.</div>
                                </div>
                                <span class="badge theme-danger">Fiesta</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fw-semibold">Reuniones con amigos</div>
                                    <div class="small">Siempre hay lugar para una más en la mesa.</div>
                                </div>
                                <span class="badge theme-warning">Amigos</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fw-semibold">Días de calor</div>
                                    <div class="small">Bien fría, para refrescarte al instante.</div>
                                </div>
                                <span class="badge theme-success">Verano</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="container py-12">
            <div class="row align-items-center g-9">
                <div class="md:col-6">
                    <h2 class="fs-3xl fw-bold fg-success mb-7">Conoce Salvietti</h2>

                    <div class="accordion theme-success">
                        <details class="accordion-item" name="acordeonSalvietti" open>
                            <summary class="accordion-header">
                                ¿Quiénes somos?
                                <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m2 5 6 6 6-6"/></svg>
                            </summary>
                            <div class="accordion-body">
                                Somos una empresa boliviana de gaseosas. Nuestro objetivo es acompañar
                                cada momento con un sabor refrescante.
                            </div>
                        </details>

                        <details class="accordion-item" name="acordeonSalvietti">
                            <summary class="accordion-header">
                                ¿Qué elaboramos?
                                <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m2 5 6 6 6-6"/></svg>
                            </summary>
                            <div class="accordion-body">
                                Gaseosas en distintos sabores, pensadas para toda la familia.
                            </div>
                        </details>

                        <details class="accordion-item" name="acordeonSalvietti">
                            <summary class="accordion-header">
                                Nuestro compromiso
                                <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m2 5 6 6 6-6"/></svg>
                            </summary>
                            <div class="accordion-body">
                                Llevar a cada mesa boliviana una gaseosa con sabor y calidad.
                            </div>
                        </details>
                    </div>
                </div>

                <div class="md:col-6">
                    <img src="img/nosotros.jpg" class="img-fluid rounded-5 shadow" width="800" height="600" alt="Botellas de gaseosa Salvietti">
                </div>
            </div>
        </section>
    </main>

    <div class="row g-0" aria-hidden="true">
        <div class="col-4 bg-danger py-2"></div>
        <div class="col-4 bg-warning py-2"></div>
        <div class="col-4 bg-success py-2"></div>
    </div>

    <footer class="bg-success text-center py-9" data-bs-theme="dark">
        <div class="container">
            <img src="img/logo.png" alt="Salvietti" width="64" height="64" class="mb-3">
            <p class="small mb-5">Gaseosas de Bolivia</p>
        </div>
    </footer>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>