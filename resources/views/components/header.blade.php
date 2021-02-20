<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <!-- <a class="navbar-brand" href="#">Fixed navbar</a> -->
    <a class="navbar-brand" href="#">Task HERO</a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    ホーム<span class="sr-only">（現在位置）</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">リンク</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">無効</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input
                class="form-control mr-sm-2"
                type="text"
                placeholder="検索"
                aria-label="Search"
            />
            <button
                class="btn btn-outline-success my-2 my-sm-0"
                type="submit"
            >
                検索
            </button>
        </form>
    </div>
</nav>