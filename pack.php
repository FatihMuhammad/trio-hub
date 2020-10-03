
	
	<?php
	include("head.php");
	?>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>BaPaCk foNT</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
				<script type="text/javascript">
<!--
  function HumanToABG(form){
    var abgteks="";
    var stemp;
    var i,j;
    var acak;
    var aseli=form.aseli.value;
    
    var TabelHuruf="AEGIOSZ";
    var TabelAngka="4361052"; //01234567890
    
    var TabelVokal="AIUEO";
    
    if(aseli.length)
    {
     //modifikasi huruf besar kecil kecil
     if(form.pilihan[0].checked==true)
     {
      for(i=0;i<aseli.length;i++)
    {
      acak = Math.round(2*Math.random())
      if(acak)
         abgteks=abgteks+aseli.charAt(i).toLowerCase();
        else
         abgteks=abgteks+aseli.charAt(i).toUpperCase();
    }
   } 
   else
    abgteks=aseli;
   
   //Modifikasi huruf jadi angka
   var terganti=0;
   stemp="";
   if(form.pilihan[1].checked==true)
     {
      for(i=0;i<aseli.length;i++)
    {
     acak=Math.round(2*Math.random())
     terganti=0;
     if(acak)
     {
       
       for(j=0;j<TabelHuruf.length;j++)
       { 
        if(abgteks.charAt(i).toUpperCase()==TabelHuruf.charAt(j))
        {
          stemp=stemp+TabelAngka.charAt(j);
          
          terganti=1;
          break;
         }
        }
       }      
       
       if(terganti==0) //huruf tidak dapat diganti 
        stemp=stemp+abgteks.charAt(i);
    }
    abgteks=stemp;
   } 
  
  //disingkat-singkat biar pendek
  stemp="";
  if(form.pilihan[2].checked==true)
     {
      for(i=0;i<aseli.length;i++)
    {
     acak=Math.round(2*Math.random())
     terganti=0;
     if(acak)
     {
       
       for(j=0;j<TabelVokal.length;j++)
       { 
        if(aseli.charAt(i).toUpperCase()==TabelVokal.charAt(j))
        {
         if((aseli.charAt(i-1)!=" ")&&(i>0))
         {
           //stemp=stemp+TabelAngka.charAt(j); hilangkan saja
           terganti=1;
          }
          break;
         }
        }
       }      
       
       if(terganti==0) //huruf tidak dapat diganti 
        stemp=stemp+abgteks.charAt(i);
    }
    abgteks=stemp;
   } 
   
   
     form.abg.value=abgteks;
   }
   else
   {
    form.abg.value="hahahahaha script ini hasil contekan, sekarang mau kamu conetk lagi";
   }
    }
// -->
</script><br />
<div class="table-responsive-sm">
<form action="ABG_Text.html"><table align="center" class="table" style="width:90%;"><tbody>
<tr>           <th style="">Teks Normal</th>           <td>&nbsp;&nbsp;</td>           <th>Teks ALAY</th>          </tr>
<tr>           <th style="background-color: white;"><textarea cols="45" name="aseli" rows="10">Masukkan kalimat yang ingin dijadikan Text ALAY disini!</textarea></th>            <td>&nbsp;&nbsp;</td>           <th style="background-color: white;"><textarea cols="45" name="abg" rows="10"></textarea></th>        </tr>
<tr>           <td><input name="pilihan" type="checkbox" /> HuRUf bEsAr keCil</td><td>&nbsp;&nbsp;</td>           <th>&nbsp;&nbsp;</th>    </tr>
<tr>     <td><input name="pilihan" type="checkbox" /> P4k3 4n9k4 D0n9</td><td>&nbsp;&nbsp;</td>     <th>&nbsp;&nbsp;</th>    </tr>
<tr>     <td><input name="pilihan" type="checkbox" /> Disngkt-sngkt biar pndk</td><td>&nbsp;&nbsp;</td>     <th>&nbsp;&nbsp;</th>    </tr>
<tr>           <td><input onclick="HumanToABG(this.form)" type="button" value="Ub4h p4ck!" /></td>           <td>&nbsp;&nbsp;</td>           <td>&nbsp;&nbsp;</td>        </tr>
</tbody></table></form><br />
				</div>
				</div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
