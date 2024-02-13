<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                <a
                    href="{{ route('dashboard') }}"
                    class="nav-link"
                >
                    <i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('user*')) ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="fas fa-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('quiz*')) ? 'active' : '' }}">
                <a href="{{ route('quiz.index') }}" class="nav-link">
                    <i class="fas fa-question"></i>
                    <span>Quiz</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('article*')) ? 'active' : '' }}">
                <a href="{{ route('article.index') }}" class="nav-link">
                    <i class="fas fa-newspaper"></i>
                    <span>Artikel</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->is('video*')) ? 'active' : '' }}">
                <a href="{{ route('video.index') }}" class="nav-link">
                    <i class="fas fa-video"></i>
                    <span>Video</span>
                </a>
            </li>
        </ul>
    </div>
</nav>