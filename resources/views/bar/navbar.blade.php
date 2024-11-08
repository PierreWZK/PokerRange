@vite('resources/css/nav_side_bar.css')

<nav>
    <div id="navbar">
        {{-- <div id="titleProject">PokerRange</div> --}}
        <div id="titleProject"><img src="{{ asset('logo.png') }}" alt=""></div>
        <div id="navbar_2">

            <div id="position">
                <button id="BTN" type="button" class="buttonNavbar buttonNavbar_selected" onclick="setSelectedButtonNav(this)">Button</button>
                <button id="SB" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">Small Blind</button>
                <button id="BB" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">Big Blind</button>
                <button id="UTG" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">UTG</button>
                <button id="LJ" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">Low Jack</button>
                <button id="HJ" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">High Jack</button>
                <button id="CO" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">Cut Off</button>
            </div>
            <div id="stack">
                <button id="15-19" type="button" class="buttonNavbar buttonNavbar_selected" onclick="setSelectedButtonNav(this)">15 à 19 BB</button>
                <button id="20-26" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">20 à 26 BB</button>
                <button id="27-40" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">27 à 40 BB</button>
                <button id="40+" type="button" class="buttonNavbar" onclick="setSelectedButtonNav(this)">40+ BB</button>
            </div>
        </div>
    </div>
</nav>
