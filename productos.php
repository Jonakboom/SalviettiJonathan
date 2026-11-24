<!DOCTYPE html>
<html lang="es" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvietti | Productos</title>

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
            <a class="navbar-brand" href="index.html">
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
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="productos.html">Productos</a>
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

        <header class="bg-subtle-warning text-center py-12">
            <div class="container">
                <h1 class="fs-4xl fw-bold fg-success">Nuestros productos</h1>
                <p class="fs-lg lg:col-8 mx-auto mb-7">
                    Gaseosas, agua y jugos Salvietti: conoce todos los sabores y presentaciones.
                </p>
                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <a href="#gaseosas" class="btn-solid theme-success">Gaseosas</a>
                    <a href="#agua-jugos" class="btn-solid theme-danger">Agua y jugos</a>
                    <a href="#presentaciones" class="btn-solid theme-warning">Presentaciones</a>
                </div>
            </div>
        </header>

        <section id="gaseosas" class="container py-12">
            <h2 class="fs-3xl fw-bold fg-success mb-9">Gaseosas</h2>
            <div class="row g-7">

                <div class="md:col-4">
                    <div class="card card-subtle theme-warning hover-lift h-100 overflow-hidden">
                        <img src="img/papaya.jpg" class="card-img-top object-fit-cover" width="400" height="300" alt="Gaseosa Salvietti sabor papaya">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Papaya</h3>
                            <p class="mb-0">Dulce, tropical y burbujeante.</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-4">
                    <div class="card card-subtle theme-danger hover-lift h-100 overflow-hidden">
                        <img src="img/kinotto.jpeg" class="card-img-top object-fit-cover" width="400" height="300" alt="Gaseosa Salvietti sabor cola">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Kinotto Cola</h3>
                            <p class="mb-0">El sabor clásico para toda ocasión.</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-4">
                    <div class="card card-subtle theme-success hover-lift h-100 overflow-hidden">
                        <img src="img/lima-limon.jpeg" class="card-img-top object-fit-cover" width="400" height="300" alt="Gaseosa Salvietti sabor lima limón">
                        <div class="card-body">
                            <h3 class="h5 fw-bold">Lima limón</h3>
                            <p class="mb-0">Cítrica y refrescante, bien fría.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="agua-jugos" class="bg-subtle-danger py-12">
            <div class="container">
                <h2 class="fs-3xl fw-bold fg-danger mb-9">Agua y jugos</h2>
                <div class="row g-7">

                    <div class="md:col-4">
                        <div class="card hover-lift h-100 overflow-hidden">
                            <img src="img/agua.jpeg" class="card-img-top object-fit-cover" width="400" height="300" alt="Agua Salvietti">
                            <div class="card-body">
                                <h3 class="h5 fw-bold">Agua</h3>
                                <p class="mb-0">Agua pura para el día a día.</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-4">
                        <div class="card hover-lift h-100 overflow-hidden">
                            <img src="img/jugo-durazno.jpeg" class="card-img-top object-fit-cover" width="400" height="300" alt="Jugo Salvietti sabor durazno">
                            <div class="card-body">
                                <h3 class="h5 fw-bold">Jugo de durazno</h3>
                                <p class="mb-0">Con el sabor natural de la fruta.</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-4">
                        <div class="card hover-lift h-100 overflow-hidden">
                            <img src="img/jugo-naranja.jpeg" class="card-img-top object-fit-cover" width="400" height="300" alt="Jugo Salvietti sabor naranja">
                            <div class="card-body">
                                <h3 class="h5 fw-bold">Jugo de naranja</h3>
                                <p class="mb-0">Fresco y lleno de sabor.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="presentaciones" class="container py-12">
            <h2 class="fs-3xl fw-bold fg-success mb-9">Presentaciones</h2>

            <div class="row g-9 align-items-start">
                <div class="md:col-6">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Envase</th>
                                    <th scope="col">Tamaño</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Botella personal</td>
                                    <td>350 ml</td>
                                </tr>
                                <tr>
                                    <td>Botella mediana</td>
                                    <td>1 litro</td>
                                </tr>
                                <tr>
                                    <td>Botella familiar</td>
                                    <td>2 litros</td>
                                </tr>
                                <tr>
                                    <td>Botella grande</td>
                                    <td>3 litros</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
            <hr>
        </div>
    </footer>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>