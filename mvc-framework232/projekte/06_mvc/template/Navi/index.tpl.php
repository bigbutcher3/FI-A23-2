<div class="row mt-3">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                        foreach (TEMPLATEINFOJSON as $item) {
                            echo '<li class="nav-item">';
                            /** @var string $ActiveItem */
                            echo '<a class="nav-link' . (($ActiveItem === $item['controllerName']) ? ' active' : '') . '" href="' . $item['href'] . '">' . $item['button'] . '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
