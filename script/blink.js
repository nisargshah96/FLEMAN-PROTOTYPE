function blink()
{
    let name = document.querySelector("span.navbar fixed-top navbar-expand-lg navbar-dark bg-darks nav.navbar fixed-top navbar-expand-lg navbar-dark bg-dark");
    if(name.style.visibility === 'hidden')
    {
        name.style.visibility = 'visible';
    }
    else{
        name.style.visibility = 'hidden';
    }

}
window.setInterval(blink,500);