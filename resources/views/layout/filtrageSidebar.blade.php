<?php 
    $categorie = ['Histoire', 'Voyage', 'Droit', 'Affaires', 'Science', 'Finance', 'Sport', 'Manga'];
    $Releases = ['10' , '20', '30'];
    use App\Http\Controllers\CategoryController;
    $authaur = CategoryController::getAuthaur();
?>
<section class="sidebar sidebar-hide">
    <div class="close-box">
        <i class="fa-solid fa-xmark hide-sidebar"></i>
    </div>
    <div class="title"> Prix : </div>
    <form action="/searchAdvanced" method="Post">
        @csrf
        <div class="range-box">
            <div>
                <input type="range" class="rangeValueMin" min="0" max="1000" step="1" requied value="0">
                <div class="line">
                    Min : <input type="text" name="rangeValueMin" class="rangeValueMinValue" readonly value="0">
                </div>
            </div>
            <div>
                <input type="range" class="rangeValueMax" min="0" max="1000" step="1" requied value="0">
                <div class="line">
                    Max : <input type="text" name="rangeValueMax" class="rangeValueManValue" readonly value="0">
                </div>
            </div>
        </div>
        <button class="btn" style="display: flex;align-items: center" type="submit"> <span></span> &nbsp; Search &nbsp; <ion-icon name="search"></ion-icon> &nbsp;</button>
    </form>

    <div class="title"> Categorie : </div>
    <div class="dropdown-list">
        <input type="text" name="categorie" placeholder="Category..." class="Dropds" readonly>
        <div class="option">
            @foreach ($categorie as $item)
                <div onclick="showDropdownContent('{{$item}}')"> {{ $item }} </div>
            @endforeach
        </div>
    </div>

    <div class="title"> Nouvelles : </div>
    <div>
        @foreach ($Releases as $item)
            <a href="/searchReleases/{{ $item }}" class="d-flex">
                <span class="text">Last {{ $item }} days</span>
                <span> <i class="fa-solid fa-up-right-from-square"></i> </span>
            </a>
        @endforeach
        <a href="/nouveautes" class="d-flex">
            <span class="text"> Nouveautés</span>
            <span> <i class="fa-solid fa-up-right-from-square"></i> </span>
        </a>
    </div>

    <div class="title"> Auteur :</div>
    <div>
        @foreach ($authaur as $item)
            <div class="d-flex">
                <a href="/searchauthor/{{ $item->author }}"> {{ $item->author }}</a>
                <span> <i class="fa-solid fa-at"></i> </span>
            </div>
        @endforeach
    </div>
</section>