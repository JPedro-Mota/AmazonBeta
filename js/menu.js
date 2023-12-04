document.querySelector('.menu-btn').addEventListener('click', function() {
    document.querySelector('.dropdown').classList.toggle('show');
});

document.querySelector('.dropdown').addEventListener('click', function() {
    this.classList.remove('show');
});

document.querySelector('.dropdown-content').addEventListener('click', function(e) {
    e.stopPropagation();
});