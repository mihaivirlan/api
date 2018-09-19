<h1>Exemplu istoric geolocare</h1>

<p>Pentru testare va rugam sa acceptati cererea de acces la locatia browserului.</p>
<div id="demo">

</div>

<script>
    var x = document.getElementById("demo");
    var token = '34565345353453';
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                x.innerHTML = "Latitude: " + position.coords.latitude +
                    "<br>Longitude: " + position.coords.longitude +
                        "<br> as " + new Date().getTime();

                data={
                    'tkn': token,
                    'name': navigator.userAgent,
                    'coord':"long:" + position.coords.longitude + "lat:" + position.coords.latitude
                }

                fetch('http://localhost/api/put',
                    {
                        method:"PUT",
                        body: JSON.stringify(data),
                        headers:{
                            'Content-Type': 'application/json'
                        }
                    }
                )




                setTimeout(arguments.callee, 6000);
            });
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    };

    window.onload = getLocation();



</script>