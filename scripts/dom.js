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
        const sidebar = document.querySelector('.sidebar');
        if (sidebar) {
            sidebar.style.top = headerHeight + 'px';
            sidebar.style.bottom = 0 + 'px';
        }
    }

    window.addEventListener('resize', updateSidebarPosition);
    updateSidebarPosition();
});