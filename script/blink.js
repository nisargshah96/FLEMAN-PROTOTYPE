function blink()
{
    let name = document.querySelector("span.navbar fixed-top navbar-expand-lg navbar-dark bg-darks nav.navbar fixed-top navbar-expand-lg navbar-dark bg-dark");
    if(name.style.visibiliy === 'hidden')
    {
        name.style.visibiliy = 'visible';
    }
    else{
        name.style.visibiliy = 'hidden';
    }

}
window.setInterval(blink,500);