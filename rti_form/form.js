function getDepartmentList(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Cabinet Secretariat"){
		var optionArray = ["|","|Cabinet Secretariat"];
	} else if(s1.value == "Comptroller and Auditor General of India"){
		var optionArray = ["|","|Comptroller and Auditor General of India"];
	} else if(s1.value == "Department of Administrative Reforms &amp; PG"){
		var optionArray = ["|","|Department of Administrative Reforms &amp; PG"];
	}else if(s1.value == "Department of Agricultural Research &amp; Education"){
		var optionArray = ["|","|Agricultural Technology Application Research Institute Zone I (ICAR)","|Central Agricultural University, Imphal","|Central Agroforestry Research Institute(ICAR)","|Central Coastal Agricultural Research Institute (ICAR)","|Central Institute for Arid Horticulture (ICAR)"];
	}else if(s1.value == "Department of Agriculture, Cooperation &amp; Farmers Welfare"){
		var optionArray = ["|","|All India Soil & Land Use Survey","|Central Farm Machinery Training & Testing Institute","|Central Fertiliser Quality Control & Training Institute (CFQCTI), Faridabad","|Central Institute of Horticulture","|Coconut Development Board"];
	}		
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}