<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />

        <title>Ma page web</title>

    </head>

    <body>
<p id="demo"></p>

<script>
    var xhttp = new XMLHttpRequest(),txt;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };
    xhttp.open("GET", "MT876/wizard.xml", true);
    xhttp.send();

    function myFunction(xml) {
        var x, i, xmlDoc;
        xmlDoc = xml.responseXML;
        txt ="";
        x = xmlDoc.getElementsByTagName("message");
        for (i = 0; i < x.length; i++) { 
            txt += x[i].getAttribute("msgstr") + "<br>";
        }
        document.getElementById("demo").innerHTML =txt;
    }

</script>

</body>

</html>