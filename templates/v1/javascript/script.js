var b = document.getElementById('main-body');
var s = document.getElementById('header-search');


function openMenu() {
    b.classList.toggle('open-menu');
}
function openSearch() {
    s.classList.toggle('open-search');
    document.getElementById('openSearch').classList.toggle('hidden')
    document.getElementById('closeSearch').classList.toggle('hidden')
    document.getElementById('searchName').focus()
}
function openVideo() {
    b.classList.toggle('open-video');
}

document.addEventListener("keydown", function(event) {
    var b = document.getElementById('main-body');
    if(event.keyCode === 27){
        b.classList.remove('show-login');
    }
});


// search suggest
function showSearch() {
    if (document.getElementById('searchName').value.length > 0) {
        document.getElementById('result-suggest').style.display = 'block';
    } else {
        document.getElementById('result-suggest').style.display = 'none';
    }
}
