<?php
// Test CVS

require_once 'reader.php';


// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();


// Set output Encoding.
$data->setOutputEncoding('CP1251');

/***
* if you want you can change 'iconv' to mb_convert_encoding:
* $data->setUTFEncoder('mb');
*
**/

/***
* By default rows & cols indeces start with 1
* For change initial index use:
* $data->setRowColOffset(0);
*
**/



/***
*  Some function for formatting output.
* $data->setDefaultFormat('%.2f');
* setDefaultFormat - set format for columns with unknown formatting
*
* $data->setColumnFormat(4, '%.3f');
* setColumnFormat - set format for column (apply only to number fields)
*
**/

$data->read('datosyelcho.xls');

/*


 $data->sheets[0]['numRows'] - count rows
 $data->sheets[0]['numCols'] - count columns
 $data->sheets[0]['cells'][$i][$j] - data from $i-row $j-column

 $data->sheets[0]['cellsInfo'][$i][$j] - extended info about cell
    
    $data->sheets[0]['cellsInfo'][$i][$j]['type'] = "date" | "number" | "unknown"
        if 'type' == "unknown" - use 'raw' value, because  cell contain value with format '0.00';
    $data->sheets[0]['cellsInfo'][$i][$j]['raw'] = value if cell without format 
    $data->sheets[0]['cellsInfo'][$i][$j]['colspan'] 
    $data->sheets[0]['cellsInfo'][$i][$j]['rowspan'] 
*/

error_reporting(E_ALL ^ E_NOTICE);

/*for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		echo "\"".$data->sheets[0]['cells'][$i][$j]."\",";
	}
	echo "\n";

} */

//echo "\"".$data->sheets[0]['numCols']."\",";

//print_r($data);
//print_r($data->formatRecords);
?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="style/main.css" type="text/css" />
	<title></title>
    
<style type="text/css">
.cssguycomments {background:#eee;border:#ddd;padding:8px;margin-bottom:40px;}
.cssguycomments p {font:normal 12px/18px verdana;}

a img {border:0;vertical-align:text-bottom;}
table {border-collapse:collapse;}
th.side {
	background: transparent url(i/bg_th_side.gif) no-repeat bottom left;
}
td.side {
	text-align:right;
	background: transparent url(i/bg_td_side.gif) no-repeat bottom left;
	width:180px;
	font:bold 12px/15px verdana;
	color:#6e6f37;
	padding-right:8px;
}

th {
	height:68px;
	border-right:1px solid #fff;
	vertical-align:bottom;
	color:#fff;
	font:normal 21px/27px arial;
	letter-spacing:2px;
	background:url(i/bg_th.gif) no-repeat bottom left;
	}
td {
	text-align:center;
	background:transparent url(i/bg_td.gif) no-repeat bottom left;
	border-right:1px solid #fff;
	color:#fff;
	width:108px;
	height:40px;
	font:bold 12px/18px verdana;
}
td.on {background:transparent url(i/bg_td_on.gif) no-repeat bottom left;}
th.on {
	background:transparent url(i/bg_th_on.gif) no-repeat bottom left;
	padding-bottom:9px;
	width:148px;
}

tfoot td {
	background:transparent url(i/bg_foot_td.gif) no-repeat top left;
	height:64px;
	vertical-align:top;
	padding-top:8px;
}
tfoot td.on {
	background:transparent url(i/bg_foot_td_on.gif) no-repeat top left;
	padding-top:16px;
}
tfoot td.side {background: transparent url(i/bg_foot_td_side.gif) no-repeat top left;}

#formcontainer {
	width:443px;
	height:239px;
	background:transparent url(i/bg_form.gif) no-repeat top left;
	position:absolute;
	top:24px;
	left:341px;
}
#formcontainer form {
	padding:8px 10px;
	margin:0;
}
#formcontainer h2 {
	margin:0;
	padding:0 0 14px 0;
	font:bold 20px/27px arial;
	color:#fff;
}
#formcontainer fieldset {
	border:none;
	padding:0;
}
#formcontainer label {
	display:block;
	float:left;
	font:bold 12px/18px verdana;
	color:#fff;
	padding-bottom:12px;
}
#formcontainer label.email {
	width:350px;
}
#formcontainer label.email input {
	width:340px;
}
#formcontainer label.password {
	clear:left;
	padding-right:40px;
}
#formcontainer label.password input,
#formcontainer label.retype input {
	width:150px;
}
#formcontainer fieldset.buttons {
	padding-top:10px;
	clear:left;
}
#prices {
	position:relative;
}

</style>

<!-- because ie is a little different with its positioning... -->
<!--[if lte IE 8]>
<style type="text/css">
#formcontainer {
	top:34px;
}
</style>
<![endif]-->

<script type="text/javascript">
/*
	For functions getElementsByClassName, addClassName, and removeClassName
	Copyright Robert Nyman, http://www.robertnyman.com
	Free to use if this text is included
*/
function getElementsByClassName(className, tag, elm){
	var testClass = new RegExp("(^|\\s)" + className + "(\\s|$)");
	var tag = tag || "*";
	var elm = elm || document;
	var elements = (tag == "*" && elm.all)? elm.all : elm.getElementsByTagName(tag);
	var returnElements = [];
	var current;
	var length = elements.length;
	for(var i=0; i<length; i++){
		current = elements[i];
		if(testClass.test(current.className)){
			returnElements.push(current);
		}
	}
	return returnElements;
}

function addClassName(elm, className){
    var currentClass = elm.className;
    if(!new RegExp(("(^|\\s)" + className + "(\\s|$)"), "i").test(currentClass)){
        elm.className = currentClass + ((currentClass.length > 0)? " " : "") + className;
    }
    return elm.className;
}

function removeClassName(elm, className){
    var classToRemove = new RegExp(("(^|\\s)" + className + "(\\s|$)"), "i");
    elm.className = elm.className.replace(classToRemove, "").replace(/^\s+|\s+$/g, "");
    return elm.className;
}

function hasClass(el, c) {
  if (!el || !el.className.length) return;
  var bits = el.className.split(' '), has = false;
  for (var j = 0; j < bits.length; j++) if (bits[j] === c) has = true;
  return has;
}

function activateThisColumn(column) {
  var table = document.getElementById('pricetable');
  var form = document.getElementById('formcontainer');

  // first, remove the 'on' class from all other th's
  var ths = table.getElementsByTagName('th');
  for (var g=0; g<ths.length; g++) {
    removeClassName(ths[g], 'on');
    if (!hasClass(ths[g],'side')) {
      ths[g].style.display = 'none';
    }
  }
  // then, remove the 'on' class from all other td's
  var tds = table.getElementsByTagName('td');
  for (var m=0; m<tds.length; m++) {
    removeClassName(tds[m], 'on');
    if (!hasClass(tds[m],'side')) {
      tds[m].style.display = 'none';
    }
  }

  // now, add the class 'on' to the selected th
  var newths = getElementsByClassName(column, 'th', table);
  for (var h=0; h<newths.length; h++) {
    addClassName(newths[h], 'on');
    newths[h].style.display = '';
    // not all browsers like display = 'block' for cells
  }
    // and finally, add the class 'on' to the selected td
  var newtds = getElementsByClassName(column, 'td', table);
  for (var i=0; i<newtds.length; i++) {
    addClassName(newtds[i], 'on');
    newtds[i].style.display = '';
    // not all browsers like display = 'block' for cells
  }
  // show the form!
  form.style.display = 'block';
}

function hideTheForm() {
	// get the form
	var form = document.getElementById('formcontainer');
	// hide the form
	form.style.display = 'none';
	
	// now get the hidden table cells and show them again
	var table = document.getElementById('pricetable');
	var tds = table.getElementsByTagName('td');
	for (var i=0; i<tds.length; i++) {
		tds[i].style.display = '';
	}
	var ths = table.getElementsByTagName('th');
	for (var k=0; k<ths.length; k++) {
		ths[k].style.display = '';
	}
}



</script>

</head>
<body>

<div class="cssguycomments">
<p>YELCHO HOTEL en la Patagonia</p>
</div>
<div class="cssguycomments">
<p>Datos Excel</p>
</div>

<div id="prices">
<div id="formcontainer" style="display:none;">
	<form action="#">
		<!--<h2>Get an account!</h2>
		<fieldset>
			<label for="email" class="email">
				Email<br />
				<input id="email" type="text" />
			</label>
			<label for="crazypassword" class="password">
				Password<br />
				<input id="crazypassword" type="password" />
			</label>
			<label for="retype" class="retype">
				Retype Password<br />
				<input id="retype" type="password" />
			</label>
		</fieldset>-->
		<fieldset class="buttons">
			<input
				type="image"
				alt="Cancel"
				src="i/button_cancel.gif"
				onclick="hideTheForm();return false;" />
			<input
				type="image"
				alt="Submit"
				src="i/button_submit.gif"
				onclick="return false;" />
		</fieldset>
	</form>
</div>

<table id="pricetable">
	<thead>
		<tr>
			<th class="side">&nbsp;</th>
			<th class="choiceA"><?php echo $data->sheets[0]['cells'][1][2]; ?></th>
			<th class="choiceB"><?php echo $data->sheets[0]['cells'][1][3]; ?></th>
			<th class="choiceC"><?php echo $data->sheets[0]['cells'][1][4]; ?></th>
			<th class="choiceD"><?php echo $data->sheets[0]['cells'][1][5]; ?></th>
			<th class="choiceE"><?php echo $data->sheets[0]['cells'][1][6]; ?></th>
            <th class="choiceF"><?php echo $data->sheets[0]['cells'][1][7]; ?></th>
            <th class="choiceG"><?php echo $data->sheets[0]['cells'][1][8]; ?></th>
            <th class="choiceH on"><?php echo $data->sheets[0]['cells'][1][9]; ?></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td class="side">&nbsp;</td>
			<td class="choiceA"><a href="signUpChoiceA.html" onclick="activateThisColumn('choiceA');return false;"><img src="i/choose.gif" alt="Choose" /></a></td>
			<td class="choiceB"><a href="signUpChoiceB.html" onclick="activateThisColumn('choiceB');return false;"><img src="i/choose.gif" alt="Choose" /></a></td>
			<td class="choiceC "><a href="signUpChoiceC.html" onclick="activateThisColumn('choiceC');return false;"><img src="i/choose.gif" alt="Choose" /></a></td>
			<td class="choiceD"><a href="signUpChoiceD.html" onclick="activateThisColumn('choiceD');return false;"><img src="i/choose.gif" alt="Choose" /></a></td>
			<td class="choiceE"><a href="signUpChoiceE.html" onclick="activateThisColumn('choiceE');return false;"><img src="i/choose.gif" alt="Choose" /></a></td>
            <td class="choiceF"><a href="signUpChoiceE.html" onclick="activateThisColumn('choiceF');return false;"><img src="i/choose.gif" alt="Choose" /></a></td>
            <td class="choiceG"><a href="signUpChoiceE.html" onclick="activateThisColumn('choiceG');return false;"><img src="i/choose.gif" alt="Choose" /></a></td>
            <td class="choiceH on"><a href="signUpChoiceE.html" onclick="activateThisColumn('choiceH');return false;"><img src="i/choose.gif" alt="Choose" /></a></td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td class="side"><?php echo $data->sheets[0]['cells'][2][1]; ?></td>
			<td class="choiceA"><?php echo $data->sheets[0]['cells'][2][2]; ?></td>
			<td class="choiceB"><?php echo $data->sheets[0]['cells'][2][3]; ?></td>
			<td class="choiceC"><?php echo $data->sheets[0]['cells'][2][4]; ?></td>
			<td class="choiceD"><?php echo $data->sheets[0]['cells'][2][5]; ?></td>
			<td class="choiceE"><?php echo $data->sheets[0]['cells'][2][6]; ?></td>
            <td class="choiceF"><?php echo $data->sheets[0]['cells'][2][7]; ?></td>
            <td class="choiceG"><?php echo $data->sheets[0]['cells'][2][8]; ?></td>
            
            <td class="choiceH on"><?php echo $data->sheets[0]['cells'][2][9]; ?></td>
		</tr>
		<tr>
			<td class="side"><?php echo $data->sheets[0]['cells'][3][1]; ?></td>
			<td class="choiceA"><?php echo $data->sheets[0]['cells'][3][2]; ?></td>
			<td class="choiceB"><?php echo $data->sheets[0]['cells'][3][3]; ?></td>
			<td class="choiceC"><?php echo $data->sheets[0]['cells'][3][4]; ?></td>
			<td class="choiceD"><?php echo $data->sheets[0]['cells'][3][5]; ?></td>
			<td class="choiceE"><?php echo $data->sheets[0]['cells'][3][6]; ?></td>
            <td class="choiceF"><?php echo $data->sheets[0]['cells'][3][7]; ?></td>
            <td class="choiceG"><?php echo $data->sheets[0]['cells'][3][8]; ?></td>
            
            <td class="choiceH on"><?php echo $data->sheets[0]['cells'][3][9]; ?></td>
		</tr>
		<tr>
			<td class="side"><?php echo $data->sheets[0]['cells'][4][1]; ?></td>
			<td class="choiceA"><?php echo $data->sheets[0]['cells'][4][2]; ?></td>
			<td class="choiceB"><?php echo $data->sheets[0]['cells'][4][3]; ?></td>
			<td class="choiceC"><?php echo $data->sheets[0]['cells'][4][4]; ?></td>
			<td class="choiceD"><?php echo $data->sheets[0]['cells'][4][5]; ?></td>
			<td class="choiceE"><?php echo $data->sheets[0]['cells'][4][6]; ?></td>
            <td class="choiceF"><?php echo $data->sheets[0]['cells'][4][7]; ?></td>
            <td class="choiceG"><?php echo $data->sheets[0]['cells'][4][8]; ?></td>
            
            <td class="choiceH on"><?php echo $data->sheets[0]['cells'][4][9]; ?></td>
		</tr>
		<tr>
			<td class="side"><?php echo $data->sheets[0]['cells'][5][1]; ?></td>
			<td class="choiceA"><?php echo $data->sheets[0]['cells'][5][2]; ?></td>
			<td class="choiceB"><?php echo $data->sheets[0]['cells'][5][3]; ?></td>
			<td class="choiceC"><?php echo $data->sheets[0]['cells'][5][4]; ?></td>
			<td class="choiceD"><?php echo $data->sheets[0]['cells'][5][5]; ?></td>
			<td class="choiceE"><?php echo $data->sheets[0]['cells'][5][6]; ?></td>
            <td class="choiceF"><?php echo $data->sheets[0]['cells'][5][7]; ?></td>
            <td class="choiceG"><?php echo $data->sheets[0]['cells'][5][8]; ?></td>
            
            <td class="choiceH on"><?php echo $data->sheets[0]['cells'][5][9]; ?></td>
		</tr>
	</tbody>
</table>
</div>

</body>
</html>
