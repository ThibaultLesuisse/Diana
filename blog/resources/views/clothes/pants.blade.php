@extends('layoutCloset')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Shirts</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <img src="img/diana_character.png" id="diana_character_login" />
        </div>
        <div class="col-sm-8">
            <img src="img/open_closet_filled.png" alt="closet" usemap="#closetMap" id="login_closet" />
            <map name="closetMap" id="closetMap">
                <area alt="Jackets" title="Jackets" href="#" shape="poly" coords="198,72,208,99,216,78,225,91,233,76,243,100,253,75,265,95,271,77,279,91,287,83,296,94,305,84,317,116,320,168,318,180,314,216,313,236,312,250,303,264,286,253,285,232,267,227,261,218,249,215,247,229,240,232,231,232,223,241,213,236,207,230,203,243,190,240,191,220,184,214,181,227,166,223,183,111" />
                <area alt="Hats" title="Hats" href="#" shape="poly" coords="477,80,531,77,579,80,583,94,593,105,587,110,572,100,563,103,527,106,475,107,467,106,469,95,473,83" />
                <area alt="Pants" title="Pants" href="#" shape="poly" coords="410,191,443,197,437,207,441,211,438,221,442,226,446,234,439,245,434,249,411,251,381,249,379,240,366,237,371,228,365,218,369,209,373,199" />
                <area alt="Shirts" title="Shirts" href="#" shape="poly" coords="382,256,437,255,439,311,373,312" />
                <area alt="Underwear" title="Underwear" href="#" shape="poly" coords="387,339,415,336,425,349,431,368,386,371,380,351" />
                <area alt="Socks" title="Socks" href="#" shape="poly" coords="410,387,450,426,418,451,388,435,374,404" />
                <area alt="Shoes" title="Shoes" href="#" shape="poly" coords="199,362,308,358,323,370,341,435,334,453,213,449,172,449,170,416,177,380" />
            </map>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
@endsection
