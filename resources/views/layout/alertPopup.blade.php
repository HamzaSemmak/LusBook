@if(Session::has('fail'))
    <div class="toast toast-danger">
        <div class="toast-content">
            <i class="fa-solid fa-check check"></i>
            <div class="msg">
                <span class="text text-one"> Erreur </span>
                <span class="text text-tow"> {{Session::get('fail')}} </span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closeAlertPopup"></i>
        <div class="progress"></div>
    </div>
@endif
@if(Session::has('success'))
    <div class="toast toast-success">
        <div class="toast-content">
            <i class="fa-solid fa-check check"></i>
            <div class="msg">
                <span class="text text-one"> Succès </span>
                <span class="text text-tow"> {{Session::get('success')}} </span>
            </div>
        </div>
        <i class="fa-solid fa-xmark closeAlertPopup"></i>
        <div class="progress"></div>
    </div>
@endif