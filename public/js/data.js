function populate(s1,s2){
  var s1 = document.getElementById(s1);
var s2 = document.getElementById(s2);
s2.innerHTML = "";
if (s1.value == "MTN"){
  var optionArray = ["|Select",
 //"MTN 250MB|MTN 250MB = ₦300", "MTN 500MB|MTN 500MB =  ₦450",
 "MTN 1GB|MTN 1GB =  ₦500",    "MTN 2GB|MTN 2GB =  ₦1000", "MTN 5GB|MTN 5GB = ₦2500",];             }
else if (s1.value == "9MOBILE"){
var optionArray = ["|Select","9MOBILE 250MB|9MOBILE 250MB = ₦300", "9MOBILE 1GB|9MOBILE 1gb = ₦750", "9MOBILE 1.5GB|9MOBILE 1.5gb = ₦1100", "9MOBILE 2GB|9MOBILE 2gb = ₦1350", "9MOBILE 3GB|9MOBILE 3gb = ₦2050", "9MOBILE 5GB|9MOBILE 5gb = ₦3180"]; }
else if (s1.value == "GLO"){
  var optionArray = ["|Select","GLO 1.6GB or 2GB|GLO 1.6GB or 2GB = ₦1000", "GLO 3.65GB or 4.5GB|GLO 3.65GB or 4.5GB = ₦1,850",
  "GLO 5.75GB or 7.2GB|GLO 5.75GB or 7.2GB = ₦2,300", "GLO 7GB or 8.25GB|GLO 7GB or 8.25GB = ₦2,800",
  "GLO 10GB or 12.5GB|GLO 10GB or 12.5GB = ₦3,600", "GLO 12.5GB or 15.6GB|GLO 12.5GB or 15.6GB = ₦4,400",
  "GLO 20GB or 25GB|GLO 20GB or 25GB = ₦7,200"];  }
else if (s1.value == "AIRTEL"){
var optionArray = ["|Select","AIRTEL 1.5GB|AIRTEL 1.5GB = ₦1,000", "AIRTEL 3.5GB|AIRTEL 3.5GB = ₦2,000", "AIRTEL 10GB|AIRTEL 10GB = ₦4,850", "AIRTEL 16GB|AIRTEL 16GB = ₦7,800", "AIRTEL 22GB|AIRTEL 22GB = ₦9,850"];  }

      for (var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
      }
  }


function decide(s1){
  var s1 = document.getElementById(s1);
if (s1.value != ""){
  var optionArray = ["|Select",
 //"MTN 250MB|MTN 250MB = ₦300", "MTN 500MB|MTN 500MB =  ₦450",
 "MTN 1GB|m1|500", "MTN 2GB|m2|1000", "MTN 5GB|m5|2500", "|Select|","9MOBILE 250MB|n250|300",
 "9MOBILE 1GB|n1|750", "9MOBILE 1.5GB|n1_5|1100", "9MOBILE 2GB|n2|1350", "9MOBILE 3GB|n3|2050", "9MOBILE 5GB|n5|3180",
 "GLO 1.6GB or 2GB|g1_6|1000", "GLO 3.65GB or 4.5GB|g3_65|1850", "GLO 5.75GB or 7.2GB|g5_75|2300",
 "GLO 7GB or 8.25GB|g7|2800","GLO 10GB or 12.5GB|g10|3600", "GLO 12.5GB or 15.6GB|g12_5|4400","GLO 20GB or 25GB|g20|7200",
 "AIRTEL 1.5GB|a1_5|1000", "AIRTEL 3.5GB|a3_5|2000","AIRTEL 10GB|a10|4850", "AIRTEL 16GB|a16|7800", "AIRTEL 22GB|a22|9850"];
}
      for (var option in optionArray){
        var pair = optionArray[option].split("|");
         if(s1.value== pair[0]){
          var newOption1 = document.getElementById("code");

        newOption1.value =pair[1];

        var newOption2 = document.getElementById("price");
        newOption2.value = pair[2];

        document.getElementById("desc").value="client buy " + pair[2];

         }
      }
    }

function poputv(s1,s2){
  var s1 = document.getElementById(s1);
var s2 = document.getElementById(s2);
s2.innerHTML = "";
if (s1.value == "DSTV"){
  var optionArray = ["|Select",
 //"MTN 250MB|MTN 250MB = ₦300", "MTN 500MB|MTN 500MB =  ₦450",
 "DSTV Access|DSTV Access =  ₦2,000", "DSTV Family|DSTV Family =  ₦4,000", "DSTV Compact|DSTV Compact = ₦6,800",];             }
else if (s1.value == "GOTV"){
var optionArray = ["|Select","GOTV Lite|GOTV Lite = ₦400", "GOTV Value|GOTV Value = ₦1,250", "GOTV Plus|GOTV Plus = ₦1,900", "GOTV Max|GOTV Max = ₦3,200"]; }
else if (s1.value == "STARTIMES"){
  var optionArray = ["|Select","STARTIMES Nova|STARTIMES Nova = ₦900", "STARTIMES Basic|STARTIMES Basic = ₦1,300",
  "STARTIMES Smart|STARTIMES Smart = ₦1,900", "STARTIMES Classic|STARTIMES Classic = ₦2,600",
  "STARTIMES Unique|STARTIMES Unique = ₦3,800"];  }

      for (var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
      }
  }


function decidetv(s1){
  var s1 = document.getElementById(s1);
if (s1.value != ""){
  var optionArray = ["|Select", "DSTV Access|d_access|2000", "DSTV Family|d_family|4000", "DSTV Compact|d_compact|6800", "|Select|",
 "GOTV Lite|g_lite|400", "GOTV Value|g_value|1250", "GOTV Plus|g_plus|1900", "GOTV Max|g_max|3200",
 "STARTIMES Nova|s_nova|900","STARTIMES Basic|s_basic|1300", "STARTIMES Smart|s_smart|1900","STARTIMES Classic|s_classic|2600",
 "STARTIMES Unique|s_unique|3800"];
}
      for (var option in optionArray){
        var pair = optionArray[option].split("|");
         if(s1.value== pair[0]){
          var newOption1 = document.getElementById("code");

        newOption1.value =pair[1];

        var newOption2 = document.getElementById("price");
        newOption2.value = pair[2];

        document.getElementById("desc").value="client buy " + pair[2];

         }
      }
    }


    function showHint(str) {
    if (str.length == 0) {
    return;
} else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    var op=JSON.parse(this.responseText);

    var s2 = document.getElementById('dataplan');

    var length = s2.options.length;
    for (i = length-1; i >= 0; i--) {
    s2.options[i] = null;
}

    for (i in op.data) {
    var newOption = document.createElement("option");
    newOption.value = op.data[i].id;
    newOption.innerHTML = op.data[i].name + " - #"+ op.data[i].amount;
    s2.options.add(newOption);
}
}
};
    xmlhttp.open("GET", "/buydata/" + str, true);
    xmlhttp.send();
}
}

