<?php
// ----------------------------------------------------------------------------------
// Class: testRDF_testCases  W3C RDF testcases
// ----------------------------------------------------------------------------------

/**
 * This class tests the RAP RDF parser using the W3C RDF testcases
 *
 * @version  $Id$
 * @author Tobias Gau?	<tobias.gauss@web.de>
 *
 * @package unittests
 * @access	public
 */

//define("TESTCASES_DIR", "http://www.w3.org/2000/10/rdf-tests/rdfcore/");
define("TESTCASES_DIR", "http://localhost/rdfapi-php/test/unit/rdf/RDFtestCases/");



$_SESSION['rdf_positive_tests'] = array(

(1) => "amp-in-url/test001" ,
(2) => "datatypes/test001" ,
(3) => "datatypes/test002" ,
(4) => "rdf-element-not-mandatory/test001" ,
(5) => "rdfms-reification-required/test001" ,
(6) => "rdfms-uri-substructure/test001" ,
(7) => "rdfms-xmllang/test001" ,
(8) => "rdfms-xmllang/test002" ,
(9) => "rdfms-xmllang/test003" ,
(10) => "rdfms-xmllang/test004" ,
(11) => "rdfms-xmllang/test005" ,
(12) => "rdfms-xmllang/test006" ,
(13) => "unrecognised-xml-attributes/test001" ,
(14) => "unrecognised-xml-attributes/test002" ,
(15) => "xml-canon/test001" ,
(16) => "rdf-charmod-literals/test001" ,
(17) => "rdf-charmod-uris/test001" ,
(18) => "rdf-charmod-uris/test002" ,
(19) => "rdf-containers-syntax-vs-schema/test001" ,  
(20) => "rdf-containers-syntax-vs-schema/test002" ,
(21) => "rdf-containers-syntax-vs-schema/test003" ,
(22) => "rdf-containers-syntax-vs-schema/test004" ,
(23) => "rdf-containers-syntax-vs-schema/test006" ,
(24) => "rdf-containers-syntax-vs-schema/test007" ,
(25) => "rdf-containers-syntax-vs-schema/test008" ,
(26) => "rdf-ns-prefix-confusion/test0001" ,
(27) => "rdf-ns-prefix-confusion/test0003" ,
(28) => "rdf-ns-prefix-confusion/test0004" ,
(29) => "rdf-ns-prefix-confusion/test0005" ,
(30) => "rdf-ns-prefix-confusion/test0006" ,
(31) => "rdf-ns-prefix-confusion/test0009" ,
(32) => "rdf-ns-prefix-confusion/test0010" ,
(33) => "rdf-ns-prefix-confusion/test0011" ,
(34) => "rdf-ns-prefix-confusion/test0012" ,
(35) => "rdf-ns-prefix-confusion/test0013" ,
(36) => "rdf-ns-prefix-confusion/test0014" ,
(37) => "rdfms-difference-between-ID-and-about/test1" ,
// ---
//passed (38) => "rdfms-difference-between-ID-and-about/test2" ,
// ---
(39) => "rdfms-difference-between-ID-and-about/test3" ,
(40) => "rdfms-duplicate-member-props/test001" ,
(41) => "rdfms-empty-property-elements/test001" ,
(42) => "rdfms-empty-property-elements/test002" ,
(43) => "rdfms-empty-property-elements/test003" ,
(44) => "rdfms-empty-property-elements/test004" ,
(45) => "rdfms-empty-property-elements/test005" ,
(46) => "rdfms-empty-property-elements/test006" ,
(47) => "rdfms-empty-property-elements/test007" ,
(48) => "rdfms-empty-property-elements/test008" ,
(49) => "rdfms-empty-property-elements/test009" ,
(50) => "rdfms-empty-property-elements/test010" ,
(51) => "rdfms-empty-property-elements/test011" ,
(52) => "rdfms-empty-property-elements/test012" ,
(53) => "rdfms-empty-property-elements/test013" ,
(54) => "rdfms-empty-property-elements/test014" ,
(55) => "rdfms-empty-property-elements/test015" ,
(56) => "rdfms-empty-property-elements/test016" ,
(57) => "rdfms-empty-property-elements/test017" ,
(58) => "rdfms-identity-anon-resources/test001" ,
(59) => "rdfms-identity-anon-resources/test002" ,
(60) => "rdfms-identity-anon-resources/test003" ,
(61) => "rdfms-identity-anon-resources/test004" ,
(62) => "rdfms-identity-anon-resources/test005" ,
(63) => "rdfms-not-id-and-resource-attr/test001" ,
(64) => "rdfms-not-id-and-resource-attr/test002" ,
(65) => "rdfms-not-id-and-resource-attr/test004" ,
(66) => "rdfms-not-id-and-resource-attr/test005" ,
(67) => "rdfms-para196/test001" ,
(68) => "rdfms-rdf-names-use/test-001" ,
(69) => "rdfms-rdf-names-use/test-002" ,
(70) => "rdfms-rdf-names-use/test-003" ,
(71) => "rdfms-rdf-names-use/test-004" ,
(72) => "rdfms-rdf-names-use/test-005" ,
(73) => "rdfms-rdf-names-use/test-006" ,
(74) => "rdfms-rdf-names-use/test-007" ,
(75) => "rdfms-rdf-names-use/test-008" ,
(76) => "rdfms-rdf-names-use/test-009" ,
(77) => "rdfms-rdf-names-use/test-010" ,
(78) => "rdfms-rdf-names-use/test-011" ,
(79) => "rdfms-rdf-names-use/test-012" ,
(80) => "rdfms-rdf-names-use/test-013" ,
(81) => "rdfms-rdf-names-use/test-014" ,
(82) => "rdfms-rdf-names-use/test-015" ,
(83) => "rdfms-rdf-names-use/test-016" ,
(84) => "rdfms-rdf-names-use/test-017" ,
(85) => "rdfms-rdf-names-use/test-018" ,
(86) => "rdfms-rdf-names-use/test-019" ,
(87) => "rdfms-rdf-names-use/test-020" ,
(88) => "rdfms-rdf-names-use/test-021" ,
(89) => "rdfms-rdf-names-use/test-022" ,
(90) => "rdfms-rdf-names-use/test-023" ,
(91) => "rdfms-rdf-names-use/test-024" ,
(92) => "rdfms-rdf-names-use/test-025" ,
(93) => "rdfms-rdf-names-use/test-026" ,
(94) => "rdfms-rdf-names-use/test-027" ,
(95) => "rdfms-rdf-names-use/test-028" ,
(96) => "rdfms-rdf-names-use/test-029" ,
(97) => "rdfms-rdf-names-use/test-030" ,
(98) => "rdfms-rdf-names-use/test-031" ,
(99) => "rdfms-rdf-names-use/test-032" ,
(100) => "rdfms-rdf-names-use/test-033" ,
(101) => "rdfms-rdf-names-use/test-034" ,
(102) => "rdfms-rdf-names-use/test-035" ,
(103) => "rdfms-rdf-names-use/test-036" ,
(104) => "rdfms-rdf-names-use/test-037" ,
(105) => "rdfms-rdf-names-use/warn-001" ,
(106) => "rdfms-rdf-names-use/warn-002" ,
(107) => "rdfms-rdf-names-use/warn-003" ,
(108) => "rdfms-seq-representation/test001" ,
// ---
//passed, equals() (109) => "rdfms-syntax-incomplete/test001" ,
//passed, equals() (110) => "rdfms-syntax-incomplete/test002" ,
//passed, equals() (111) => "rdfms-syntax-incomplete/test003" ,
//passed, equals() (112) => "rdfms-syntax-incomplete/test004" ,
(109) => "rdfms-syntax-incomplete/test001" ,
(110) => "rdfms-syntax-incomplete/test002" ,
(111) => "rdfms-syntax-incomplete/test003" ,
(112) => "rdfms-syntax-incomplete/test004" ,

// ---
(113) => "xmlbase/test001" ,
(114) => "xmlbase/test002" ,
(115) => "xmlbase/test003" ,
(116) => "xmlbase/test004" ,
(117) => "xmlbase/test006" ,
(118) => "xmlbase/test007" ,
(119) => "xmlbase/test008" , 
(120) => "xmlbase/test009" ,
(121) => "xmlbase/test010" ,
(122) => "xmlbase/test011" ,
(123) => "xmlbase/test012" ,
(124) => "xmlbase/test013" ,
(125) => "xmlbase/test014" ,
(126) => "rdfms-xml-literal-namespaces/test001" ,
(127) => "rdfms-xml-literal-namespaces/test002" ,
(128) => "rdfs-domain-and-range/test001" ,
(129) => "rdfs-domain-and-range/test002" ,
);




$_SESSION['rdf_negative_tests'] = array(
(1) => "rdfms-abouteach/error001" ,
(2) => "rdfms-abouteach/error002" ,
(3) => "rdfms-rdf-id/error001" ,
(4) => "rdfms-rdf-id/error002" ,
(5) => "rdfms-rdf-id/error003" ,
(6) => "rdfms-rdf-id/error004" ,
(7) => "rdfms-rdf-id/error005" ,
(8) => "rdfms-rdf-id/error006" ,
(9) => "rdfms-rdf-id/error007" ,
(10) => "rdf-charmod-literals/error001" ,
(11) => "rdf-charmod-literals/error002" ,
(12) => "rdf-containers-syntax-vs-schema/error001" , 
(13) => "rdf-containers-syntax-vs-schema/error002" , 
(14) => "rdfms-difference-between-ID-and-about/error1" ,
(15) => "rdfms-empty-property-elements/error001" ,
(16) => "rdfms-empty-property-elements/error002" ,
(17) => "rdfms-empty-property-elements/error003" ,
(18) => "rdfms-rdf-names-use/error-001" ,
(19) => "rdfms-rdf-names-use/error-002" ,
(20) => "rdfms-rdf-names-use/error-003" ,
(21) => "rdfms-rdf-names-use/error-004" ,
(22) => "rdfms-rdf-names-use/error-005" ,
(23) => "rdfms-rdf-names-use/error-006" ,
(24) => "rdfms-rdf-names-use/error-007" ,
(25) => "rdfms-rdf-names-use/error-008" ,
(26) => "rdfms-rdf-names-use/error-009" ,
(27) => "rdfms-rdf-names-use/error-010" ,
(28) => "rdfms-rdf-names-use/error-011" ,
(29) => "rdfms-rdf-names-use/error-012" ,
(30) => "rdfms-rdf-names-use/error-013" ,
(31) => "rdfms-rdf-names-use/error-014" ,
(32) => "rdfms-rdf-names-use/error-015" ,
(33) => "rdfms-rdf-names-use/error-016" ,
(34) => "rdfms-rdf-names-use/error-017" ,
(35) => "rdfms-rdf-names-use/error-018" ,
(36) => "rdfms-rdf-names-use/error-019" ,
(37) => "rdfms-rdf-names-use/error-020" ,
(38) => "rdfms-syntax-incomplete/error001" ,
(39) => "rdfms-syntax-incomplete/error002" ,
(40) => "rdfms-syntax-incomplete/error003" ,
(41) => "rdfms-syntax-incomplete/error004" ,
(42) => "rdfms-syntax-incomplete/error005" ,
(43) => "rdfms-syntax-incomplete/error006" ,
);





class testRDF_testCases extends UnitTestCase {
 	function testIsEquals() {
 		
 		foreach($_SESSION['rdf_positive_tests'] as $key =>$value){
 			$model1=new MemModel();
 			$model2=new MemModel();
 			$file = $value;
 			$_SESSION['test']=&$value;
 			$_SESSION['key']=&$key;
 			$model1->load(TESTCASES_DIR .$file .".rdf");
 			$_SESSION['mod1']=$model1;
 			$model2->load(TESTCASES_DIR .$file .".nt");
 			$_SESSION['mod2']=$model2;
 			$this->assertTrue($model1->equals($model2));
 		}
 	}
 	
 	/**
 	function testIsNotEquals() {
 		foreach($_SESSION['rdf_negative_tests'] as $key =>$value){
 			$model1=new MemModel();
 			$model2=new MemModel();
 			$file = $value;
 			$_SESSION['test']=&$value;
 			$model1->load(TESTCASES_DIR .$file .".rdf");
 			$_SESSION['mod1']=$model1;
 			$model2->load(TESTCASES_DIR .$file .".nt");
 			$_SESSION['mod2']=$model2;
 			$this->assertTrue($model1->equals($model2));
 			
 		}
 	}
 	*/
 	

}





?>