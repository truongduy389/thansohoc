function showMoreNav() {
    const sideBarNav = document.getElementById('listManagement');
    if(sideBarNav.style.display === "none") {
        sideBarNav.style.display = "block";
    } else if(sideBarNav.style.display === "block") {
        sideBarNav.style.display = "none";
    }
}
