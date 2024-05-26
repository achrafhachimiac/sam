<script type="text/javascript">
prix=0;
prix2=0;
prix3=0;
prix4=0;
prix5=0;
prix6=0;
prix7=0;
prix8=0;

number1=0;
number2=0;
number3=0;
number4=0;
number5=0;
number6=0;
number7=0;
number8=0;



</script>

<table>
   <tr>
       <th>prestation</th>
       <th>quantitée</th>
       <th>date(s)</th>
       <th>prix</th>
   </tr>
   <tr>
       <td><select id="prestation" name="prestation1" onChange="maFonction()";;>   

 <optgroup label="appt -35m²">        
  <option value="">--</option>  
  <option value="Ménage confort appt -35m²">Ménage confort</option> 
  <option value="Ménage confort+ appt -35m²">Ménage confort+</option>     
  <option value="Ménage charme appt -35m²">ménage charme</option>      
  <option value="Ménage prestige appt -35m²">ménage prestige</option>   
 </optgroup>      
 
 <optgroup label="appt 35 à 45 m²">       
  <option value="Ménage confort appt 35 à 45 m²">Ménage confort</option> 
  <option value="Ménage confort+ appt 35 à 45 m²">Ménage confort+</option>       
  <option value="ménage charme appt 35 à 45 m²">Ménage charme</option>      
  <option value="ménage prestige appt 35 à 45 m²">Ménage prestige</option>   
 </optgroup>     

  <optgroup label="appt + de 45 m² Jusqu’à 8 couchages">       
  <option value="Ménage confort appt + de 45 m² Jusqu’à 8 couchages">Ménage confort</option>   
  <option value="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages">Ménage confort+</option>   
  <option value="ménage charme appt + de 45 m² Jusqu’à 8 couchages">Ménage charme</option>        
  <option value="ménage prestige appt + de 45 m² Jusqu’à 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

  <optgroup label="appt + de 45 m² plus de 8 couchages">       
  <option value="Ménage confort appt + de 45 m² plus de 8 couchages">Ménage confort</option> 
  <option value="Ménage confort+ appt + de 45 m² plus de 8 couchages">Ménage confort+</option>      
  <option value="ménage charme appt + de 45 m² plus de 8 couchages">Ménage charme</option>      
  <option value="ménage prestige appt + de 45 m² plus de 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

 <optgroup label="récepetion">        
  <option value="réception à la location">A la location</option>
  <option value="réception au bureau">Au bureau</option> 
  <option value="réception en résidence">En résidence</option>         
 </optgroup> 

  <optgroup label="linge de maison">        
  <option value="location de draps simple">Location de draps simple</option>  
  <option value="location de draps double">Location de draps double</option> 
  <option value="location de serviettes">Location de serviettes </option> 
  <option value="couette simple">Location de couette simple</option> 
  <option value="couette double">Location de couette double </option> 
  <option value="piscine">Location de serviette de piscine </option> 
  <option value="bain">Location de tapis de bain </option>
  <option value="torchon">Location de Torchons (x2) </option>
  <option value="kit bebe">Location de kit bébé) </option>    
  <option value="lit bebe">Location de lit bébé </option>   
 </optgroup> 

 <optgroup label="ventes annexes ">       
  <option value="produits d'hygiènes">produits d'hygiène</option>
  <option value="produits d'entretien">produits d'entretien</option>    
 </optgroup> 
</select>
       </td>
       <td><input type="number" id="quantite1" name="quantite1" onChange="maFonctionn1()";;>



       </td>
       <td><input type="text" name="date1" value="ex:Le 28 Déc., 4 JANV" checked/>
<div id="date1">
 


      </div>
  


       </td>
       <td>
        <div id="test">
        <script type="text/javascript">


          function maFonction(){
          var select = document.getElementById("prestation" );
          var valeur = select.options[select.selectedIndex].value;


           prix = 0;

            if (valeur =="Ménage confort appt -35m²") {
              prix=32 ;
            }
            else if (valeur =="Ménage confort+ appt -35m²") {
              prix=75 ;
            }

            else if (valeur =="Ménage charme appt -35m²") {
           prix=38;       
           }
           else if (valeur =="Ménage prestige appt -35m²") {
             prix=88;
           }



         else if (valeur =="Ménage confort appt 35 à 45 m²") {
           prix=37;
        }
          else if (valeur =="Ménage confort+ appt 35 à 45 m²") {
           prix=106;
        }

         else if (valeur =="ménage charme appt 35 à 45 m²") {
           prix=45 ;
         }
         else if (valeur =="ménage prestige appt 35 à 45 m²") {
          prix=117;
         } 
         else if (valeur =="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
           prix=43;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
           prix=129;
         }
         else if (valeur =="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
           prix=49;
         }
         else if (valeur =="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
           prix=130;
         }
         else if (valeur =="Ménage confort appt + de 45 m² plus de 8 couchages") {
           prix=49;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
           prix=150;
         }


         else if (valeur =="ménage charme appt + de 45 m² plus de 8 couchages") {
           prix=58;
         }
         else if (valeur =="ménage prestige appt + de 45 m² plus de 8 couchages") {
           prix=170;
         }
         else if (valeur =="réception à la location") {
           prix=40;
         }
                  else if (valeur =="réception au bureau") {
           prix=32;
         }
         else if (valeur =="réception en résidence") {
           prix=35;
         }
         else if (valeur =="torchon") {
           prix=3;
         }
          else if (valeur =="kit bebe") {
           prix=25;
         }
         else if (valeur =="lit bebe") {
           prix=10;
         }
         else if (valeur =="location de draps simple") {
           prix=8;
         }
          else if (valeur =="location de draps double") {
           prix=10;
         }
          else if (valeur =="location de serviettes") {
           prix=6;
         }
          else if (valeur =="produits d'hygiènes") {
           prix=7;
         }
          else if (valeur =="produits d'entretien") {
           prix=7;
         }        else if (valeur =="couette simple") {
           prix=10;
         }        else if (valeur =="couette double") {
           prix=13;
         }        else if (valeur =="piscine") {
           prix=4;
         }        else if (valeur =="bain") {
           prix=2;
         }







          else {prix =0;}
          
          //document.write('<p>'+valeur+'</p>');
           document.getElementById("test").innerHTML = prix;  


           total();

          }
        </script>

      </div>
            <div id="testt">
              <script type="text/javascript">
                function maFonctionn1(){

                  document.getElementById("testt").innerHTML = "test";
                  number1 = document.getElementById("quantite1" ).value;
                  //var valeur = number.options[number.selectedIndex].value;
                  document.getElementById("testt").innerHTML = "x"+number1;
                  total();
                  }
              </script>
            </div>

       </td>


   </tr>
   <tr>
       <td><select id="prestation2" name="prestation2" onChange="maFonction2()";;>   

  <optgroup label="appt -35m²">        
  <option value="">--</option>  
  <option value="Ménage confort appt -35m²">Ménage confort</option> 
  <option value="Ménage confort+ appt -35m²">Ménage confort+</option>     
  <option value="Ménage charme appt -35m²">ménage charme</option>      
  <option value="Ménage prestige appt -35m²">ménage prestige</option>   
 </optgroup>      
 
 <optgroup label="appt 35 à 45 m²">       
  <option value="Ménage confort appt 35 à 45 m²">Ménage confort</option> 
  <option value="Ménage confort+ appt 35 à 45 m²">Ménage confort+</option>       
  <option value="ménage charme appt 35 à 45 m²">Ménage charme</option>      
  <option value="ménage prestige appt 35 à 45 m²">Ménage prestige</option>   
 </optgroup>     

  <optgroup label="appt + de 45 m² Jusqu’à 8 couchages">       
  <option value="Ménage confort appt + de 45 m² Jusqu’à 8 couchages">Ménage confort</option>   
  <option value="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages">Ménage confort+</option>   
  <option value="ménage charme appt + de 45 m² Jusqu’à 8 couchages">Ménage charme</option>        
  <option value="ménage prestige appt + de 45 m² Jusqu’à 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

  <optgroup label="appt + de 45 m² plus de 8 couchages">       
  <option value="Ménage confort appt + de 45 m² plus de 8 couchages">Ménage confort</option> 
  <option value="Ménage confort+ appt + de 45 m² plus de 8 couchages">Ménage confort+</option>      
  <option value="ménage charme appt + de 45 m² plus de 8 couchages">Ménage charme</option>      
  <option value="ménage prestige appt + de 45 m² plus de 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

 <optgroup label="récepetion">        
  <option value="réception à la location">A la location</option>
  <option value="réception au bureau">Au bureau</option> 
  <option value="réception en résidence">En résidence</option>         
 </optgroup> 

   <optgroup label="linge de maison">        
  <option value="location de draps simple">Location de draps simple</option>  
  <option value="location de draps double">Location de draps double</option> 
  <option value="location de serviettes">Location de serviettes </option> 
  <option value="couette simple">Location de couette simple</option> 
  <option value="couette double">Location de couette double </option> 
  <option value="piscine">Location de serviette de piscine </option> 
  <option value="bain">Location de tapis de bain </option>
  <option value="torchon">Location de Torchons (x2) </option>
  <option value="kit bebe">Location de kit bébé) </option>    
  <option value="lit bebe">Location de lit bébé </option>   
 </optgroup> 

 <optgroup label="ventes annexes ">       
  <option value="produits d'hygiènes">produits d'hygiènes</option>
  <option value="produits d'entretien">produits d'entretien</option>    
 </optgroup> 
</select>




       </td>
       <td><input type="number" id="quantite2" name="quantite2" onChange="maFonctionn2()";;></td>

           
       <td><input type="text" name="date2" value="" checked/></td>
       <td>  
             <div id="test2">
        <script type="text/javascript">


          function maFonction2(){
          var select = document.getElementById("prestation2" );
          var valeur = select.options[select.selectedIndex].value;
          //document.write('<p>'+valeur+'</p>');

                     prix2 = 0;

            if (valeur =="Ménage confort appt -35m²") {
              prix2=32 ;
            }
            else if (valeur =="Ménage confort+ appt -35m²") {
              prix2=75 ;
            }

            else if (valeur =="Ménage charme appt -35m²") {
           prix2=38;       
           }
           else if (valeur =="Ménage prestige appt -35m²") {
             prix2=88;
           }



         else if (valeur =="Ménage confort appt 35 à 45 m²") {
           prix2=37;
        }
          else if (valeur =="Ménage confort+ appt 35 à 45 m²") {
           prix2=106;
        }

         else if (valeur =="ménage charme appt 35 à 45 m²") {
           prix2=45 ;
         }
         else if (valeur =="ménage prestige appt 35 à 45 m²") {
          prix2=117;
         } 
         else if (valeur =="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
           prix2=43;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
           prix2=129;
         }
         else if (valeur =="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
           prix2=49;
         }
         else if (valeur =="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
           prix2=130;
         }
         else if (valeur =="Ménage confort appt + de 45 m² plus de 8 couchages") {
           prix2=49;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
           prix2=150;
         }


         else if (valeur =="ménage charme appt + de 45 m² plus de 8 couchages") {
           prix2=58;
         }
         else if (valeur =="ménage prestige appt + de 45 m² plus de 8 couchages") {
           prix2=170;
         }
         else if (valeur =="réception à la location") {
           prix2=40;
         }
                  else if (valeur =="réception au bureau") {
           prix2=32;
         }
         else if (valeur =="réception en résidence") {
           prix2=35;
         }
         else if (valeur =="torchon") {
           prix2=3;
         }
          else if (valeur =="kit bebe") {
           prix2=10;
         }
         else if (valeur =="lit bebe") {
           prix2=10;
         }

         else if (valeur =="location de draps simple") {
           prix2=8;
         }
          else if (valeur =="location de draps double") {
           prix2=10;
         }
          else if (valeur =="location de serviettes") {
           prix2=6;
         }
          else if (valeur =="produits d'hygiènes") {
           prix2=7;
         }
          else if (valeur =="produits d'entretien") {
           prix2=7;
         }        else if (valeur =="couette simple") {
           prix2=10;
         }        else if (valeur =="couette double") {
           prix2=13;
         }        else if (valeur =="piscine") {
           prix2=4;
         }        else if (valeur =="bain") {
           prix2=2;
         }
          
          else {prix2 =0;}
           document.getElementById("test2").innerHTML = prix2;  
          total();

          }

          
        </script>

      </div>

      <div id="testt2">
              <script type="text/javascript">
                function maFonctionn2(){

                  document.getElementById("testt2").innerHTML = "test";
                   number2 = document.getElementById("quantite2" ).value;

                  //var valeur = number.options[number.selectedIndex].value;
                  document.getElementById("testt2").innerHTML = "x"+number2;
                  total();
                  }
              </script>








            </div>
    </td>
   </tr>
   <tr>
       <td><select id="prestation3" name="prestation3" onChange="maFonction3()";;>   

  <optgroup label="appt -35m²">        
  <option value="">--</option>  
  <option value="Ménage confort appt -35m²">Ménage confort</option> 
  <option value="Ménage confort+ appt -35m²">Ménage confort+</option>     
  <option value="Ménage charme appt -35m²">ménage charme</option>      
  <option value="Ménage prestige appt -35m²">ménage prestige</option>   
 </optgroup>      
 
 <optgroup label="appt 35 à 45 m²">       
  <option value="Ménage confort appt 35 à 45 m²">Ménage confort</option> 
  <option value="Ménage confort+ appt 35 à 45 m²">Ménage confort+</option>       
  <option value="ménage charme appt 35 à 45 m²">Ménage charme</option>      
  <option value="ménage prestige appt 35 à 45 m²">Ménage prestige</option>   
 </optgroup>     

  <optgroup label="appt + de 45 m² Jusqu’à 8 couchages">       
  <option value="Ménage confort appt + de 45 m² Jusqu’à 8 couchages">Ménage confort</option>   
  <option value="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages">Ménage confort+</option>   
  <option value="ménage charme appt + de 45 m² Jusqu’à 8 couchages">Ménage charme</option>        
  <option value="ménage prestige appt + de 45 m² Jusqu’à 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

  <optgroup label="appt + de 45 m² plus de 8 couchages">       
  <option value="Ménage confort appt + de 45 m² plus de 8 couchages">Ménage confort</option> 
  <option value="Ménage confort+ appt + de 45 m² plus de 8 couchages">Ménage confort+</option>      
  <option value="ménage charme appt + de 45 m² plus de 8 couchages">Ménage charme</option>      
  <option value="ménage prestige appt + de 45 m² plus de 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

 <optgroup label="récepetion">        
  <option value="réception à la location">A la location</option>
  <option value="réception au bureau">Au bureau</option> 
  <option value="réception en résidence">En résidence</option>         
 </optgroup> 

  <optgroup label="linge de maison">        
  <option value="location de draps simple">Location de draps simple</option>  
  <option value="location de draps double">Location de draps double</option> 
  <option value="location de serviettes">Location de serviettes </option> 
  <option value="couette simple">Location de couette simple</option> 
  <option value="couette double">Location de couette double </option> 
  <option value="piscine">Location de serviette de piscine </option> 
  <option value="bain">Location de tapis de bain </option>
  <option value="torchon">Location de Torchons (x2) </option>
  <option value="kit bebe">Location de kit bébé) </option>    
  <option value="lit bebe">Location de lit bébé </option>   
 </optgroup> 

 <optgroup label="ventes annexes ">       
  <option value="produits d'hygiènes">produits d'hygiènes</option>
  <option value="produits d'entretien">produits d'entretien</option>    
 </optgroup> 
</select>
</td>
       <td><input type="number" name="quantite3"  id="quantite3" onChange="maFonctionn3()";;/></td>
       <td><input type="text" name="date3" value="" checked/></td>
       <td>
          <div id="test3">
        <script type="text/javascript">


          function maFonction3(){
          var select = document.getElementById("prestation3" );
          var valeur = select.options[select.selectedIndex].value;
          //document.write('<p>'+valeur+'</p>');

                     prix3 = 0;

                      if (valeur =="Ménage confort appt -35m²") {
              prix3=32 ;
            }
            else if (valeur =="Ménage confort+ appt -35m²") {
              prix3=75 ;
            }

            else if (valeur =="Ménage charme appt -35m²") {
           prix3=38;       
           }
           else if (valeur =="Ménage prestige appt -35m²") {
             prix3=88;
           }



         else if (valeur =="Ménage confort appt 35 à 45 m²") {
           prix3=37;
        }
          else if (valeur =="Ménage confort+ appt 35 à 45 m²") {
           prix3=106;
        }

         else if (valeur =="ménage charme appt 35 à 45 m²") {
           prix3=45 ;
         }
         else if (valeur =="ménage prestige appt 35 à 45 m²") {
          prix3=117;
         } 
         else if (valeur =="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
           prix3=43;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
           prix3=129;
         }
         else if (valeur =="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
           prix3=49;
         }
         else if (valeur =="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
           prix3=130;
         }
         else if (valeur =="Ménage confort appt + de 45 m² plus de 8 couchages") {
           prix3=49;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
           prix3=150;
         }


         else if (valeur =="ménage charme appt + de 45 m² plus de 8 couchages") {
           prix3=58;
         }
         else if (valeur =="ménage prestige appt + de 45 m² plus de 8 couchages") {
           prix3=170;
         }
          else if (valeur =="réception à la location") {
           prix3=40;
         }
                  else if (valeur =="réception au bureau") {
           prix3=32;
         }
         else if (valeur =="réception en résidence") {
           prix3=35;
         }
         else if (valeur =="torchon") {
           prix3=3;
         }
          else if (valeur =="kit bebe") {
           prix3=10;
         }
         else if (valeur =="lit bebe") {
           prix3=10;
         }
         else if (valeur =="location de draps simple") {
           prix3=8;
         }
          else if (valeur =="location de draps double") {
           prix3=10;
         }
          else if (valeur =="location de serviettes") {
           prix3=6;
         }
          else if (valeur =="produits d'hygiènes") {
           prix3=7;
         }
          else if (valeur =="produits d'entretien") {
           prix3=7;
         }        else if (valeur =="couette simple") {
           prix3=10;
         }        else if (valeur =="couette double") {
           prix3=13;
         }        else if (valeur =="piscine") {
           prix3=4;
         }        else if (valeur =="bain") {
           prix3=2;
         }
          else {prix3 =0;}
           document.getElementById("test3").innerHTML = prix3;  
          total();
          }
          
        </script>

      </div>

      <div id="testt3">
              <script type="text/javascript">
                function maFonctionn3(){

                  document.getElementById("testt3").innerHTML = "test";
                   number3 = document.getElementById("quantite3" ).value;
                  //var valeur = number.options[number.selectedIndex].value;
                  document.getElementById("testt3").innerHTML = "x"+number3;
                  total();
                  }
              </script>
            </div>

       </td>
   </tr>
   <tr>
       <td><select id="prestation4" name="prestation4" onChange="maFonction4()";;>   

 <optgroup label="appt -35m²">        
  <option value="">--</option>  
  <option value="Ménage confort appt -35m²">Ménage confort</option> 
  <option value="Ménage confort+ appt -35m²">Ménage confort+</option>     
  <option value="Ménage charme appt -35m²">ménage charme</option>      
  <option value="Ménage prestige appt -35m²">ménage prestige</option>   
 </optgroup>      
 
 <optgroup label="appt 35 à 45 m²">       
  <option value="Ménage confort appt 35 à 45 m²">Ménage confort</option> 
  <option value="Ménage confort+ appt 35 à 45 m²">Ménage confort+</option>       
  <option value="ménage charme appt 35 à 45 m²">Ménage charme</option>      
  <option value="ménage prestige appt 35 à 45 m²">Ménage prestige</option>   
 </optgroup>     

  <optgroup label="appt + de 45 m² Jusqu’à 8 couchages">       
  <option value="Ménage confort appt + de 45 m² Jusqu’à 8 couchages">Ménage confort</option>   
  <option value="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages">Ménage confort+</option>   
  <option value="ménage charme appt + de 45 m² Jusqu’à 8 couchages">Ménage charme</option>        
  <option value="ménage prestige appt + de 45 m² Jusqu’à 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

  <optgroup label="appt + de 45 m² plus de 8 couchages">       
  <option value="Ménage confort appt + de 45 m² plus de 8 couchages">Ménage confort</option> 
  <option value="Ménage confort+ appt + de 45 m² plus de 8 couchages">Ménage confort+</option>      
  <option value="ménage charme appt + de 45 m² plus de 8 couchages">Ménage charme</option>      
  <option value="ménage prestige appt + de 45 m² plus de 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

 <optgroup label="récepetion">        
  <option value="réception à la location">A la location</option>
  <option value="réception au bureau">Au bureau</option> 
  <option value="réception en résidence">En résidence</option>         
 </optgroup> 

   <optgroup label="linge de maison">        
  <option value="location de draps simple">Location de draps simple</option>  
  <option value="location de draps double">Location de draps double</option> 
  <option value="location de serviettes">Location de serviettes </option> 
  <option value="couette simple">Location de couette simple</option> 
  <option value="couette double">Location de couette double </option> 
  <option value="piscine">Location de serviette de piscine </option> 
  <option value="bain">Location de tapis de bain </option>
  <option value="torchon">Location de Torchons (x2) </option>
  <option value="kit bebe">Location de kit bébé) </option>    
  <option value="lit bebe">Location de lit bébé </option>   
 </optgroup> 

 <optgroup label="ventes annexes ">       
  <option value="produits d'hygiènes">produits d'hygiènes</option>
  <option value="produits d'entretien">produits d'entretien</option>    
 </optgroup> 
</select>
</td>
       <td><input type="number" name="quantite4"  id="quantite4" onChange="maFonctionn4()";;/></td>
       <td><input type="text" name="date4" value="" checked/></td>
       <td>

          <div id="test4">
        <script type="text/javascript">


          function maFonction4(){
          var select = document.getElementById("prestation4" );
          var valeur = select.options[select.selectedIndex].value;
          //document.write('<p>'+valeur+'</p>');

          prix4 =0;
                    
                        if (valeur =="Ménage confort appt -35m²") {
              prix4=32 ;
            }
            else if (valeur =="Ménage confort+ appt -35m²") {
              prix4=75 ;
            }

            else if (valeur =="Ménage charme appt -35m²") {
           prix4=38;       
           }
           else if (valeur =="Ménage prestige appt -35m²") {
             prix4=88;
           }



         else if (valeur =="Ménage confort appt 35 à 45 m²") {
           prix4=37;
        }
          else if (valeur =="Ménage confort+ appt 35 à 45 m²") {
           prix4=106;
        }

         else if (valeur =="ménage charme appt 35 à 45 m²") {
           prix4=45 ;
         }
         else if (valeur =="ménage prestige appt 35 à 45 m²") {
          prix4=117;
         } 
         else if (valeur =="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
           prix4=43;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
           prix4=129;
         }
         else if (valeur =="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
           prix4=49;
         }
         else if (valeur =="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
           prix4=130;
         }
         else if (valeur =="Ménage confort appt + de 45 m² plus de 8 couchages") {
           prix4=49;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
           prix4=150;
         }


         else if (valeur =="ménage charme appt + de 45 m² plus de 8 couchages") {
           prix4=58;
         }
         else if (valeur =="ménage prestige appt + de 45 m² plus de 8 couchages") {
           prix4=170;
         }
                  else if (valeur =="réception au bureau") {
           prix4=32;
         }
         else if (valeur =="réception en résidence") {
           prix4=35;
         }
         else if (valeur =="torchon") {
           prix4=3;
         }
          else if (valeur =="kit bebe") {
           prix4=10;
         }
         else if (valeur =="lit bebe") {
           prix4=10;
         }
         else if (valeur =="location de draps simple") {
           prix4=8;
         }
          else if (valeur =="location de draps double") {
           prix4=10;
         }
          else if (valeur =="location de serviettes") {
           prix4=6;
         }
          else if (valeur =="produits d'hygiènes") {
           prix4=7;
         }
          else if (valeur =="produits d'entretien") {
           prix4=7;
         }        else if (valeur =="couette simple") {
           prix4=10;
         }        else if (valeur =="couette double") {
           prix4=13;
         }        else if (valeur =="piscine") {
           prix4=4;
         }        else if (valeur =="bain") {
           prix4=2;
         }
          else {prix4 =0;}
           document.getElementById("test4").innerHTML = prix4;  
          total();

          }
          
        </script>

      </div>

      <div id="testt4">
              <script type="text/javascript">
                function maFonctionn4(){

                  document.getElementById("testt4").innerHTML = "test";
                   number4 = document.getElementById("quantite4" ).value;
                  //var valeur = number.options[number.selectedIndex].value;
                  document.getElementById("testt4").innerHTML = "x"+number4;
                  total();
                  }
              </script>
            </div>
       </td>
   </tr>
     <tr>
       <td><select id="prestation5" name="prestation5" onChange="maFonction5()";;>   

 <optgroup label="appt -35m²">        
  <option value="">--</option>  
  <option value="Ménage confort appt -35m²">Ménage confort</option> 
  <option value="Ménage confort+ appt -35m²">Ménage confort+</option>     
  <option value="Ménage charme appt -35m²">ménage charme</option>      
  <option value="Ménage prestige appt -35m²">ménage prestige</option>   
 </optgroup>      
 
 <optgroup label="appt 35 à 45 m²">       
  <option value="Ménage confort appt 35 à 45 m²">Ménage confort</option> 
  <option value="Ménage confort+ appt 35 à 45 m²">Ménage confort+</option>       
  <option value="ménage charme appt 35 à 45 m²">Ménage charme</option>      
  <option value="ménage prestige appt 35 à 45 m²">Ménage prestige</option>   
 </optgroup>     

  <optgroup label="appt + de 45 m² Jusqu’à 8 couchages">       
  <option value="Ménage confort appt + de 45 m² Jusqu’à 8 couchages">Ménage confort</option>   
  <option value="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages">Ménage confort+</option>   
  <option value="ménage charme appt + de 45 m² Jusqu’à 8 couchages">Ménage charme</option>        
  <option value="ménage prestige appt + de 45 m² Jusqu’à 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

  <optgroup label="appt + de 45 m² plus de 8 couchages">       
  <option value="Ménage confort appt + de 45 m² plus de 8 couchages">Ménage confort</option> 
  <option value="Ménage confort+ appt + de 45 m² plus de 8 couchages">Ménage confort+</option>      
  <option value="ménage charme appt + de 45 m² plus de 8 couchages">Ménage charme</option>      
  <option value="ménage prestige appt + de 45 m² plus de 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

 <optgroup label="récepetion">        
  <option value="réception à la location">A la location</option>
  <option value="réception au bureau">Au bureau</option> 
  <option value="réception en résidence">En résidence</option>         
 </optgroup> 

    <optgroup label="linge de maison">        
  <option value="location de draps simple">Location de draps simple</option>  
  <option value="location de draps double">Location de draps double</option> 
  <option value="location de serviettes">Location de serviettes </option> 
  <option value="couette simple">Location de couette simple</option> 
  <option value="couette double">Location de couette double </option> 
  <option value="piscine">Location de serviette de piscine </option> 
  <option value="bain">Location de tapis de bain </option>
  <option value="torchon">Location de Torchons (x2) </option>
  <option value="kit bebe">Location de kit bébé) </option>    
  <option value="lit bebe">Location de lit bébé </option>   
 </optgroup> 

 <optgroup label="ventes annexes ">       
  <option value="produits d'hygiènes">produits d'hygiènes</option>
  <option value="produits d'entretien">produits d'entretien</option>    
 </optgroup> 
</select>
</td>
       <td><input type="number" name="quantite5"  id="quantite5" onChange="maFonctionn5()";;/></td>
       <td><input type="text" name="date5" value="" checked/></td>
       <td>
          <div id="test5">
        <script type="text/javascript">


          function maFonction5(){
          var select = document.getElementById("prestation5" );
          var valeur = select.options[select.selectedIndex].value;
          //document.write('<p>'+valeur+'</p>');

                prix5 = 0;     

                       if (valeur =="Ménage confort appt -35m²") {
              prix5=32 ;
            }
            else if (valeur =="Ménage confort+ appt -35m²") {
              prix5=75 ;
            }

            else if (valeur =="Ménage charme appt -35m²") {
           prix5=38;       
           }
           else if (valeur =="Ménage prestige appt -35m²") {
             prix5=88;
           }



         else if (valeur =="Ménage confort appt 35 à 45 m²") {
           prix5=37;
        }
          else if (valeur =="Ménage confort+ appt 35 à 45 m²") {
           prix5=106;
        }

         else if (valeur =="ménage charme appt 35 à 45 m²") {
           prix5=45 ;
         }
         else if (valeur =="ménage prestige appt 35 à 45 m²") {
          prix5=117;
         } 
         else if (valeur =="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
           prix5=43;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
           prix5=129;
         }
         else if (valeur =="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
           prix5=49;
         }
         else if (valeur =="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
           prix5=130;
         }
         else if (valeur =="Ménage confort appt + de 45 m² plus de 8 couchages") {
           prix5=49;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
           prix5=150;
         }


         else if (valeur =="ménage charme appt + de 45 m² plus de 8 couchages") {
           prix5=58;
         }
         else if (valeur =="ménage prestige appt + de 45 m² plus de 8 couchages") {
           prix5=170;
         }
          else if (valeur =="réception à la location") {
           prix5=40;
         }
                  else if (valeur =="réception au bureau") {
           prix5=32;
         }
         else if (valeur =="réception en résidence") {
           prix5=40;
         }
         else if (valeur =="torchon") {
           prix5=3;
         }
          else if (valeur =="kit bebe") {
           prix5=10;
         }
         else if (valeur =="lit bebe") {
           prix5=10;
         }
         else if (valeur =="location de draps simple") {
           prix5=8;
         }
          else if (valeur =="location de draps double") {
           prix5=10;
         }
          else if (valeur =="location de serviettes") {
           prix5=6;
         }
          else if (valeur =="produits d'hygiènes") {
           prix5=7;
         }
          else if (valeur =="produits d'entretien") {
           prix5=7;
         }        else if (valeur =="couette simple") {
           prix5=10;
         }        else if (valeur =="couette double") {
           prix5=13;
         }        else if (valeur =="piscine") {
           prix5=4;
         }        else if (valeur =="bain") {
           prix5=2;
         }
          
          else {prix5 =0;}
           document.getElementById("test5").innerHTML = prix5;  
          total();

          }
          
        </script>

      </div>

      <div id="testt5">
              <script type="text/javascript">
                function maFonctionn5(){

                  document.getElementById("testt5").innerHTML = "test";
                   number5 = document.getElementById("quantite5" ).value;
                  //var valeur = number.options[number.selectedIndex].value;
                  document.getElementById("testt5").innerHTML = "x"+number5;
                  total();
                  }
              </script>
            </div>

       </td>
   </tr>
     <tr>
       <td><select id="prestation6" name="prestation6" onChange="maFonction6()";;>   

 <optgroup label="appt -35m²">        
  <option value="">--</option>  
  <option value="Ménage confort appt -35m²">Ménage confort</option> 
  <option value="Ménage confort+ appt -35m²">Ménage confort+</option>     
  <option value="Ménage charme appt -35m²">ménage charme</option>      
  <option value="Ménage prestige appt -35m²">ménage prestige</option>   
 </optgroup>      
 
 <optgroup label="appt 35 à 45 m²">       
  <option value="Ménage confort appt 35 à 45 m²">Ménage confort</option> 
  <option value="Ménage confort+ appt 35 à 45 m²">Ménage confort+</option>       
  <option value="ménage charme appt 35 à 45 m²">Ménage charme</option>      
  <option value="ménage prestige appt 35 à 45 m²">Ménage prestige</option>   
 </optgroup>     

  <optgroup label="appt + de 45 m² Jusqu’à 8 couchages">       
  <option value="Ménage confort appt + de 45 m² Jusqu’à 8 couchages">Ménage confort</option>   
  <option value="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages">Ménage confort+</option>   
  <option value="ménage charme appt + de 45 m² Jusqu’à 8 couchages">Ménage charme</option>        
  <option value="ménage prestige appt + de 45 m² Jusqu’à 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

  <optgroup label="appt + de 45 m² plus de 8 couchages">       
  <option value="Ménage confort appt + de 45 m² plus de 8 couchages">Ménage confort</option> 
  <option value="Ménage confort+ appt + de 45 m² plus de 8 couchages">Ménage confort+</option>      
  <option value="ménage charme appt + de 45 m² plus de 8 couchages">Ménage charme</option>      
  <option value="ménage prestige appt + de 45 m² plus de 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

 <optgroup label="récepetion">        
  <option value="réception à la location">A la location</option>
  <option value="réception au bureau">Au bureau</option> 
  <option value="réception en résidence">En résidence</option>         
 </optgroup> 

   <optgroup label="linge de maison">        
  <option value="location de draps simple">Location de draps simple</option>  
  <option value="location de draps double">Location de draps double</option> 
  <option value="location de serviettes">Location de serviettes </option> 
  <option value="couette simple">Location de couette simple</option> 
  <option value="couette double">Location de couette double </option> 
  <option value="piscine">Location de serviette de piscine </option> 
  <option value="bain">Location de tapis de bain </option>
  <option value="torchon">Location de Torchons (x2) </option>
  <option value="kit bebe">Location de kit bébé) </option>    
  <option value="lit bebe">Location de lit bébé </option>   
 </optgroup> 
 <optgroup label="ventes annexes ">       
  <option value="produits d'hygiènes">produits d'hygiènes</option>
  <option value="produits d'entretien">produits d'entretien</option>    
 </optgroup> 
</select>
</td>
       <td><input type="number" name="quantite6"  id="quantite6" onChange="maFonctionn6()";;/></td>
       <td><input type="text" name="date6" value="" checked/></td>
       <td>
          <div id="test6">
        <script type="text/javascript">


          function maFonction6(){
          var select = document.getElementById("prestation6" );
          var valeur = select.options[select.selectedIndex].value;
          //document.write('<p>'+valeur+'</p>');

                 prix6=0;  

                               if (valeur =="Ménage confort appt -35m²") {
              prix6=32 ;
            }
            else if (valeur =="Ménage confort+ appt -35m²") {
              prix6=75 ;
            }

            else if (valeur =="Ménage charme appt -35m²") {
           prix6=38;       
           }
           else if (valeur =="Ménage prestige appt -35m²") {
             prix6=88;
           }



         else if (valeur =="Ménage confort appt 35 à 45 m²") {
           prix6=37;
        }
          else if (valeur =="Ménage confort+ appt 35 à 45 m²") {
           prix6=106;
        }

         else if (valeur =="ménage charme appt 35 à 45 m²") {
           prix6=45 ;
         }
         else if (valeur =="ménage prestige appt 35 à 45 m²") {
          prix6=117;
         } 
         else if (valeur =="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
           prix6=43;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
           prix6=129;
         }
         else if (valeur =="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
           prix6=49;
         }
         else if (valeur =="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
           prix6=130;
         }
         else if (valeur =="Ménage confort appt + de 45 m² plus de 8 couchages") {
           prix6=49;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
           prix6=150;
         }


         else if (valeur =="ménage charme appt + de 45 m² plus de 8 couchages") {
           prix6=58;
         }
         else if (valeur =="ménage prestige appt + de 45 m² plus de 8 couchages") {
           prix6=170;
         }
         else if (valeur =="réception à la location") {
           prix6=40;
         }
                  else if (valeur =="réception au bureau") {
           prix6=32;
         }
         else if (valeur =="réception en résidence") {
           prix6=35;
         }
         else if (valeur =="torchon") {
           prix6=3;
         }
          else if (valeur =="kit bebe") {
           prix6=10;
         }
         else if (valeur =="lit bebe") {
           prix6=10;
         }
         else if (valeur =="location de draps simple") {
           prix6=8;
         }
          else if (valeur =="location de draps double") {
           prix6=10;
         }
          else if (valeur =="location de serviettes") {
           prix6=6;
         }
          else if (valeur =="produits d'hygiènes") {
           prix6=7;
         }
          else if (valeur =="produits d'entretien") {
           prix6=7;
         }        else if (valeur =="couette simple") {
           prix6=10;
         }        else if (valeur =="couette double") {
           prix6=13;
         }        else if (valeur =="piscine") {
           prix6=4;
         }        else if (valeur =="bain") {
           prix6=2;
         }
          else {prix6 =0;}
           document.getElementById("test6").innerHTML = prix6;  
          total();

          }

        </script>

      </div>

      <div id="testt6">
              <script type="text/javascript">
                function maFonctionn6(){

                  document.getElementById("testt6").innerHTML = "test";
                   number6 = document.getElementById("quantite6" ).value;
                  //var valeur = number.options[number.selectedIndex].value;
                  document.getElementById("testt6").innerHTML = "x"+number6;
                  total();
                  }
              </script>
            </div>

       </td>
   </tr>
     <tr>
       <td><select id="prestation7" name="prestation7" onChange="maFonction7()";;>   

 <optgroup label="appt -35m²">        
  <option value="">--</option>  
  <option value="Ménage confort appt -35m²">Ménage confort</option> 
  <option value="Ménage confort+ appt -35m²">Ménage confort+</option>     
  <option value="Ménage charme appt -35m²">ménage charme</option>      
  <option value="Ménage prestige appt -35m²">ménage prestige</option>   
 </optgroup>      
 
 <optgroup label="appt 35 à 45 m²">       
  <option value="Ménage confort appt 35 à 45 m²">Ménage confort</option> 
  <option value="Ménage confort+ appt 35 à 45 m²">Ménage confort+</option>       
  <option value="ménage charme appt 35 à 45 m²">Ménage charme</option>      
  <option value="ménage prestige appt 35 à 45 m²">Ménage prestige</option>   
 </optgroup>     

  <optgroup label="appt + de 45 m² Jusqu’à 8 couchages">       
  <option value="Ménage confort appt + de 45 m² Jusqu’à 8 couchages">Ménage confort</option>   
  <option value="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages">Ménage confort+</option>   
  <option value="ménage charme appt + de 45 m² Jusqu’à 8 couchages">Ménage charme</option>        
  <option value="ménage prestige appt + de 45 m² Jusqu’à 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

  <optgroup label="appt + de 45 m² plus de 8 couchages">       
  <option value="Ménage confort appt + de 45 m² plus de 8 couchages">Ménage confort</option> 
  <option value="Ménage confort+ appt + de 45 m² plus de 8 couchages">Ménage confort+</option>      
  <option value="ménage charme appt + de 45 m² plus de 8 couchages">Ménage charme</option>      
  <option value="ménage prestige appt + de 45 m² plus de 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

 <optgroup label="récepetion">        
  <option value="réception à la location">A la location</option>
  <option value="réception au bureau">Au bureau</option> 
  <option value="réception en résidence">En résidence</option>         
 </optgroup> 

    <optgroup label="linge de maison">        
  <option value="location de draps simple">Location de draps simple</option>  
  <option value="location de draps double">Location de draps double</option> 
  <option value="location de serviettes">Location de serviettes </option> 
  <option value="couette simple">Location de couette simple</option> 
  <option value="couette double">Location de couette double </option> 
  <option value="piscine">Location de serviette de piscine </option> 
  <option value="bain">Location de tapis de bain </option>
  <option value="torchon">Location de Torchons (x2) </option>
  <option value="kit bebe">Location de kit bébé) </option>    
  <option value="lit bebe">Location de lit bébé </option>   
 </optgroup> 

 <optgroup label="ventes annexes ">       
  <option value="produits d'hygiènes">produits d'hygiènes</option>
  <option value="produits d'entretien">produits d'entretien</option>    
 </optgroup> 
</select>
</td>
       <td><input type="number" name="quantite7"  id="quantite7" onChange="maFonctionn7()";;/></td>
       <td><input type="text" name="date7" value="" checked/></td>
       <td>
          <div id="test7">
        <script type="text/javascript">


          function maFonction7(){
          var select = document.getElementById("prestation7" );
          var valeur = select.options[select.selectedIndex].value;
          //document.write('<p>'+valeur+'</p>');
          prix7=0;
                    
                                if (valeur =="Ménage confort appt -35m²") {
              prix7=32 ;
            }
            else if (valeur =="Ménage confort+ appt -35m²") {
              prix7=75 ;
            }

            else if (valeur =="Ménage charme appt -35m²") {
           prix7=38;       
           }
           else if (valeur =="Ménage prestige appt -35m²") {
             prix7=88;
           }



         else if (valeur =="Ménage confort appt 35 à 45 m²") {
           prix7=37;
        }
          else if (valeur =="Ménage confort+ appt 35 à 45 m²") {
           prix7=106;
        }

         else if (valeur =="ménage charme appt 35 à 45 m²") {
           prix7=45 ;
         }
         else if (valeur =="ménage prestige appt 35 à 45 m²") {
          prix7=117;
         } 
         else if (valeur =="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
           prix7=43;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
           prix7=129;
         }
         else if (valeur =="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
           prix7=49;
         }
         else if (valeur =="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
           prix7=130;
         }
         else if (valeur =="Ménage confort appt + de 45 m² plus de 8 couchages") {
           prix7=49;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
           prix7=150;
         }


         else if (valeur =="ménage charme appt + de 45 m² plus de 8 couchages") {
           prix7=58;
         }
         else if (valeur =="ménage prestige appt + de 45 m² plus de 8 couchages") {
           prix7=170;
         }
         else if (valeur =="réception à la location") {
           prix7=40;
         }
                  else if (valeur =="réception au bureau") {
           prix7=32;
         }
         else if (valeur =="réception en résidence") {
           prix7=35;
         }
         else if (valeur =="torchon") {
           prix7=3;
         }
          else if (valeur =="kit bebe") {
           prix7=10;
         }
         else if (valeur =="lit bebe") {
           prix7=10;
         }
         else if (valeur =="location de draps simple") {
           prix7=8;
         }
          else if (valeur =="location de draps double") {
           prix7=10;
         }
          else if (valeur =="location de serviettes") {
           prix7=6;
         }
          else if (valeur =="produits d'hygiènes") {
           prix7=7;
         }
          else if (valeur =="produits d'entretien") {
           prix7=7;
         }        else if (valeur =="couette simple") {
           prix7=10;
         }        else if (valeur =="couette double") {
           prix7=13;
         }        else if (valeur =="piscine") {
           prix7=4;
         }        else if (valeur =="bain") {
           prix7=2;
         }
          else {prix7 =0;}

           document.getElementById("test7").innerHTML = prix7;  
         total();

          }
         
        </script>

      </div>

      <div id="testt7">
              <script type="text/javascript">
                function maFonctionn7(){

                  document.getElementById("testt7").innerHTML = "test";
                   number7 = document.getElementById("quantite7" ).value;
                  //var valeur = number.options[number.selectedIndex].value;
                  document.getElementById("testt7").innerHTML = "x"+number7;
                  total();
                  }
              </script>
            </div>

       </td>
   </tr>
     <tr>
       <td><select id="prestation8" name="prestation8" onChange="maFonction8()";;>   

 <optgroup label="appt -35m²">        
  <option value="">--</option>  
  <option value="Ménage confort appt -35m²">Ménage confort</option> 
  <option value="Ménage confort+ appt -35m²">Ménage confort+</option>     
  <option value="Ménage charme appt -35m²">ménage charme</option>      
  <option value="Ménage prestige appt -35m²">ménage prestige</option>   
 </optgroup>      
 
 <optgroup label="appt 35 à 45 m²">       
  <option value="Ménage confort appt 35 à 45 m²">Ménage confort</option> 
  <option value="Ménage confort+ appt 35 à 45 m²">Ménage confort+</option>       
  <option value="ménage charme appt 35 à 45 m²">Ménage charme</option>      
  <option value="ménage prestige appt 35 à 45 m²">Ménage prestige</option>   
 </optgroup>     

  <optgroup label="appt + de 45 m² Jusqu’à 8 couchages">       
  <option value="Ménage confort appt + de 45 m² Jusqu’à 8 couchages">Ménage confort</option>   
  <option value="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages">Ménage confort+</option>   
  <option value="ménage charme appt + de 45 m² Jusqu’à 8 couchages">Ménage charme</option>        
  <option value="ménage prestige appt + de 45 m² Jusqu’à 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

  <optgroup label="appt + de 45 m² plus de 8 couchages">       
  <option value="Ménage confort appt + de 45 m² plus de 8 couchages">Ménage confort</option> 
  <option value="Ménage confort+ appt + de 45 m² plus de 8 couchages">Ménage confort+</option>      
  <option value="ménage charme appt + de 45 m² plus de 8 couchages">Ménage charme</option>      
  <option value="ménage prestige appt + de 45 m² plus de 8 couchages">Ménage prestige</option>  
  
 </optgroup> 

 <optgroup label="récepetion">        
  <option value="réception à la location">A la location</option>
  <option value="réception au bureau">Au bureau</option> 
  <option value="réception en résidence">En résidence</option>         
 </optgroup> 

    <optgroup label="linge de maison">        
  <option value="location de draps simple">Location de draps simple</option>  
  <option value="location de draps double">Location de draps double</option> 
  <option value="location de serviettes">Location de serviettes </option> 
  <option value="couette simple">Location de couette simple</option> 
  <option value="couette double">Location de couette double </option> 
  <option value="piscine">Location de serviette de piscine </option> 
  <option value="bain">Location de tapis de bain </option>
  <option value="torchon">Location de Torchons (x2) </option>
  <option value="kit bebe">Location de kit bébé) </option>    
  <option value="lit bebe">Location de lit bébé </option>   
 </optgroup> 

 <optgroup label="ventes annexes ">       
  <option value="produits d'hygiènes">produits d'hygiènes</option>
  <option value="produits d'entretien">produits d'entretien</option>    
 </optgroup> 
</select>
</td>
       <td><input type="number" name="quantite8"  id="quantite8" onChange="maFonctionn8()";;/></td>
       <td><input type="text" name="date8" value="" checked/></td>
       <td>
          <div id="test8">
        <script type="text/javascript">


          function maFonction8(){
          var select = document.getElementById("prestation8" );
          var valeur = select.options[select.selectedIndex].value;
          //document.write('<p>'+valeur+'</p>');

                    prix8=0;

                                 if (valeur =="Ménage confort appt -35m²") {
              prix8=32 ;
            }
            else if (valeur =="Ménage confort+ appt -35m²") {
              prix8=75 ;
            }

            else if (valeur =="Ménage charme appt -35m²") {
           prix8=38;       
           }
           else if (valeur =="Ménage prestige appt -35m²") {
             prix8=88;
           }



         else if (valeur =="Ménage confort appt 35 à 45 m²") {
           prix8=37;
        }
          else if (valeur =="Ménage confort+ appt 35 à 45 m²") {
           prix8=106;
        }

         else if (valeur =="ménage charme appt 35 à 45 m²") {
           prix8=45 ;
         }
         else if (valeur =="ménage prestige appt 35 à 45 m²") {
          prix8=117;
         } 
         else if (valeur =="Ménage confort appt + de 45 m² Jusqu’à 8 couchages") {
           prix8=43;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² Jusqu’à 8 couchages") {
           prix8=129;
         }
         else if (valeur =="ménage charme appt + de 45 m² Jusqu’à 8 couchages") {
           prix8=49;
         }
         else if (valeur =="ménage prestige appt + de 45 m² Jusqu’à 8 couchages") {
           prix8=130;
         }
         else if (valeur =="Ménage confort appt + de 45 m² plus de 8 couchages") {
           prix8=49;
         }
         else if (valeur =="Ménage confort+ appt + de 45 m² plus de 8 couchages") {
           prix8=150;
         }


         else if (valeur =="ménage charme appt + de 45 m² plus de 8 couchages") {
           prix8=58;
         }
         else if (valeur =="ménage prestige appt + de 45 m² plus de 8 couchages") {
           prix8=170;
         }
         else if (valeur =="réception à la location") {
           prix8=40;
         }
                  else if (valeur =="réception au bureau") {
           prix8=32;
         }
         else if (valeur =="réception en résidence") {
           prix8=35;
         }
         else if (valeur =="torchon") {
           prix8=3;
         }
          else if (valeur =="kit bebe") {
           prix8=10;
         }
         else if (valeur =="lit bebe") {
           prix8=10;
         }
         else if (valeur =="location de draps simple") {
           prix8=8;
         }
          else if (valeur =="location de draps double") {
           prix8=10;
         }
          else if (valeur =="location de serviettes") {
           prix8=6;
         }
          else if (valeur =="produits d'hygiènes") {
           prix8=7;
         }
          else if (valeur =="produits d'entretien") {
           prix8=7;
         }        else if (valeur =="couette simple") {
           prix8=10;
         }        else if (valeur =="couette double") {
           prix8=13;
         }        else if (valeur =="piscine") {
           prix8=4;
         }        else if (valeur =="bain") {
           prix8=2;
         }
          else {prix8 =0;}
           document.getElementById("test8").innerHTML = prix8;  
          total();

          }
         
        </script>

      </div>

      <div id="testt8">
              <script type="text/javascript">
                function maFonctionn8(){

                  document.getElementById("testt8").innerHTML = "test";
                   number8 = document.getElementById("quantite8" ).value;
                  //var valeur = number.options[number.selectedIndex].value;
                  document.getElementById("testt8").innerHTML = "x"+number8;
                  total();
                  }
              </script>
            </div>

       </td>
   </tr>
</table>
<?php
//<input type="checkbox" name="reduc" id="reduc" onChange="maFonction()" value="up";;/> <label for="reduc">arrivée du lundi au vendredi (-50% sur les prestations d'accueil) <br></label><br />
?>
<div id="total">

        <script type="text/javascript">
            function total(){


              totall =number1*prix+number2*prix2+number3*prix3+number4*prix4+number5*prix5+number6*prix6+number7*prix7+number8*prix8

            document.getElementById("total").innerHTML = "total :"; 
           document.getElementById("total").innerHTML = "<h2> total :"+totall +"€ </h2>";  
             
          }
        </script>



</div>





