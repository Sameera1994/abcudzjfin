// basic functions required for application and calculate marks.

function myfunction() { 
var marks1=0;
var dis = document.getElementById("dist").value;
if(dis < 50){
     marks1=0;
} else if( dis >=50 && dis <=200){
   marks1= (parseFloat(dis)-50)*0.2; 
   if (marks1>20){
   marks1=20;
   }
}else{
    marks1=20;
}
  

var tb3 = document.getElementById('tb3');
tb3.value=Number(marks1).toFixed(2);
 } 
 
  

function showHint() {
   
	var str=document.getElementById('cat').value;
	// alert(str);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Desig").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ajax/aj.php?q=" + str, true);
        xmlhttp.send();
    
}
 
 function showHint1() {
   
	var str=document.getElementById('cat_s').value;
	// alert(str);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Desig_s").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ajax/aj.php?q=" + str, true);
        xmlhttp.send();
    
}

function showdep(){

    var fac=document.getElementById('faculty').value;
	//alert(fac);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Dept").innerHTML = xmlhttp.responseText;
            }
        };
		
        xmlhttp.open("GET", "ajax/dep.php?q=" + fac, true);
        xmlhttp.send();
}
 
 function myfunction1() { 
 
var des = document.getElementById("Desig").value;
//var str=document.getElementById('cat').value;
//alert(des);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tb4").value = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ajax/des_marks.php?q=" + des, true);
        xmlhttp.send();
 /* switch(des){
        case 'no':
                 document.write('please choose an option'); break;
          case 'Senior Proffesor':
                 var Mdes = 50; break;
          case 'Proffesor':
                 var Mdes = 50; break;
          case 'Associate Professor':
                var  Mdes = 40; break;
          case 'Senior Lecturer Gr.I':
                 var Mdes = 37 ;break;
          case 'Senior Lecturer Gr.II':
                var  Mdes = 32; break;
          case 'Lecturer':
                var  Mdes = 28; break;
		  case 'Lecturer Temporary':
                var  Mdes = 20; break;	
          case 'Lecturer Probationary':
                var  Mdes = 22; 
          
          
        }

var tb4 = document.getElementById('tb4');
tb4.value=Mdes;
*/
 } 
 
 
function myfunction1_s() { 
 
var dess = document.getElementById("Desig_s").value;
//var str=document.getElementById('cat').value;
//alert(des);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tb9").value = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ajax/des_marks.php?q=" + dess, true);
        xmlhttp.send();
 
 }
 
 
function myfunction3_2() { 
 
var num1 = document.getElementById("Sservicepy").value;
var num2 = document.getElementById("Sservicepm").value;
var num3 = document.getElementById("Sservicety").value;
var num4 = document.getElementById("Sservicetm").value;
//alert(num1);
if(num1==""){
num1=0;
}
if(num2==""){
num2=0;
//alert(num1);
}
if(num3==""){
num3=0;
}
if(num4==""){
num4=0;
}

//alert(num1+""+num2+""+num3+""+num4);
var months=parseFloat(num2)+parseFloat(num4);
var years=parseFloat(num1)+parseFloat(num3);

  
       
         var marks_for_months=(months/6)*0.5;
         var MFD= years+ marks_for_months;
        
       
             

var tb10 = document.getElementById('tb10');
tb10.value=Number(MFD).toFixed(2);
if(MFD>20){
 MFD=20;
 }
finalmarks(); 
 } 
 
function myfunction3() { 
 
var num1 = document.getElementById("servicepy").value;
var num2 = document.getElementById("servicepm").value;
var num3 = document.getElementById("servicety").value;
var num4 = document.getElementById("servicetm").value;
//alert(num1);
if(num1==""){
num1=0;
}
if(num2==""){
num2=0;
//alert(num1);
}
if(num3==""){
num3=0;
}
if(num4==""){
num4=0;
}
//alert(num1+""+num2+""+num3+""+num4);
var months=parseFloat(num2)+parseFloat(num4);
var years=parseFloat(num1)+parseFloat(num3);

  
       
         var marks_for_months=(months/6)*0.5;
         var MFD= years+ marks_for_months;
        
 if(MFD>20){
 MFD=20;
 }      
             

var tb5 = document.getElementById('tb5');
tb5.value=Number(MFD).toFixed(2);
 } 
 


function myfunction4() { 

var num1 = document.getElementById("tb3").value;
var num2 = document.getElementById("tb4").value;
var num3 = document.getElementById("tb5").value;

var num4 = document.getElementById("tb9").value;
var num5 = document.getElementById("tb10").value;

var marks=parseFloat(num1)+parseFloat(num2)+parseFloat(num3);


  

var tb6 = document.getElementById('tb6');
tb6.value=marks;
var tb11 = document.getElementById('tb11');
tb11.value=marks;

} 
 
function finalmarks() { 
//alert("here");
var num1 = document.getElementById("tb3").value;
var num2 = document.getElementById("tb4").value;
var num3 = document.getElementById("tb5").value;

var num4 = document.getElementById("tb9").value;
var num5 = document.getElementById("tb10").value;
if(num4=" "){
num4=0;
}
if(num5=" "){
num5=0;
}
var markDes=parseFloat(num2)+parseFloat(num4);
if(markDes > 50){
 markDes=50;
}
var markEx=parseFloat(num3)+parseFloat(num5);
if(markEx > 20){
markEx=20;
}


var marks=parseFloat(num1)+parseFloat(markDes)+parseFloat(markEx);

//alert(marks);
  

var tb11 = document.getElementById('tb11');
tb11.value=marks;

}  
 
 
 var count=0;
 function myfunction5(id){
 
 var tb6 = document.getElementById('tb6').value;


 var tbval=parseFloat(tb6);
 var tb=document.getElementById('tb6');
 
 //alert(id);
 
 
 var arr=document.getElementById(id);

	if(arr.checked==true){
	 //alert("checked");
	 count++;
	 if(count > 5){
    //markc=10;
    tb.value=tbval;
   }else{
	 tb.value=tbval+2;
	}
	}
	else if(arr.checked==false){
	
	if(count > 5){
 //markc=10;
  tb.value=tbval;
  count--;
	}else{
	tb.value=tbval-2;
	count--;
	}
	
 }

 
 
 


 
 }
