setTimeout(() => {
        document.getElementById('loader').style.display = "none"
    }, 1000)
var el = document.getElementById('to-admin-panel');
el.onclick = showFoo;


function showFoo() {
        if (localStorage.ad_log == "true") {
                location.replace("admin.php");

        } else {
                location.replace("adminlog.php");

        }
}