if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    window.location.replace("mobile_version/main/index.html");

} else {
   
    window.location.replace("desktop_version/main/index.html");
}
