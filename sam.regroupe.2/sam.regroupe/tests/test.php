<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />

        <title>Ma page web</title>

    </head>

    <body>
<input id="file" type="file" />
<p id="demo"></p>

<script>
var xhttp = new XMLHttpRequest();
var fileInput = document.querySelector('#file');

    //var prev = document.querySelector('#prev');


    fileInput.addEventListener('change', function() {


        var reader = new FileReader();
        //var reader1 = new FileReader();


            reader.addEventListener('load',function(){
             var xhttp = new XMLHttpRequest(),txt;
var x, xmlDoc;
xhttp.open("GET", "MT876/wizard.xml", true);
xhttp.send();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
    }
};

function myFunction(xml) {
    var i;
    xmlDoc = xml.responseXML;
    txt = "";
    var espace = "\r\n";
    x = xmlDoc.getElementsByTagName("message");
    var Atxt = reader.result.split(espace);
    var Btxt="";
    for (i = 0; i < x.length; i++) { 
            Btxt="";
       Btxt=Atxt[i];
      x[i].setAttribute("msgstr",Btxt);
      txt+="&#60message msgid=\""+x[i].getAttribute("msgid")+"\" msgstr=\""+Atxt[i]+"\" />"+"<br>";
       // txt += x[i].getAttribute("msgstr") + "<br>";
    }
    document.getElementById("demo").innerHTML = txt; 


   // xmlDoc = xml.responseXML;
    //x = xmlDoc.getElementsByTagName("message");
/*  for (var i=0; i < Atxt.length; i++){
    //var x=xmlDoc.getElementsByTagName("message");
    Btxt="";
    Btxt=Atxt[i];
    x[i].setAttribute("msgstr",Btxt);
}*/
//document.getElementById("demo").innerHTML = (new XMLSerializer()).serializeToString(xmlDoc);

}



            //    reader1.addEventListener('load',function(){

            //txt += reader1.result+ reader.result;

            //document.getElementById("demo").innerHTML = 'Contenu du fichier "'+ fileInput.files[0].name + '" :\n\n' +reader.result+'\n'+txt;
           //var test="achraf"
            //alert('Contenu du fichier "'+ fileInput.files[0].name + '" :\n\n' +reader.result);


               });


        reader.readAsText(fileInput.files[0]);
       //reader1.readAsText(fileInput.files[1]);

    });

</script>

</body>

</html>