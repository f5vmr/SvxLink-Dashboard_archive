  <div class="card">
    <div class="card-header bg-primary text-white">
      Transmitter Status
    </div>
    <div class="table-responsive">
      <table id="currtx" class="table table-condensed table-striped table-hover">
        <thead>
          <tr>
            <th>TX State</th>
          </tr>
        </thead>
        <tbody id="txline">
        </tbody>
      </table>
    </div>
  </div>
  <script>
  function doXMLHTTPRequest(scriptname, elem) {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById(elem).innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET",scriptname,true);
	xmlhttp.send();
  }

  function refreshInQSOAndLastHeardList() {
	doXMLHTTPRequest("txstatus.php","txline");
  }

  var transmitting = false;
  function loadXMLDoc() {
	var xmlhttp;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("txline").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","txstatus.php",true);
	xmlhttp.send();

	var timeout = window.setTimeout("loadXMLDoc()", 1000);
  }
  loadXMLDoc();
  </script>
