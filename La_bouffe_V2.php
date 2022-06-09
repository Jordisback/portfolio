<!DOCTYPE html>
<?php
include_once('includes/include.php');
include_once('includes/header.php');


  echo "<div class='row'>";
  if ($bdd =  mysqli_connect('localhost', 'id18817360_root', '[(9+#Z1%Az#q&WW$', 'id18817360_portfolio')){
    $reqBouffe="SELECT * FROM restau WHERE etat_restau=1";
    $resBouffe= $bdd->query($reqBouffe);
    $dataBouffe=mysqli_fetch_all($resBouffe);

    foreach($dataBouffe AS $restau){
      if($restau[2]==1){
        $check = "checked='true'";
      }else{
        $check = "";
      }
      echo"<div> <input type='checkbox' id='$restau[0]' class='restau' ".$check." name='$restau[1]'> <span>".$restau[1]."</span> </div>";
    }
        echo"<button onclick='roll()'> Roll </button>";
        echo"<div id='result'></div>";

      }else{
        echo"Une erreur de bdd";
      }
      ?>
      <script>

      function roll(){
        var cptCheck=0;
        var listeRestau=document.getElementsByClassName('restau');
        var listeCorresp=[];
        var result='';
        [].forEach.call(listeRestau, function(r){
          if(r.checked){
            cptCheck++;
            var liste = {id:r.id,nom:r.name,un:cptCheck};
            listeCorresp.push(liste);
          }
        })
        var rdm=Math.floor((Math.random() * cptCheck) + 1);
        [].forEach.call(listeCorresp, function(lc){
          //console.log(lc.id);
          if(lc.un == (rdm)){
            result=lc.nom;
          }else{
            console.log('out');
          }
          console.log('---------------------------------');
        })
        document.getElementById('result').innerHTML=result;
        }
        </script>
      </div>
    </div>
  </body>

  <footer class="foot">
  </footer>
</html>
