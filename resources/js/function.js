var state = 'active';

function sidenav() {
    var sidenav = document.getElementById('push-sidenav');
    var content = document.getElementById('content');
    if (state == 'disable') {
        sidenav.style.width = "250px";
        content.style.marginLeft = "250px";
        state = 'active';
    } else {
        sidenav.style.width = "0px";
        content.style.marginLeft = "0px";
        state = 'disable';
    }
    
}