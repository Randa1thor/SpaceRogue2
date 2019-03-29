function loadDoc(url, data, callback) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log("Data:");
        console.log(this.responseText);
        callback(this.responseText);

      }else{
        callback("Failed: state: " + this.readyState+" <br /> status:"+this.status)
      }
    };
    xhttp.open("POST", "http://localhost/SpaceRogue2/" + url, true);
    xhttp.setRequestHeader("Content-type", "application/json");
      xhttp.send(data);
      console.log("sending to " + "http://localhost/SpaceRogue2/" + url);

}

var dammitbobby=document.getElementById("db_connect").innerHTML


function testPHP(responseText){
  if(responseText.includes("PHP Working")){
    document.getElementById("php_test").innerHTML="<div>Server Online</div><div>PHP Working</div>";
    loadDoc("tests/testdb.php","",testDB)
    dammitbobby+=" Da";
  }else{
    document.getElementById("php_test").innerHTML="PHP Not Working check Server status";
  }
}


function testDB(responseText){
  document.getElementById("db_connect").innerHTML=dammitbobby+responseText+"by";
}


loadDoc("tests/testphp.php", "", testPHP);
