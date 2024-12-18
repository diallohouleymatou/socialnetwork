<style>
    header {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .navbar-nav .nav-link {
        font-size: 16px;
        transition: color 0.3s;
    }
    .navbar-nav .nav-link:hover {
        color: #f8f9fa;
        text-decoration: underline;
    }
    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.5);
    }
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30' fill='white'%3E%3Cpath stroke='white' stroke-width='2' d='M5 7h20M5 15h20M5 23h20'/%3E%3C/svg%3E");
    }
</style>
<div class="header">
    <h1>Link-Up</h1>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">Link-Up</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Inscription</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
