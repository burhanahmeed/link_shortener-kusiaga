// var nilaiSKS1;
// var nilaiSKS2;
// var nilaiSKS3;
// var nilaiSKS4;
// var nilaiSKS5;
// var nilaiSKS6;

// function hitungIPS(){
		
// 		var sks1 = parseFloat(document.ips.sks1.value) || 0;
// 		var sks2 = parseFloat(document.ips.sks2.value) || 0;
// 		var sks3 = parseFloat(document.ips.sks3.value) || 0;
// 		var sks4 = parseFloat(document.ips.sks4.value) || 0;
// 		var sks5 = parseFloat(document.ips.sks5.value) || 0;
// 		var sks6 = parseFloat(document.ips.sks6.value) || 0;
// 		var nilai1 = document.ips.nilai1.value || 0;
// 		var nilai2 = document.ips.nilai2.value || 0;
// 		var nilai3 = document.ips.nilai3.value || 0;
// 		var nilai4 = document.ips.nilai4.value || 0;
// 		var nilai5 = document.ips.nilai5.value || 0;
// 		var nilai6 = document.ips.nilai6.value || 0;

// 		var totalSKS = sks1 + sks2 + sks3 + sks4 + sks5 + sks6;
// 			// nilaiSKS adalah N*S
// 		var nilaiSKS1 = sks1*nilai1;
// 		var nilaiSKS2 = sks2*nilai2;
// 		var nilaiSKS3 = sks3*nilai3;
// 		var nilaiSKS4 = sks4*nilai4;
// 		var nilaiSKS5 = sks5*nilai5;
// 		var nilaiSKS6 = sks6*nilai6;

// 		var totalNilai = nilaiSKS1 + nilaiSKS2 + nilaiSKS3 +nilaiSKS4 + nilaiSKS5 + nilaiSKS6;
// 		var totIPS = totalNilai / totalSKS;

// 		document.ips.totSks.value = totalSKS;
// 		document.ips.totNilai.value = totIPS;

// 		document.ips.ns1.value = nilaiSKS1;
// 		document.ips.ns2.value = nilaiSKS2;
// 		document.ips.ns3.value = nilaiSKS3;
// 		document.ips.ns4.value = nilaiSKS4;
// 		document.ips.ns5.value = nilaiSKS5;
// 		document.ips.ns6.value = nilaiSKS6;

// 		if ( nilai1.match("A") || nilai1.match("a")) {
// 			return 4;
// 		}

// 	}

function hitungIPS(){

var sks1 = parseFloat(document.ips.sks1.value) || 0;
var sks2 = parseFloat(document.ips.sks2.value) || 0;
var sks3 = parseFloat(document.ips.sks3.value) || 0;
var sks4 = parseFloat(document.ips.sks4.value) || 0;
var sks5 = parseFloat(document.ips.sks5.value) || 0;
var sks6 = parseFloat(document.ips.sks6.value) || 0;
var sks7 = parseFloat(document.ips.sks7.value) || 0;
var sks8 = parseFloat(document.ips.sks8.value) || 0;
var mappings = {
  'A': 4, 'a': 4,
  'AB': 3.5, 'ab': 3.5,
  'B': 3, 'b': 3,
  'BC': 2.5, 'bc':2.5,
  'C': 2, 'c':2,
  'D': 1.5, 'd': 1.5,
  'E': 1, 'e': 1
};
var nilai1 = mappings[document.ips.nilai1.value] || 0;
var nilai2 = mappings[document.ips.nilai2.value] || 0;
var nilai3 = mappings[document.ips.nilai3.value] || 0;
var nilai4 = mappings[document.ips.nilai4.value] || 0;
var nilai5 = mappings[document.ips.nilai5.value] || 0;
var nilai6 = mappings[document.ips.nilai6.value] || 0;
var nilai7 = mappings[document.ips.nilai7.value] || 0;
var nilai8 = mappings[document.ips.nilai8.value] || 0;

var totalSKS = sks1 + sks2 + sks3 + sks4 + sks5 + sks6;
    // nilaiSKS adalah N*S
var nilaiSKS1 = sks1*nilai1;
var nilaiSKS2 = sks2*nilai2;
var nilaiSKS3 = sks3*nilai3;
var nilaiSKS4 = sks4*nilai4;
var nilaiSKS5 = sks5*nilai5;
var nilaiSKS6 = sks6*nilai6;
var nilaiSKS7 = sks5*nilai7;
var nilaiSKS8 = sks6*nilai8;

var totalNilai = nilaiSKS1 + nilaiSKS2 + nilaiSKS3 +nilaiSKS4 + nilaiSKS5 + nilaiSKS6+ nilaiSKS7 + nilaiSKS8;
var totIPS = totalNilai / totalSKS;

document.ips.totSks.value = totalSKS;
document.ips.totNilai.value = totIPS.toFixed(2);

document.ips.ns1.value = nilaiSKS1;
document.ips.ns2.value = nilaiSKS2;
document.ips.ns3.value = nilaiSKS3;
document.ips.ns4.value = nilaiSKS4;
document.ips.ns5.value = nilaiSKS5;
document.ips.ns6.value = nilaiSKS6;
document.ips.ns7.value = nilaiSKS7;
document.ips.ns8.value = nilaiSKS8;
}

function shField(elm){
var add1 =document.getElementById("add1");
var add2 =document.getElementById("add2");
var add3 =document.getElementById("add3");
var add4 =document.getElementById("add4");
var add5 =document.getElementById("add5");
var add6 =document.getElementById("add6");
var rem2 =document.getElementById("rem2");
var rem3 =document.getElementById("rem3");
var rem4 =document.getElementById("rem4");
var rem5 =document.getElementById("rem5");
var rem6 =document.getElementById("rem6");

var in4 = document.getElementById("in4");
var in5 = document.getElementById("in5");
var in6 = document.getElementById("in6");
var in7 = document.getElementById("in7");
var in8 = document.getElementById("in8");

	if (elm.id == "add1") {
		in4.style.display = '';
		add1.style.display = 'none';
	}else if (elm.id=="add2") {
		rem2.style.display = 'none';
		in5.style.display = '';
		add2.style.display = 'none';
	}else if (elm.id=="add3") {
		rem3.style.display = 'none';
		in6.style.display = '';
		add3.style.display = 'none';
	}else if (elm.id=="add4") {
		rem4.style.display = 'none';
		in7.style.display = '';
		add4.style.display = 'none';
	}else if (elm.id=="add5") {
		rem5.style.display = 'none';
		in8.style.display = '';
		add5.style.display = 'none'
	}else if (elm.id=="add6") {
		add6.style.display = 'none';
	}
}

function remField(elm){
	var add1 =document.getElementById("add1");
var add2 =document.getElementById("add2");
var add3 =document.getElementById("add3");
var add4 =document.getElementById("add4");
var add5 =document.getElementById("add5");
var add6 =document.getElementById("add6");
var rem2 =document.getElementById("rem2");
var rem3 =document.getElementById("rem3");
var rem4 =document.getElementById("rem4");
var rem5 =document.getElementById("rem5");
var rem6 =document.getElementById("rem6");

var in4 = document.getElementById("in4");
var in5 = document.getElementById("in5");
var in6 = document.getElementById("in6");
var in7 = document.getElementById("in7");
var in8 = document.getElementById("in8");

	if (elm.id=="rem6") {
		in8.style.display = 'none';
		rem6.style.display = '';
		rem5.style.display = '';
		add5.style.display = '';
	}else if (elm.id=="rem5") {
		in7.style.display = 'none';
		rem5.style.display = '';
		rem4.style.display = '';
		add4.style.display = '';
	}else if (elm.id=="rem4") {
		in6.style.display = 'none';
		rem4.style.display = '';
		rem3.style.display = '';
		add3.style.display = '';
	}else if (elm.id=="rem3") {
		in5.style.display = 'none';
		rem3.style.display = '';
		rem2.style.display = '';
		add2.style.display = '';
	}else if (elm.id=="rem2") {
		in4.style.display = 'none';
		rem2.style.display = '';
		add1.style.display = '';
	}

}

function prompt(){
	var nama = prompt("Please enter your name", "Harry Potter");

	if (nama != null) {
		document.getElementById("greet").innerHTML = 
		"Hello" +nama+ "How are You Today? Would You Like to Donate?"
	}
}


// function addElementIPK(parentId,elementTag,elementId,html){
// 	var p = document.getElementById(parentId);
// 	var newElm = document.createElement(elementTag);
// 	newElm.setAttribut('id',elementId);
// 	newElm.innerHTML = html;
// 	p.appendChild(newElm);
// }
// function remElementIPK(elementId){
// 	var element = document.getElementById(elementId);
// 	element.parentNode.removeChild(element);
// }

// var fieldId=2;
// function addFieldIPK(){
// 	fieldId++;
// 	var html = '<input type="text" name="txtIpk'+fieldId'"/>'+
// 				'<a href="#" onclick="javascript:remElementIPK('text-'+fieldId+'');return false;">Remove</a>';
// 	addElementIPK('ipkfield','p','text-'+fieldId,html);
// }

$(document).ready(function() {
    var max_fields      = 16; //maximum input boxes allowed
    var wrapper         = $("#ipkfield-box"); //Fields wrapper
    var add_button      = $(".addbtnIpk"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<p><label>Semester '+x+' : </label><input type="text" name="txtIpk[]" class="txtIpkField"/><a href="#" class="remove_field">&times;</a></p>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('p').remove(); x--;
    });

    $("#totalipk").click(function () {
    var total = 0;
    $(".txtIpkField").each(function (_, e) {
        total += parseFloat(e.value, 0)
    });
    var avg = total/x; var average = avg.toFixed(2); 
    $(".totipk").val(average);
});
});


