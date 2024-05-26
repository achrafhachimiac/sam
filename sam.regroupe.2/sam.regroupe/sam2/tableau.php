

<table>
   <tr>
       <th>prestation</th>
       <th>quantitée</th>
       <th>àrégler sur place</th>
       <th>tarif</th>
   </tr>
   <tr>
       <td><select id="prestation" name="prestation1" onChange="maFonction()";;>   

 <optgroup label="Nettoyage">        
  <option value="">--</option>  
  <option value="Nettoyage APPT -35m²">Nettoyage APPT -35m²</option>        
  <option value="Nettoyage APPT 35m² à 45m²">Nettoyage APPT 35m² à 45m²</option>        
  <option value="Nettoyage APPT +45m² (jusqu’à 8 couchages)">Nettoyage APPT +45m² (jusqu’à 8 couchages)</option> 
  <option value="Nettoyage APPT +45m² (plus de 8 couchages)">Nettoyage APPT +45m² (plus de 8 couchages)</option>     
 </optgroup>      
 
 <optgroup label="Locations">       
  <option value="KIT SERVIETTE (1 douche + 1 toilette)">KIT SERVIETTE (1 douche + 1 toilette)</option>        
  <option value="DRAPS simple">DRAPS simple</option>        
  <option value="DRAPS double">DRAPS double</option> 
  <option value="KIT BEBE">KIT BEBE</option>
  <option value="Torchons x 2">Torchons x 2</option>  
  <option value="Tapis de bain">Tapis de bain</option>  
 </optgroup>     
 
 <optgroup label="Ventes annexes">        
  <option value="KIT ENTRETIEN">KIT ENTRETIEN</option>        
  <option value="KIT HYGIENE">KIT HYGIENE</option>        
  <option value="PROTECTION MATELAS JETABLE SIMPLE">PROTECTION MATELAS JETABLE SIMPLE</option> 
  <option value="PROTECTION MATELAS JETABLE DOUBLE">PROTECTION MATELAS JETABLE DOUBLE</option>   
 </optgroup>   
</select>





       </td>
       <td><input type="number" name="quantite1"/></td>
       <td><input type="checkbox" name="reglement1" value="truc" checked/></td>
       <td><div id="ligne1"></div>

        
       <script type="text/javascript">


          function maFonction(){
          var select = document.getElementById("prestation" );
          var valeur = select.options[select.selectedIndex].value;
          var prix = 0;

          if (valeur =="Nettoyage APPT -35m²") {
            prix=50;
          }

          else if (valeur =="Nettoyage APPT 35m² à 45m²") {
         prix=65;       
       }
       else if (valeur =="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         prix=80;
       }
       else if (valeur =="Nettoyage APPT +45m² (plus de 8 couchages)") {
         prix=120;
      }

       else if (valeur =="KIT SERVIETTE (1 douche + 1 toilette)") {
         prix=5;
       }
       else if (valeur =="DRAPS simple") {
        prix=7;
       } 
       else if (valeur =="DRAPS double") {
         prix=9;
       }
       else if (valeur =="KIT BEBE") {
         prix=25;
       }
       else if (valeur =="Torchons x 2") {
         prix=3;
       }
       else if (valeur =="Tapis de bain") {
         prix=2;
       }

       else if (valeur =="KIT ENTRETIEN") {
         prix=5;
       }
       else if (valeur =="KIT HYGIENE") {
         prix=5;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE SIMPLE") {
         prix=3;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE DOUBLE") {
         prix=3.5;
       }
          
          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("ligne1").innerHTML = prix;  
          }
        </script>
       </td>


   </tr>
   <tr>
       <td><select id="prestation2" name="prestation2" onChange="maFonction2()";;>   
 <optgroup label="Nettoyage">        
  <option value="">--</option>  
  <option value="Nettoyage APPT -35m²">Nettoyage APPT -35m²</option>        
  <option value="Nettoyage APPT 35m² à 45m²">Nettoyage APPT 35m² à 45m²</option>        
  <option value="Nettoyage APPT +45m² (jusqu’à 8 couchages)">Nettoyage APPT +45m² (jusqu’à 8 couchages)</option> 
  <option value="Nettoyage APPT +45m² (plus de 8 couchages)">Nettoyage APPT +45m² (plus de 8 couchages)</option>     
 </optgroup>      
 
 <optgroup label="Locations">       
  <option value="KIT SERVIETTE (1 douche + 1 toilette)">KIT SERVIETTE (1 douche + 1 toilette)</option>        
  <option value="DRAPS simple">DRAPS simple</option>        
  <option value="DRAPS double">DRAPS double</option> 
  <option value="KIT BEBE">KIT BEBE</option>
  <option value="Torchons x 2">Torchons x 2</option>  
  <option value="Tapis de bain">Tapis de bain</option>  
 </optgroup>     
 
 <optgroup label="Ventes annexes">        
  <option value="KIT ENTRETIEN">KIT ENTRETIEN</option>        
  <option value="KIT HYGIENE">KIT HYGIENE</option>        
  <option value="PROTECTION MATELAS JETABLE SIMPLE">PROTECTION MATELAS JETABLE SIMPLE</option> 
  <option value="PROTECTION MATELAS JETABLE DOUBLE">PROTECTION MATELAS JETABLE DOUBLE</option>   
 </optgroup>   
</select>




       </td>
       <td><input type="number" name="quantite2"/></td>
       <td><input type="checkbox" name="reglement2" value="truc" checked/></td>
       <td><div id="ligne2"></div>

       <script type="text/javascript">


          function maFonction2(){
          var select = document.getElementById("prestation2" );
          var valeur = select.options[select.selectedIndex].value;
          var prix = 0;

          if (valeur =="Nettoyage APPT -35m²") {
            prix=50;
          }

          else if (valeur =="Nettoyage APPT 35m² à 45m²") {
         prix=65;       
       }
       else if (valeur =="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         prix=80;
       }
       else if (valeur =="Nettoyage APPT +45m² (plus de 8 couchages)") {
         prix=120;
      }

       else if (valeur =="KIT SERVIETTE (1 douche + 1 toilette)") {
         prix=5;
       }
       else if (valeur =="DRAPS simple") {
        prix=7;
       } 
       else if (valeur =="DRAPS double") {
         prix=9;
       }
       else if (valeur =="KIT BEBE") {
         prix=25;
       }
       else if (valeur =="Torchons x 2") {
         prix=3;
       }
       else if (valeur =="Tapis de bain") {
         prix=2;
       }

       else if (valeur =="KIT ENTRETIEN") {
         prix=5;
       }
       else if (valeur =="KIT HYGIENE") {
         prix=5;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE SIMPLE") {
         prix=3;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE DOUBLE") {
         prix=3.5;
       }
          
          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("ligne2").innerHTML = prix;  
          }
        </script>


       </td>
   </tr>
   <tr>
       <td><select id="prestation3" name="prestation3" onChange="maFonction3()";;>    <optgroup label="Nettoyage">        
  <option value="">--</option>  
  <option value="Nettoyage APPT -35m²">Nettoyage APPT -35m²</option>        
  <option value="Nettoyage APPT 35m² à 45m²">Nettoyage APPT 35m² à 45m²</option>        
  <option value="Nettoyage APPT +45m² (jusqu’à 8 couchages)">Nettoyage APPT +45m² (jusqu’à 8 couchages)</option> 
  <option value="Nettoyage APPT +45m² (plus de 8 couchages)">Nettoyage APPT +45m² (plus de 8 couchages)</option>     
 </optgroup>      
 
 <optgroup label="Locations">       
  <option value="KIT SERVIETTE (1 douche + 1 toilette)">KIT SERVIETTE (1 douche + 1 toilette)</option>        
  <option value="DRAPS simple">DRAPS simple</option>        
  <option value="DRAPS double">DRAPS double</option> 
  <option value="KIT BEBE">KIT BEBE</option>
  <option value="Torchons x 2">Torchons x 2</option>  
  <option value="Tapis de bain">Tapis de bain</option>  
 </optgroup>     
 
 <optgroup label="Ventes annexes">        
  <option value="KIT ENTRETIEN">KIT ENTRETIEN</option>        
  <option value="KIT HYGIENE">KIT HYGIENE</option>        
  <option value="PROTECTION MATELAS JETABLE SIMPLE">PROTECTION MATELAS JETABLE SIMPLE</option> 
  <option value="PROTECTION MATELAS JETABLE DOUBLE">PROTECTION MATELAS JETABLE DOUBLE</option>   
 </optgroup>   
</select>
</td>
       <td><input type="number" name="quantite3"/></td>
       <td><input type="checkbox" name="reglement3" value="truc" checked/></td>
       <td><div id="ligne3"></div>
       <script type="text/javascript">


          function maFonction3(){
          var select = document.getElementById("prestation3" );
          var valeur = select.options[select.selectedIndex].value;
          var prix = 0;

          if (valeur =="Nettoyage APPT -35m²") {
            prix=50;
          }

          else if (valeur =="Nettoyage APPT 35m² à 45m²") {
         prix=65;       
       }
       else if (valeur =="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         prix=80;
       }
       else if (valeur =="Nettoyage APPT +45m² (plus de 8 couchages)") {
         prix=120;
      }

       else if (valeur =="KIT SERVIETTE (1 douche + 1 toilette)") {
         prix=5;
       }
       else if (valeur =="DRAPS simple") {
        prix=7;
       } 
       else if (valeur =="DRAPS double") {
         prix=9;
       }
       else if (valeur =="KIT BEBE") {
         prix=25;
       }
       else if (valeur =="Torchons x 2") {
         prix=3;
       }
       else if (valeur =="Tapis de bain") {
         prix=2;
       }

       else if (valeur =="KIT ENTRETIEN") {
         prix=5;
       }
       else if (valeur =="KIT HYGIENE") {
         prix=5;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE SIMPLE") {
         prix=3;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE DOUBLE") {
         prix=3.5;
       }
          
          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("ligne3").innerHTML = prix;  
          }
        </script>


       </td>
   </tr>
   <tr>
       <td><select id="prestation4" name="prestation4" onChange="maFonction4()";;>    <optgroup label="Nettoyage">        
 <option value="">--</option>  
  <option value="Nettoyage APPT -35m²">Nettoyage APPT -35m²</option>        
  <option value="Nettoyage APPT 35m² à 45m²">Nettoyage APPT 35m² à 45m²</option>        
  <option value="Nettoyage APPT +45m² (jusqu’à 8 couchages)">Nettoyage APPT +45m² (jusqu’à 8 couchages)</option> 
  <option value="Nettoyage APPT +45m² (plus de 8 couchages)">Nettoyage APPT +45m² (plus de 8 couchages)</option>     
 </optgroup>      
 
 <optgroup label="Locations">       
  <option value="KIT SERVIETTE (1 douche + 1 toilette)">KIT SERVIETTE (1 douche + 1 toilette)</option>        
  <option value="DRAPS simple">DRAPS simple</option>        
  <option value="DRAPS double">DRAPS double</option> 
  <option value="KIT BEBE">KIT BEBE</option>
  <option value="Torchons x 2">Torchons x 2</option>  
  <option value="Tapis de bain">Tapis de bain</option>  
 </optgroup>     
 
 <optgroup label="Ventes annexes">        
  <option value="KIT ENTRETIEN">KIT ENTRETIEN</option>        
  <option value="KIT HYGIENE">KIT HYGIENE</option>        
  <option value="PROTECTION MATELAS JETABLE SIMPLE">PROTECTION MATELAS JETABLE SIMPLE</option> 
  <option value="PROTECTION MATELAS JETABLE DOUBLE">PROTECTION MATELAS JETABLE DOUBLE</option>   
 </optgroup>   
</select>
</td>
       <td><input type="number" name="quantite4"/></td>
       <td><input type="checkbox" name="reglement4" value="truc" checked/></td>
       <td><div id="ligne4"></div>

              <script type="text/javascript">


          function maFonction4(){
          var select = document.getElementById("prestation4" );
          var valeur = select.options[select.selectedIndex].value;
          var prix = 0;

          if (valeur =="Nettoyage APPT -35m²") {
            prix=50;
          }

          else if (valeur =="Nettoyage APPT 35m² à 45m²") {
         prix=65;       
       }
       else if (valeur =="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         prix=80;
       }
       else if (valeur =="Nettoyage APPT +45m² (plus de 8 couchages)") {
         prix=120;
      }

       else if (valeur =="KIT SERVIETTE (1 douche + 1 toilette)") {
         prix=5;
       }
       else if (valeur =="DRAPS simple") {
        prix=7;
       } 
       else if (valeur =="DRAPS double") {
         prix=9;
       }
       else if (valeur =="KIT BEBE") {
         prix=25;
       }
       else if (valeur =="Torchons x 2") {
         prix=3;
       }
       else if (valeur =="Tapis de bain") {
         prix=2;
       }

       else if (valeur =="KIT ENTRETIEN") {
         prix=5;
       }
       else if (valeur =="KIT HYGIENE") {
         prix=5;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE SIMPLE") {
         prix=3;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE DOUBLE") {
         prix=3.5;
       }
          
          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("ligne4").innerHTML = prix;  
          }
        </script>
      </td>
   </tr>
     <tr>
       <td><select id="prestation5" name="prestation5" onChange="maFonction5()";;>   < <optgroup label="Nettoyage">        
  <option value="">--</option>  
  <option value="Nettoyage APPT -35m²">Nettoyage APPT -35m²</option>        
  <option value="Nettoyage APPT 35m² à 45m²">Nettoyage APPT 35m² à 45m²</option>        
  <option value="Nettoyage APPT +45m² (jusqu’à 8 couchages)">Nettoyage APPT +45m² (jusqu’à 8 couchages)</option> 
  <option value="Nettoyage APPT +45m² (plus de 8 couchages)">Nettoyage APPT +45m² (plus de 8 couchages)</option>     
 </optgroup>      
 
 <optgroup label="Locations">       
  <option value="KIT SERVIETTE (1 douche + 1 toilette)">KIT SERVIETTE (1 douche + 1 toilette)</option>        
  <option value="DRAPS simple">DRAPS simple</option>        
  <option value=">DRAPS double">DRAPS double</option> 
  <option value="KIT BEBE">KIT BEBE</option>
  <option value="Torchons x 2">Torchons x 2</option>  
  <option value="Tapis de bain">Tapis de bain</option>  
 </optgroup>     
 
 <optgroup label="Ventes annexes">        
  <option value="KIT ENTRETIEN">KIT ENTRETIEN</option>        
  <option value="KIT HYGIENE">KIT HYGIENE</option>        
  <option value="PROTECTION MATELAS JETABLE SIMPLE">PROTECTION MATELAS JETABLE SIMPLE</option> 
  <option value="PROTECTION MATELAS JETABLE DOUBLE">PROTECTION MATELAS JETABLE DOUBLE</option>   
 </optgroup>   
</select>
</td>
       <td><input type="number" name="quantite5"/></td>
       <td><input type="checkbox" name="reglement5" value="truc" checked/></td>
       <td><div id="ligne5"></div>

       <script type="text/javascript">


          function maFonction5(){
          var select = document.getElementById("prestation5" );
          var valeur = select.options[select.selectedIndex].value;
          var prix = 0;

          if (valeur =="Nettoyage APPT -35m²") {
            prix=50;
          }

          else if (valeur =="Nettoyage APPT 35m² à 45m²") {
         prix=65;       
       }
       else if (valeur =="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         prix=80;
       }
       else if (valeur =="Nettoyage APPT +45m² (plus de 8 couchages)") {
         prix=120;
      }

       else if (valeur =="KIT SERVIETTE (1 douche + 1 toilette)") {
         prix=5;
       }
       else if (valeur =="DRAPS simple") {
        prix=7;
       } 
       else if (valeur =="DRAPS double") {
         prix=9;
       }
       else if (valeur =="KIT BEBE") {
         prix=25;
       }
       else if (valeur =="Torchons x 2") {
         prix=3;
       }
       else if (valeur =="Tapis de bain") {
         prix=2;
       }

       else if (valeur =="KIT ENTRETIEN") {
         prix=5;
       }
       else if (valeur =="KIT HYGIENE") {
         prix=5;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE SIMPLE") {
         prix=3;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE DOUBLE") {
         prix=3.5;
       }
          
          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("ligne5").innerHTML = prix;  
          }
        </script>
       </td>
   </tr>
     <tr>
       <td><select id="prestation6" name="prestation6" onChange="maFonction6()";;>    <optgroup label="Nettoyage">        
 <option value="">--</option>  
  <option value="Nettoyage APPT -35m²">Nettoyage APPT -35m²</option>        
  <option value="Nettoyage APPT 35m² à 45m²">Nettoyage APPT 35m² à 45m²</option>        
  <option value="Nettoyage APPT +45m² (jusqu’à 8 couchages)">Nettoyage APPT +45m² (jusqu’à 8 couchages)</option> 
  <option value="Nettoyage APPT +45m² (plus de 8 couchages)">Nettoyage APPT +45m² (plus de 8 couchages)</option>     
 </optgroup>      
 
 <optgroup label="Locations">       
  <option value="KIT SERVIETTE (1 douche + 1 toilette)">KIT SERVIETTE (1 douche + 1 toilette)</option>        
  <option value="DRAPS simple">DRAPS simple</option>        
  <option value="DRAPS double">DRAPS double</option> 
  <option value="KIT BEBE">KIT BEBE</option>
  <option value="Torchons x 2">Torchons x 2</option>  
  <option value="Tapis de bain">Tapis de bain</option>  
 </optgroup>     
 
 <optgroup label="Ventes annexes">        
  <option value="KIT ENTRETIEN">KIT ENTRETIEN</option>        
  <option value="KIT HYGIENE">KIT HYGIENE</option>        
  <option value="PROTECTION MATELAS JETABLE SIMPLE">PROTECTION MATELAS JETABLE SIMPLE</option> 
  <option value="PROTECTION MATELAS JETABLE DOUBLE">PROTECTION MATELAS JETABLE DOUBLE</option>   
 </optgroup>   
</select>
</td>
       <td><input type="number" name="quantite6"/></td>
       <td><input type="checkbox" name="reglement6" value="truc" checked/></td>
       <td><div id="ligne6"></div>

       <script type="text/javascript">


          function maFonction6(){
          var select = document.getElementById("prestation6" );
          var valeur = select.options[select.selectedIndex].value;
          var prix = 0;

          if (valeur =="Nettoyage APPT -35m²") {
            prix=50;
          }

          else if (valeur =="Nettoyage APPT 35m² à 45m²") {
         prix=65;       
       }
       else if (valeur =="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         prix=80;
       }
       else if (valeur =="Nettoyage APPT +45m² (plus de 8 couchages)") {
         prix=120;
      }

       else if (valeur =="KIT SERVIETTE (1 douche + 1 toilette)") {
         prix=5;
       }
       else if (valeur =="DRAPS simple") {
        prix=7;
       } 
       else if (valeur =="DRAPS double") {
         prix=9;
       }
       else if (valeur =="KIT BEBE") {
         prix=25;
       }
       else if (valeur =="Torchons x 2") {
         prix=3;
       }
       else if (valeur =="Tapis de bain") {
         prix=2;
       }

       else if (valeur =="KIT ENTRETIEN") {
         prix=5;
       }
       else if (valeur =="KIT HYGIENE") {
         prix=5;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE SIMPLE") {
         prix=3;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE DOUBLE") {
         prix=3.5;
       }
          
          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("ligne6").innerHTML = prix;  
          }
        </script>
       </td>
   </tr>
     <tr>
       <td><select id="prestation7" name="prestation7" onChange="maFonction7()";;>    <optgroup label="Nettoyage">        
 <option value="">--</option>  
  <option value="Nettoyage APPT -35m²">Nettoyage APPT -35m²</option>        
  <option value="Nettoyage APPT 35m² à 45m²">Nettoyage APPT 35m² à 45m²</option>        
  <option value="Nettoyage APPT +45m² (jusqu’à 8 couchages)">Nettoyage APPT +45m² (jusqu’à 8 couchages)</option> 
  <option value="Nettoyage APPT +45m² (plus de 8 couchages)">Nettoyage APPT +45m² (plus de 8 couchages)</option>     
 </optgroup>      
 
 <optgroup label="Locations">       
  <option value="KIT SERVIETTE (1 douche + 1 toilette)">KIT SERVIETTE (1 douche + 1 toilette)</option>        
  <option value="DRAPS simple">DRAPS simple</option>        
  <option value="DRAPS double">DRAPS double</option> 
  <option value="KIT BEBE">KIT BEBE</option>
  <option value="Torchons x 2">Torchons x 2</option>  
  <option value="Tapis de bain">Tapis de bain</option>  
 </optgroup>     
 
 <optgroup label="Ventes annexes">        
  <option value="KIT ENTRETIEN">KIT ENTRETIEN</option>        
  <option value="KIT HYGIENE">KIT HYGIENE</option>        
  <option value="PROTECTION MATELAS JETABLE SIMPLE">PROTECTION MATELAS JETABLE SIMPLE</option> 
  <option value="PROTECTION MATELAS JETABLE DOUBLE">PROTECTION MATELAS JETABLE DOUBLE</option>   
 </optgroup>   
</select>
</td>
       <td><input type="number" name="quantite7"/></td>
       <td><input type="checkbox" name="reglement7" value="truc" checked/></td>
       <td><div id="ligne7"></div>

       <script type="text/javascript">


          function maFonction7(){
          var select = document.getElementById("prestation7" );
          var valeur = select.options[select.selectedIndex].value;
          var prix = 0;

          if (valeur =="Nettoyage APPT -35m²") {
            prix=50;
          }

          else if (valeur =="Nettoyage APPT 35m² à 45m²") {
         prix=65;       
       }
       else if (valeur =="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         prix=80;
       }
       else if (valeur =="Nettoyage APPT +45m² (plus de 8 couchages)") {
         prix=120;
      }

       else if (valeur =="KIT SERVIETTE (1 douche + 1 toilette)") {
         prix=5;
       }
       else if (valeur =="DRAPS simple") {
        prix=7;
       } 
       else if (valeur =="DRAPS double") {
         prix=9;
       }
       else if (valeur =="KIT BEBE") {
         prix=25;
       }
       else if (valeur =="Torchons x 2") {
         prix=3;
       }
       else if (valeur =="Tapis de bain") {
         prix=2;
       }

       else if (valeur =="KIT ENTRETIEN") {
         prix=5;
       }
       else if (valeur =="KIT HYGIENE") {
         prix=5;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE SIMPLE") {
         prix=3;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE DOUBLE") {
         prix=3.5;
       }
          
          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("ligne7").innerHTML = prix;  
          }
        </script>
       </td>
   </tr>
     <tr>
       <td><select id="prestation8" name="prestation8" onChange="maFonction8()";;>    <optgroup label="Nettoyage">        
 <option value="">--</option>  
  <option value="Nettoyage APPT -35m²">Nettoyage APPT -35m²</option>        
  <option value="Nettoyage APPT 35m² à 45m²">Nettoyage APPT 35m² à 45m²</option>        
  <option value="Nettoyage APPT +45m² (jusqu’à 8 couchages)">Nettoyage APPT +45m² (jusqu’à 8 couchages)</option> 
  <option value="Nettoyage APPT +45m² (plus de 8 couchages)">Nettoyage APPT +45m² (plus de 8 couchages)</option>     
 </optgroup>      
 
 <optgroup label="Locations">       
  <option value="KIT SERVIETTE (1 douche + 1 toilette)">KIT SERVIETTE (1 douche + 1 toilette)</option>        
  <option value="DRAPS simple">DRAPS simple</option>        
  <option value="DRAPS double">DRAPS double</option> 
  <option value="KIT BEBE">KIT BEBE</option>
  <option value="Torchons x 2">Torchons x 2</option>  
  <option value="Tapis de bain">Tapis de bain</option>  
 </optgroup>     
 
 <optgroup label="Ventes annexes">        
  <option value="KIT ENTRETIEN">KIT ENTRETIEN</option>        
  <option value="KIT HYGIENE">KIT HYGIENE</option>        
  <option value="PROTECTION MATELAS JETABLE SIMPLE">PROTECTION MATELAS JETABLE SIMPLE</option> 
  <option value="PROTECTION MATELAS JETABLE DOUBLE">PROTECTION MATELAS JETABLE DOUBLE</option>   
 </optgroup>   
</select>
</td>
       <td><input type="number" name="quantite8"/></td>
       <td><input type="checkbox" name="reglement8" value="truc" checked/></td>
       <td><div id="ligne8"></div>
       <script type="text/javascript">


          function maFonction8(){
          var select = document.getElementById("prestation8" );
          var valeur = select.options[select.selectedIndex].value;
          var prix = 0;

          if (valeur =="Nettoyage APPT -35m²") {
            prix=50;
          }

          else if (valeur =="Nettoyage APPT 35m² à 45m²") {
         prix=65;       
       }
       else if (valeur =="Nettoyage APPT +45m² (jusqu’à 8 couchages)") {
         prix=80;
       }
       else if (valeur =="Nettoyage APPT +45m² (plus de 8 couchages)") {
         prix=120;
      }

       else if (valeur =="KIT SERVIETTE (1 douche + 1 toilette)") {
         prix=5;
       }
       else if (valeur =="DRAPS simple") {
        prix=7;
       } 
       else if (valeur =="DRAPS double") {
         prix=9;
       }
       else if (valeur =="KIT BEBE") {
         prix=25;
       }
       else if (valeur =="Torchons x 2") {
         prix=3;
       }
       else if (valeur =="Tapis de bain") {
         prix=2;
       }

       else if (valeur =="KIT ENTRETIEN") {
         prix=5;
       }
       else if (valeur =="KIT HYGIENE") {
         prix=5;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE SIMPLE") {
         prix=3;
       }
       else if (valeur =="PROTECTION MATELAS JETABLE DOUBLE") {
         prix=3.5;
       }
          
          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("ligne8").innerHTML = prix;  
          }
        </script>

       </td>
   </tr>
</table>





