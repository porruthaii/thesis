<?php
// ----------------------------------------------------------------------------------
// PHP Script: custom_test_n3.php
// ----------------------------------------------------------------------------------

/*
 * This is an online demo of RDF API for PHP. 
 * You can paste N3 code into the text field below and choose how the data should be 
 * processed. It's possible to parse, serialize, reify and query the data.
 * The size of your N3 code is limited to 10.000 characters, due to resource restrictions.
 * 
 * @version $Id: custom_test_n3.php 268 2006-05-15 05:28:09Z tgauss $
 * @author Chris Bizer <chris@bizer.de>
 * @author Daniel Westphal <dawe@gmx.de>
 *
 */   
?>

<head>
	<title>RAP - RDF API for PHP - N3 parser online demo</title>
	<link href="../doc/phpdoc.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
<TR> 
  <TD align=left vAlign=top>
   <DIV align="right"><BR>
      &nbsp;<a href="http://www.w3.org/RDF/" target="_blank"><img src="../doc/rdf_metadata_button.gif" width="95" height="40" border="0" alt="RDF Logo"></a> 
      &nbsp;<a href="http://www.php.net" target="_blank"><img src="../doc/php_logo.gif" width="120" height="64" border="0" alt="PHP Logo"></a></div>
    <H3>RDF API for PHP</H3>
    <H1>N3 parser online Demo</H1><BR>
     
<?php

// Function: Output a string with line numbers
function echo_string_with_linenumbers ($input_string) {
	$input_string = str_replace (" ", "&nbsp;&nbsp;", $input_string);
	$data_lines = explode('&lt;br />',str_replace('<','&lt;',nl2br($input_string)));
	$return='<table>';
	for ($i=0; $i < (count($data_lines)); $i++) {
		$return .= '<TR><TD width="30" valign="top">'.($i + 1).'.</TD><TD>'.$data_lines[$i].'</TD></TR>';
	};
	echo $return.'</TABLE>';
};


// Test if the form is submitted or the code is too long
if (!isset($_POST['submit']) OR (strlen($_POST['RDF'])>100000000)) {?>

<form method="post" action="<?php echo $HTTP_SERVER_VARS['PHP_SELF']; ?>"> 
<p>This is an online demo of <a href="http://www.wiwiss.fu-berlin.de/suhl/bizer/rdfapi/index.html">RAP
    - RDF API for PHP V0.9.1</a> . You can paste n3 code into the text field below
    and choose how the data should be processed. It's possible to parse, serialize,
    reify and query the data.</p>
<p>The size of your RDF code is limited to 10.000 characters, due to resource restrictions.</p>
<H3>Please paste N3 code here:</H3>

<?php 
// Show error message if the rdf is too long
if ((isset($_POST['submit']) AND (strlen($_POST['RDF'])>10000))) {echo "<center><h2>We're sorry, but your RDF is bigger than the allowed size</h2></center>";}; 

////////////////////////////////////////////////////////////////////
// Show input form
////////////////////////////////////////////////////////////////////
?>
<p><textarea cols="100" rows="20" name="RDF">@prefix p:  <http://www.example.org/personal_details#> .
@prefix m:  <http://www.example.org/meeting_organization#> .

<http://www.example.org/people#fred>
	p:GivenName  	"Fred";
	p:hasEmail 		<mailto:fred@example.com>;
	m:attending 	<http://meetings.example.com/cal#m1> .

<http://meetings.example.com/cal#m1>
	m:homePage 		<http://meetings.example.com/m1/hp> .
</textarea>
        <br />
      </p>
      <H3>Please choose the output format(s):</H3>
      <table width="70%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td > <div align="center"> 
              <input name="view_triple" type="checkbox" id="view_triple" value="1" checked>
            </div></td>
          <td><strong>Table with RDF triples.</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td> <div align="center"> 
              <input name="serialize" type="checkbox" id="serialize" value="1" checked>
            </div></td>
          <td><strong>Serialize model back to RDF.</strong></td>
        </tr>
		<TR><TD></TD><TD><table>
		        <tr> 
          <td><div align="center"> 
              <input name="serial_attributes" type="checkbox" id="serial_attributes" value="1">
            </div></td>
          <td>Serialize to RDF using attributes for RDF properties whereever possible.</td>
        </tr>
        <tr> 
          <td><div align="center"> 
              <input name="serial_entities" type="checkbox" id="serial_entities" value="1">
            </div></td>
          <td>Serialize to RDF using XML entities for URIs.</td>
        </tr>
        <tr> 
          <td><div align="center"> 
              <input name="serial_wo_qnames" type="checkbox" id="serial_wo_qnames" value="1">
            </div></td>
          <td>Serialize to RDF without qnames for RDF tags.</td>
        </tr>
		</table>		
		</TD></TR>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td><div align="center">
              <input name="view_dump" type="checkbox" id="view_dump" value="1">
            </div></td>
          <td><strong>toSting: Output the model as text.</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td><div align="center"> 
              <input name="reify" type="checkbox" id="reify" value="1">
            </div></td>
          <td> <strong>Reify the input model before output.</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td><div align="center"> </div></td>
          <td><strong>Query model (&quot;blank&quot; will match 
            anything):</strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><br>
            <table width="99%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="21%" > <div align="left">Subject:</div></td>
                <td width="79%"><input name="query_subject" type="text" id="query_subject2" size="50">
				  <select name="subject_kind" id="Object1_kind">
                    <option value="resource" selected>Resource</option>
                    <option value="bnode">BlankNode</option>
                  </select></td>
              </tr>
              <tr> 
                <td >Predicate:</td>
                <td><input name="query_predicate" type="text" id="query_predicate2" size="50"></td>
              </tr>
              <tr> 
                <td >Object1:</td>
                <td><input name="query_Object1" type="text" id="query_Object12" size="50">
                  <select name="Object1_kind" id="Object1_kind">
                    <option value="resource" selected>Resource</option>
                    <option value="literal">Literal</option>
					<option value="bnode">BlankNode</option>
                  </select>
				  <br>Object1 datatype: <input name="query_Object1_datatype" type="text" id="query_Object1_datatype2" size="47">
				  </td>
              </tr>
            </table></td>
        </tr>
      </table>
      <p><br />
        <br />        
        <input type="submit" name="submit" value="submit me!">
      </p>
      </form>
<?php
} else {

/////////////////////////////////////////////////////////////////
// Process RDF
// (if submitted and RDF smaller than 10000 chars)
/////////////////////////////////////////////////////////////////

define("RDFAPI_INCLUDE_DIR", "./../api/");
include(RDFAPI_INCLUDE_DIR . "RdfAPI.php");
include(RDFAPI_INCLUDE_DIR . "syntax/SyntaxN3.php");
include(RDFAPI_INCLUDE_DIR . "syntax/SyntaxRDF.php");


// Prepare RDF
$rdfInput = $_POST['RDF'];

// Show the submitted RDF
echo "<BR><H3>Your original N3 input:</h3><BR>";
echo_string_with_linenumbers($rdfInput);

// Create a new MemModel
$model = ModelFactory::getDefaultModel();
$n3pars = new n3Parser();

// Load and parse document
#$model->load($rdfInput);
$model=$n3pars->parse2model($rdfInput);

// Set the base URI of the model
$model->setBaseURI("http://www3.wiwiss.fu-berlin.de".$HTTP_SERVER_VARS['PHP_SELF']."/DemoModel#");


// Execute query on model if submitted 
if ($_POST['query_subject']!='' OR $_POST['query_predicate']!='' OR $_POST['query_Object1']!='') {

	$comment_string="<BR><H3>The following query has been executed:</H3><BR>";
	
	$query_subj = NULL;
	$query_pred = NULL;
	$query_obj = NULL;	
	
	if ($_POST['query_subject']!='') {
		if($_POST['subject_kind']=='resource'){
			$query_subj = new Resource($_POST['query_subject']); } else {
			$query_subj = new BlankNode($_POST['query_subject']); }
		$comment_string .= "Subject = ".$_POST['query_subject']."<BR>";
	};

	if ($_POST['query_predicate']!='') { 
		$query_pred = new Resource($_POST['query_predicate']);
		$comment_string .= "Predicate = ".$_POST['query_predicate']."<BR>";
	};

	if ($_POST['query_Object1']!='')  {
		if ($_POST['Object1_kind']=='resource'){
			$query_obj = new Resource($_POST['query_Object1']); } 
		elseif ($_POST['Object1_kind']=='literal') {
			$query_obj = new Literal($_POST['query_Object1']); 
			if ($_POST['query_Object1_datatype']!='') {
			$query_obj->setDatatype($_POST['query_Object1_datatype']); }
			} 
		else {
			$query_obj = new BlankNode($_POST['query_Object1']); };
		$comment_string .= "Object1 = ".$_POST['query_Object1']."<BR>";
	};
		
	// Execute query and display what has been done	
   	$model = $model->find($query_subj, $query_pred, $query_obj ); 
	echo $comment_string;
}

//  Reify the model if checked in submitted form
if (isset($_POST['reify']) and $_POST['reify']=="1") {
	$model =& $model->reify();
	echo "<BR><BR><h3>Your original model has been refied.</h3><BR>";
};


// Output Triples as Table if checked in submitted form
if ($_POST['view_triple']=="1") {
	echo "<BR><BR><h3>View input as HTML table:</h3><BR>";
	$model->writeAsHTMLTable();
	echo "<P>";
};


//serialize model to RDF with default configuration if checked in submitted form
if ($_POST['serialize']=='1') {

	// Create Serializer 
	$ser = new RDFSerializer();
    $msg_string = '';
	if (isset($_POST['serial_attributes']) and $_POST['serial_attributes']=='1') {
		$ser->configUseAttributes(TRUE);
		$msg_string .='Use Attributes ';};
	if (isset($_POST['serial_entities']) and $_POST['serial_entities']=='1') {
		$ser->configUseEntities(TRUE);
		$msg_string .='Use XML Entities ';};
	if (isset($_POST['serial_wo_qnames']) and $_POST['serial_wo_qnames']=='1') {
		$ser->configUseQnames(FALSE);
		$msg_string .='Without Qnames ';};
	$rdf =& $ser->serialize($model);
	echo "<p><BR><h3>Serialization of input model";
	if (isset($msg_string)) echo " (Options: ".$msg_string.")";
	echo ":</h3>";
	echo_string_with_linenumbers($rdf);
};

// Show dump of the model including triples if submitted in form
if (isset($_POST['view_dump']) and $_POST['view_dump']=='1') {
	echo "<BR><BR><h3>Dump of the model including triples</h3>";
	echo_string_with_linenumbers($model->toStringIncludingTriples());
};

?> <center><a href="<?php echo $HTTP_SERVER_VARS['PHP_SELF'] ?>"><h2>Go back to input form.</h2></a></center><?php
} // end of "form submitted"

?>

<BR><H1>Feedback</H1>

</p>
    <p>Please send bug reports and other comments to <a href="mailto:chris@bizer.de">Chris Bizer</a>.<br>
</p></body>
</html>
