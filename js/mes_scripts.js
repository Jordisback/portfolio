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
