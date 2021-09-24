function setPage(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const site = urlParams.get('site');
    switch(site){
        case "home":
            $('#view').load('includes/home.html');
        break;
        case "linktree":
            $('#view').load('includes/linktree.html');
        break;
        case "branding":
            $('#view').load('includes/branding.html');
        break;
        case "releases":
            $('#view').load('includes/releases.html');
        break;
        case "setup":
            $('#view').load('includes/setup.html');
        break;
        default:
            $('#view').load('includes/home.html');
        break;
    }

}