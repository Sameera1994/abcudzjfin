var count=0;

//calculate marks function.....................
function calmarks(){
var marks1=0;
var marks2=0;
var marks_for_desig=0;
var marks_for_exp=0;
var marks_for_contri=0;

var desig_marks=document.getElementById('tb4').value;
var dist_marks=document.getElementById('tb3').value;
var exp_marks=document.getElementById('tb5').value;

var full_marks=document.getElementById('tb6');

var desig_marks_spouce=document.getElementById('tb9').value;
var exp_marks_spouce=document.getElementById('tb10').value;

var final_marks=document.getElementById('tb11');

if(desig_marks==""){
	desig_marks=0;
}
if(desig_marks_spouce==""){
	desig_marks_spouce=0;
} 
if(dist_marks==""){
	dist_marks=0;
}
if(exp_marks==""){
	exp_marks=0;
}
if(exp_marks_spouce==""){
	exp_marks_spouce=0;
}

// calculate designation marks of both.............
marks_for_desig=parseFloat(desig_marks)+parseFloat(desig_marks_spouce);
if(marks_for_desig>50){
	marks_for_desig=50;
}
document.getElementById('tb24').value=Number(desig_marks).toFixed(2);
document.getElementById('tb25').value=Number(desig_marks_spouce).toFixed(2);
document.getElementById('tb21').value=Number(marks_for_desig).toFixed(2);
 
//caculate experience marks of both....................... 
marks_for_exp=parseFloat(exp_marks)+parseFloat(exp_marks_spouce);
if(marks_for_exp > 20){
	marks_for_exp=20;
}
document.getElementById('tb22').value=Number(marks_for_exp).toFixed(2);
marks_for_contri=count*2;
if(marks_for_contri>10){
	marks_for_contri=10;
}
document.getElementById('tb23').value=Number(marks_for_contri).toFixed(2);
document.getElementById('tb27').value=Number(marks_for_contri).toFixed(2);

//full marks of applicant only....................................................
marks1=parseFloat(desig_marks)+parseFloat(exp_marks)+parseFloat(dist_marks)+parseFloat(marks_for_contri);
full_marks.value=Number(marks1).toFixed(2);

//final marks of applicant and spouce.................................................
marks2=marks_for_desig+parseFloat(dist_marks)+marks_for_exp+parseFloat(marks_for_contri);
final_marks.value=Number(marks2).toFixed(2);
document.getElementById('tbl26').value=Number(marks2).toFixed(2);
}

// calculate distance marks.................
function myfunction() { 
var marks1=0;
var dis = document.getElementById("dist").value;
	if(dis < 50){
		marks1=0;
	}
	else if( 50<=dis && dis <=200){
		marks1 = ((parseFloat(dis)-50))*(2/15);
	}
	else if(200<dis){
		marks1=20;
	}
  

var tb3 = document.getElementById('tb3');
tb3.value=Number(marks1).toFixed(2);
document.getElementById('tbl3').value=Number(marks1).toFixed(2);
document.getElementById('tbl4').value=Number(marks1).toFixed(2);
calmarks();
} 
 
 // show designation list according to the category.................
function showHint() {
   
	var str=document.getElementById('cat').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Desig").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ajax/aj.php?q=" + str, true);
        xmlhttp.send();    
}
 
// show spouce designation list according to the category................ 
 function showHint1() {
   
	var str=document.getElementById('cat_s').value;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("Desig_s").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ajax/aj.php?q=" + str, true);
        xmlhttp.send();
}

// show department list according to the faculty...........................
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


// get marks of each designation................. 
function myfunction1() { 
 
var des = document.getElementById("Desig").value;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tb4").value = xmlhttp.responseText;
				calmarks();
            }
        };
        xmlhttp.open("GET", "ajax/des_marks.php?q=" + des, true);
        xmlhttp.send();
 
 } 
 
 // get marks of each designation spouce................. 
function myfunction1_s() { 
 
var dess = document.getElementById("Desig_s").value;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tb9").value = xmlhttp.responseText;
				calmarks();
            }
        };
        xmlhttp.open("GET", "ajax/des_marks.php?q=" + dess, true);
        xmlhttp.send();
 
 }
 
//service marks for spouce.................
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
	
var tb100 = document.getElementById('tb100');
	tb100.value=Number(MFD).toFixed(2);
	if(MFD>20){
		MFD=20;
	} 
	calmarks();
} 
 
//service marks for applicant only..............
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

var tb15 = document.getElementById('tb15');
tb15.value=Number(MFD).toFixed(2);

calmarks();
 } 
 
 //check boxes adding function............................

 function myfunction5(id){
 // alert("dfbgvjs");
 var tb6 = document.getElementById('tb6').value;
//var tb6 = document.getElementById('tb6').value;

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
		}
		else{
			tb.value=tbval+2;
		}
	}
	else if(arr.checked==false){
		if(count > 5){
			//markc=10;
			tb.value=tbval;
			count--;
		}
		else{
			tb.value=tbval-2;
			count--;
		}
	}
calmarks();

 }
