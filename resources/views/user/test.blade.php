<?php
    use Illuminate\Support\Facades\Auth;
?>
<div>
    <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate ad, odio debitis maiores eum adipisci. Facere qui expedita veniam laudantium ducimus omnis recusandae mollitia inventore sed rerum! Sequi, aperiam.
    </h5>
    {{ Auth::user() }}
</div>

    <a href="/logout">Deconnexion</a>