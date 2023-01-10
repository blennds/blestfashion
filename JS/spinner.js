document.querySelector('body ').style.display='none';
document.querySelector('*').classList.add('spinner');
document.querySelector('*').classList.add('loading');



setTimeout(() => {
    document.querySelector('* ').classList.remove('loading');
    document.querySelector('* ').classList.remove('spinner');
    document.querySelector('body ').style.display='block';
}, 3000);