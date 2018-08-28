function serial_drop(x,y){
    var iter=document.getElementById(x).value;
    document.getElementById(y).innerHTML="";
    for(a=1;a<=iter;a++){
        document.getElementById(y).innerHTML+="<label for='serie'>Serial " + a+" :</label>"+
        "<input type='text' class='form-control' placeholder='serial' id='"+a+"' name="+a+"><br>";
    }
}