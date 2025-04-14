function changeTab(tab) {
    const tabs = ['home', 'hitung', 'histori'];
    tabs.forEach(t => {
    document.getElementById('content-' + t).classList.add('d-none');
    document.getElementById(t + '-tab')?.classList.remove('active');
    document.getElementById(t + '-tab-d')?.classList.remove('active');
    });

    document.getElementById('content-' + tab).classList.remove('d-none');
    document.getElementById(tab + '-tab')?.classList.add('active');
    document.getElementById(tab + '-tab-d')?.classList.add('active');

    toggleSidebar(false); // Close sidebar after click (mobile)
}

function toggleSidebar(show) {
    document.getElementById('mobileSidebar').classList.toggle('show', show);
    document.getElementById('overlay').classList.toggle('show', show);
}