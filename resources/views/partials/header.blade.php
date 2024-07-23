<header>
<nav>
    <div>
        <h1>Animal Reserve</h1>
        <ul>
            <li>
                <a class="{{Route::currentRouteName() == 'animals.index' ? 'active' : ''}}" href="{{ route('animals.index') }}">Home</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'animals.create' ? 'active' : ''}}" href="{{ route('animals.create') }}">Create new Animal</a>
            </li>
        </ul>
    </div>
</nav>
</header>
