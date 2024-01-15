//sidebar

function showSidebar() {
    const sidebar = document.getElementById('sidebar');
    // sidebar.style.visibility = 'visible';
    // sidebar.style.opacity = '1';
    sidebar.style.transform = 'translateX(0)';

}

function hideSidebar() {
    const sidebar = document.getElementById('sidebar');
    // sidebar.style.visibility = 'hidden';
    // sidebar.style.opacity = '0';
    sidebar.style.transform = 'translateX(-100%)';
}

document.addEventListener('DOMContentLoaded', function() {
    function updateSidebarPosition() {
        const headerHeight = document.querySelector('.header').offsetHeight;
        if(headerHeight){
            const sidebar = document.querySelector('.sidebar');
            const body = document.querySelector('.body');
            if (sidebar) {
                sidebar.style.top = headerHeight + 'px';
                sidebar.style.bottom = 0 + 'px';
            }
            if(body){
                body.style.marginTop = headerHeight + 'px';
            }
        }
    }

    window.addEventListener('resize', updateSidebarPosition);
    updateSidebarPosition();
});

// console.log('im inside dom.js');
// var form = $('.popup-form');
// var overlay = $('.overlay');
// function openAddForm(){
//     console.log('im inside open Add form');
//     form.addClass('active');
//     overlay.addClass('active');
// }

// function closeAddForm(){
//     form.removeClass('active');
//     overlay.removeClass('active');
// }
