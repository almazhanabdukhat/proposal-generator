<!--This program retrieves,outputs and processes info entered by user and info 
from Hubspot API for Agritecture Consulting and is written 
by Almazhan Abdukhat, Software Engineering Intern 2020
github: almazhanabdukhat -->
<html>
<head>
<link rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css">
<title>Proposal Generator for Agritecture Consulting </title>
</head>

<body>

<div class="body-content">
  <div class="module">
    <h1>Thank you for using Proposal Generator!</h1>
    
   

    <p>Please complete steps 1, 2, 3, 4 and then press SEARCH </p>
   <br>
    <form class="form" action="index.php" method="post" name="initial" enctype="multipart/form-data" autocomplete="off">
    <label for="userN">Step 1. Enter Consultant's name</label>
      <input id="userN" type="text" placeholder="Consultant name" name="username" required />
      <label for="emaiL">Step 2. Enter Client's email</label>
      <input id ="emaiL" type="email" placeholder="Client email" name="email" required /> 
      <input type="submit" name="test" id="test" value="SEARCH"  class="btn btn-block btn-primary" ><br/>
      
      <p>Step 3. Select farm type</p>
      <br>
      <input type="checkbox" name="f1" value="Vertical farm">&nbsp;Vertical farm&nbsp;&nbsp;&nbsp;</input>
      <input type="checkbox" name="f2" value="Greenhouse" />&nbsp;Greenhouse&nbsp;&nbsp;&nbsp;</input>
      <input type="checkbox" name="f5" value="Container farm">&nbsp;Container farm&nbsp;&nbsp;&nbsp;</input>
      <input type="checkbox" name="f4" value="Mixed">&nbsp;Mixed&nbsp;&nbsp;&nbsp;</input>
      <input type="checkbox" name="f3" value="Soil"  >&nbsp;Soil&nbsp;&nbsp;&nbsp;</input>
      <input type="checkbox" name="f6" value="Other">&nbsp;Other</input>

      <br> <br>
      <p>Step 4. Select services if needed </p>
      <br>
      <label for="education">Education</label>
<input id="education" type="checkbox" name="monotreme" value="education" />
 


      <div class="multiselect" id="answer">
          <div class="selectBox" onclick="showCheckboxes()" >
          <select>
            <option>Select education service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>
 
          <div id="checkboxesEdu" >
          <label  for="one"><input type="checkbox"  name="check_list[]" value="Curriculum Development" id="one"/>Curriculum Development</label>
            <label for="two"><input type="checkbox" name="check_list[]" value="Accelerator Program Development" id="two"/>Accelerator Program Development</label>
            <label for="three"><input type="checkbox" name="check_list[]" value="Train the Trainer"  id="three"/>Train the Trainer</label>
            <label for="four"><input type="checkbox"  name="check_list[]" value="Custom Workshops (digital or offsite)" id="four"/>Custom Workshops (digital or offsite)</label>
            <label for="five"><input type="checkbox" name="check_list[]" value="Entrepreneur Recruiting (for incubators and accelerators)" id="five"/>Entrepreneur Recruiting (for incubators and accelerators)</label>
            <label for="six"><input type="checkbox" name="check_list[]" value="Training Handbooks" id="six"/>Training Handbooks</label>
            <label for="seven"><input type="checkbox" name="check_list[]" value="Classes Development"  id="seven"/>Classes Development</label>
          </div>
        </div>
       <br> <br>
       <label for="cd">Concept Development</label>
<input id="cd" type="checkbox" name="monotreme" value="cd">

      <div class="multiselect" id="answer1">
          <div class="selectBox" onclick="showCheckboxesCd()" >
          <select>
            <option>Select cd service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>
 
          <div id="checkboxescd" >
          <label  for="one1"><input type="checkbox"  name="check_list1[]" value="Concept Brainstorming" id="one1"/>Concept Brainstorming</label>
            <label for="two1"><input type="checkbox" name="check_list1[]" value="Initial Farm Layouts" id="two1"/>Initial Farm Layouts</label>
            <label for="three1"><input type="checkbox" name="check_list1[]" value="Initial Market Research"  id="three1"/>Initial Market Research</label>
            <label for="four1"><input type="checkbox"  name="check_list1[]" value="Initial Timeline" id="four1"/>Initial Timeline</label>
            <label for="five1"><input type="checkbox" name="check_list1[]" value="Initial Capex & Opex Estimates" id="five1"/>Initial Capex & Opex Estimates</label>
            <label for="six1"><input type="checkbox" name="check_list1[]" value="Concept Brief & Pitch" id="six1"/>Concept Brief & Pitch</label>
          </div>
        </div>

        <br> <br>
       <label for="mr">Market Research</label>
<input id="mr" type="checkbox" name="monotreme" value="mr" />

      <div class="multiselect" id="answer2">
          <div class="selectBox" onclick="showCheckboxesMr()" >
          <select>
            <option>Select market research service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>

 
          <div id="checkboxesmr" >
          <label  for="one2"><input type="checkbox"  name="check_list2[]" value="Market Sizes" id="one2"/>Market Sizes</label>
            <label for="two2"><input type="checkbox" name="check_list2[]" value="Market Trends" id="two2"/>Market Trends</label>
            <label for="three2"><input type="checkbox" name="check_list2[]" value="Market Opportunities"  id="three2"/>Market Opportunities</label>
            <label for="four2"><input type="checkbox"  name="check_list2[]" value="Distribution Channels and Opportunities" id="four2"/>Distribution Channels and Opportunities</label>
            <label for="five2"><input type="checkbox" name="check_list2[]" value="Case Studies (Farm Operators)" id="five2"/>Case Studies (Farm Operators)</label>
          </div>
        </div>

        <br> <br>
       <label for="fs">Feasibility Study</label>
<input id="fs" type="checkbox" name="monotreme" value="fs" />

      <div class="multiselect" id="answer3">
          <div class="selectBox" onclick="showCheckboxesFs()" >
          <select>
            <option>Select feasibility study service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>

          <div id="checkboxesfs" >
          <label  for="one3"><input type="checkbox"  name="check_list3[]" value="Concept Development" id="one3"/>Concept Development</label>
            <label for="two3"><input type="checkbox" name="check_list3[]" value="Market Research & Crop Selection" id="two3"/>Market Research & Crop Selection</label>
            <label for="three3"><input type="checkbox" name="check_list3[]" value="Site Selection & Analysis"  id="three3"/>Site Selection & Analysis</label>
            <label for="four3"><input type="checkbox"  name="check_list3[]" value="Farm Design" id="four3"/>Farm Design</label>
            <label for="five3"><input type="checkbox" name="check_list3[]" value="Economic Model" id="five3"/>Economic Model</label>
            <label for="six3"><input type="checkbox" name="check_list3[]" value="Project Timeline & Key Resources" id="six3"/>Project Timeline & Key Resources</label>
            <label for="seven3"><input type="checkbox" name="check_list3[]" value="Feasibility Report" id="seven3"/>Feasibility Report</label>
            <label for="eight3"><input type="checkbox" name="check_list3[]" value="Business Plan" id="eight3"/>Business Plan</label>
            <label for="nine3"><input type="checkbox" name="check_list3[]" value="Investor & Stakeholder Pitch Deck" id="nine3"/>Investor & Stakeholder Pitch Deck</label>

          </div>
        </div>

        <br> <br>
       <label for="im">Implementation</label>
<input id="im" type="checkbox" name="monotreme" value="im" />

      <div class="multiselect" id="answer4">
          <div class="selectBox" onclick="showCheckboxesIm()" >
          <select>
            <option>Select implementation service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>

          <div id="checkboxesim" >
          <label  for="one4"><input type="checkbox"  name="check_list4[]" value="Project Management" id="one4"/>Project Management</label>
            <label for="two4"><input type="checkbox" name="check_list4[]" value="Vendor Negotiations & Management" id="two4"/>Vendor Negotiations & Management</label>
            <label for="three4"><input type="checkbox" name="check_list4[]" value="Team Building & Recruiting"  id="three4"/>Team Building & Recruiting</label>
            <label for="four4"><input type="checkbox"  name="check_list4[]" value="Installation Management" id="four4"/>Installation Management</label>
            <label for="five4"><input type="checkbox" name="check_list4[]" value="Food Safety Plan & Compliance" id="five4"/>Food Safety Plan & Compliance</label>
            <label for="six4"><input type="checkbox" name="check_list4[]" value="SOP’s and Operations Plan" id="six4"/>SOP’s and Operations Plan</label>
            <label for="seven4"><input type="checkbox" name="check_list4[]" value="Commissioning" id="seven4"/>Commissioning</label>
            <label for="eight4"><input type="checkbox" name="check_list4[]" value="Farm Staff Training" id="eight4"/>Farm Staff Training</label>

          </div>
        </div>

        <br> <br>
       <label for="ss">Support Service</label>
<input id="ss" type="checkbox" name="monotreme" value="ss" />

      <div class="multiselect" id="answer5">
          <div class="selectBox" onclick="showCheckboxesSs()" >
          <select>
            <option>Select support service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>
      
          <div id="checkboxesss" >
          <label  for="one5"><input type="checkbox"  name="check_list5[]" value="General Support" id="one5"/>General Support</label>
            <label for="two5"><input type="checkbox" name="check_list5[]" value="Horticultural Support" id="two5"/>Horticultural Support</label>
            <label for="three5"><input type="checkbox" name="check_list5[]" value="Operations Support"  id="three5"/>Operations Support</label>
            <label for="four5"><input type="checkbox"  name="check_list5[]" value="Technical Support" id="four5"/>Technical Support</label>
            <label for="five5"><input type="checkbox" name="check_list5[]" value="Operations Analysis" id="five5"/>Operations Analysis</label>
            <label for="six5"><input type="checkbox" name="check_list5[]" value="Fundraising Support" id="six5"/>Fundraising Supportn</label>
            <label for="seven5"><input type="checkbox" name="check_list5[]" value="Troubleshooting" id="seven5"/>Troubleshooting</label>
            <label for="eight5"><input type="checkbox" name="check_list5[]" value="R & D Guidance" id="eight5"/>R & D Guidance</label>

          </div>
        </div>

        <br> <br>
       <label for="dd">Due Diligence</label>
<input id="dd" type="checkbox" name="monotreme" value="dd" />

      <div class="multiselect" id="answer6">
          <div class="selectBox" onclick="showCheckboxesDd()" >
          <select>
            <option>Select due diligence service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>

      
          <div id="checkboxesdd" >
          <label  for="one6"><input type="checkbox"  name="check_list6[]" value="Benchmarking" id="one6"/>Benchmarking</label>
            <label for="two6"><input type="checkbox" name="check_list6[]" value="Document Review & Gaps Analysis" id="two6"/>Document Review & Gaps Analysis</label>
            <label for="three6"><input type="checkbox" name="check_list6[]" value="Project Viability Assessment"  id="three6"/>Project Viability Assessment</label>
            <label for="four6"><input type="checkbox"  name="check_list6[]" value="Team Assessment" id="four6"/>Team Assessment</label>
            <label for="five6"><input type="checkbox" name="check_list6[]" value="Risks & Opportunities Assessment" id="five6"/>Risks & Opportunities Assessment</label>
          </div>
        </div>

        <br> <br>
       <label for="bp">Brand & Product Development</label>
<input id="bp" type="checkbox" name="monotreme" value="bp" />

      <div class="multiselect" id="answer7">
          <div class="selectBox" onclick="showCheckboxesBp()" >
          <select>
            <option>Select brand & product development service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>
    
      
          <div id="checkboxesbp" >
          <label  for="one7"><input type="checkbox"  name="check_list7[]" value="Market Research" id="one7"/>Market Research</label>
            <label for="two7"><input type="checkbox" name="check_list7[]" value="Science Review" id="two7"/>Science Review</label>
            <label for="three7"><input type="checkbox" name="check_list7[]" value="R&D Plan & Proof-of-Concept Strategy"  id="three7"/>R&D Plan & Proof-of-Concept Strategy</label>
            <label for="four7"><input type="checkbox"  name="check_list7[]" value="Proof of Concept Management" id="four7"/>Proof of Concept Management</label>
            <label for="five7"><input type="checkbox" name="check_list7[]" value="Ongoing Advising" id="five7"/>Ongoing Advising</label>
            <label for="six7"><input type="checkbox" name="check_list7[]" value="Go-to-market strategy" id="six7"/>Go-to-market strategy</label>
            <label for="seven7"><input type="checkbox" name="check_list7[]" value="Brand Concept Development" id="seven7"/>Brand Concept Development</label>
            <label for="eight7"><input type="checkbox" name="check_list7[]" value="Social Media Management" id="eight7"/>Social Media Management</label>
            <label for="nine7"><input type="checkbox" name="check_list7[]" value="Sponsored Content (on our blog, office, events)" id="nine7"/>Sponsored Content (on our blog, office, events)</label>

          </div>
        </div>

        <br> <br>
        <label for="st">Sustainability</label>
<input id="st" type="checkbox" name="monotreme" value="st" />

      <div class="multiselect" id="answer8">
          <div class="selectBox" onclick="showCheckboxesSt()" >
          <select>
            <option>Select sustainability service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>
    
         
          <div id="checkboxesst" >
          <label  for="one8"><input type="checkbox"  name="check_list8[]" value="Carbon Footprint Analysis" id="one8"/>Carbon Footprint Analysis</label>
            <label for="two8"><input type="checkbox" name="check_list8[]" value="Life Cycle Analysis" id="two8"/>Life Cycle Analysis</label>
            <label for="three8"><input type="checkbox" name="check_list8[]" value="Water and Energy Use Calculations"  id="three8"/>Water and Energy Use Calculations</label>
            <label for="four8"><input type="checkbox"  name="check_list8[]" value="Social Impact Assessment" id="four8"/>Social Impact Assessment</label>
            <label for="five8"><input type="checkbox" name="check_list8[]" value="Adaptability and Resilience Assessment" id="five8"/>Adaptability and Resilience Assessment</label>
            <label for="six8"><input type="checkbox" name="check_list8[]" value="Local Food System Risk Analysis" id="six8"/>Local Food System Risk Analysis</label>
            
          </div>
        </div>


        <br> <br>
        <label for="sp">Scenario Planning</label>
<input id="sp" type="checkbox" name="monotreme" value="sp" />

      <div class="multiselect" id="answer9">
          <div class="selectBox" onclick="showCheckboxesSp()" >
          <select>
            <option>Select scenario planning service(s)</option>
          </select>
          <div class="overSelect"   ></div>
          </div>
    
          
         
          <div id="checkboxessp" >
          <label  for="one9"><input type="checkbox"  name="check_list9[]" value="Market Research" id="one9"/>Market Research</label>
            <label for="two9"><input type="checkbox" name="check_list9[]" value="Concept Development" id="two9"/>Concept Development</label>
            <label for="three9"><input type="checkbox" name="check_list9[]" value="Urban Agriculture Models Development"  id="three9"/>Urban Agriculture Models Development</label>
            <label for="four9"><input type="checkbox"  name="check_list9[]" value="Scenario Planning (unique methodology)" id="four9"/>Scenario Planning (unique methodology)</label>
            <label for="five9"><input type="checkbox" name="check_list9[]" value="Strategic Plan and Timeline" id="five9"/>Strategic Plan and Timeline</label>
            <label for="six9"><input type="checkbox" name="check_list9[]" value="Key Requirements for Strategy" id="six9"/>Key Requirements for Strategy</label>
            <label for="seven9"><input type="checkbox" name="check_list9[]" value="Project Management of Plan" id="seven9"/>Project Management of Plan</label>
            <label for="eight9"><input type="checkbox" name="check_list9[]" value="Reporting, Promotion, and Activation Events" id="eight9"/>Reporting, Promotion, and Activation Events</label>

          </div>
        </div>
      
      
      

       
    </form>
  
  <br> 
    
    
    <script>
window.onload = function() {
var c = document.getElementById('education')
c.onchange = function() {
  if (c.checked == true) {document.getElementById('answer').style.display = 'inline';}
  else {document.getElementById('answer').style.display = '';
  }
}


var cd = document.getElementById('cd')
cd.onchange = function() {
  if (cd.checked == true) {document.getElementById('answer1').style.display = 'inline';}
  else {document.getElementById('answer1').style.display = '';
  }
}

var mr = document.getElementById('mr')
mr.onchange = function() {
  if (mr.checked == true) {document.getElementById('answer2').style.display = 'inline';}
  else {document.getElementById('answer2').style.display = '';
  }
}

var fs = document.getElementById('fs')
fs.onchange = function() {
  if (fs.checked == true) {document.getElementById('answer3').style.display = 'inline';}
  else {document.getElementById('answer3').style.display = '';
  }
}

var im = document.getElementById('im')
im.onchange = function() {
  if (im.checked == true) {document.getElementById('answer4').style.display = 'inline';}
  else {document.getElementById('answer4').style.display = '';
  }
}

var ss = document.getElementById('ss')
ss.onchange = function() {
  if (ss.checked == true) {document.getElementById('answer5').style.display = 'inline';}
  else {document.getElementById('answer5').style.display = '';
  }
}

var dd = document.getElementById('dd')
dd.onchange = function() {
  if (dd.checked == true) {document.getElementById('answer6').style.display = 'inline';}
  else {document.getElementById('answer6').style.display = '';
  }
}

var bp = document.getElementById('bp')
bp.onchange = function() {
  if (bp.checked == true) {document.getElementById('answer7').style.display = 'inline';}
  else {document.getElementById('answer7').style.display = '';
  }
}


var st = document.getElementById('st')
st.onchange = function() {
  if (st.checked == true) {document.getElementById('answer8').style.display = 'inline';}
  else {document.getElementById('answer8').style.display = '';
  }
}

var sp = document.getElementById('sp')
sp.onchange = function() {
  if (sp.checked == true) {document.getElementById('answer9').style.display = 'inline';}
  else {document.getElementById('answer9').style.display = '';
  }
}

}

</script>

<?php 
error_reporting(E_ERROR | E_PARSE);

session_start();

$_SESSION['message']='';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //set post variables
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $_SESSION['message'] = "Search is successful! Retrieved information about $email from Hubspot database! Now fill in the needed fields and press CONFIRM" . "\r\n";
    $farm_type='';
    $num=0;
    if(isset($_POST['f1'])){  ++$num;
       if ($num>1){ $farm_type="Please enter here only one farm type"; } 
       else { $farm_type=$_POST['f1'];  }
    } if(isset($_POST['f2'])){
      ++$num; if ($num>1){ $farm_type="Please enter here only one farm type";} 
      else { $farm_type=($_POST['f2']); echo $farm_type;}
    } if(isset($_POST['f3'])){ ++$num; 
      if ($num>1){ $farm_type="Please enter here only one farm type"; }
       else { $farm_type=($_POST['f3']); echo $farm_type; }
     }  if(isset($_POST['f4'])){ ++$num; 
      if ($num>1){ $farm_type="Please enter here only one farm type"; }
      else { $farm_type=($_POST['f4']); echo $farm_type; }
    } if(isset($_POST['f5'])){ ++$num; 
      if ($num>1){ $farm_type="Please enter here only one farm type"; } 
      else { $farm_type=($_POST['f5']); echo $farm_type;}
    }  if(isset($_POST['f6'])){ ++$num; 
      if ($num>1){$farm_type="Please enter here only one farm type"; } 
      else { $farm_type="Enter farm type "; echo $farm_type; }
    }
    
       
       


  //education services
  $array=[]; 
  $eduServices;
  foreach($_POST['check_list'] as $selected){
      array_push($array,$selected);
  } if (empty($array)){
    $eduServices="Education services are not selected";
  } if( count($array)==1){
    $eduServices=$array[0];
  } else{
  $eduServices=implode(", ", $array);
  } 

  //concept development services
  $arrayCd=[]; 
  $cdServices;
  foreach($_POST['check_list1'] as $selected){
      array_push($arrayCd,$selected);
  } if (empty($arrayCd)){
    $cdServices="Concept development services are not selected";
  } if( count($arrayCd)==1){
    $cdServices=$arrayCd[0];
  } else{
  $cdServices=implode(", ", $arrayCd);
  } 


  //market research services
  $arrayMr=[]; 
  $mrServices;
  foreach($_POST['check_list2'] as $selected){
      array_push($arrayMr,$selected);
  } if (empty($arrayMr)){
    $mrServices="Market Research services are not selected";
  } if( count($arrayMr)==1){
    $mrServices=$arrayMr[0];
  } else{
  $mrServices=implode(", ", $arrayMr);
  } 

  //feasibility study services
  $arrayFs=[]; 
  $fsServices;
  foreach($_POST['check_list3'] as $selected){
      array_push($arrayFs,$selected);
  } if (empty($arrayFs)){
    $fsServices="Feasibility study services are not selected";
  } if( count($arrayFs)==1){
    $fsServices=$arrayFs[0];
  } else{
  $fsServices=implode(", ", $arrayFs);
  } 

  //implementation services
  $arrayIm=[]; 
  $imServices;
  foreach($_POST['check_list4'] as $selected){
      array_push($arrayIm,$selected);
  } if (empty($arrayIm)){
    $imServices="Feasibility study services are not selected";
  } if( count($arrayIm)==1){
    $imServices=$arrayIm[0];
  } else{
  $imServices=implode(", ", $arrayIm);
  } 


  //support services
  $arraySs=[]; 
  $ssServices;
  foreach($_POST['check_list5'] as $selected){
      array_push($arraySs,$selected);
  } if (empty($arraySs)){
    $ssServices="Support services are not selected";
  } if( count($arraySs)==1){
    $ssServices=$arraySs[0];
  } else{
  $ssServices=implode(", ", $arraySs);
  } 

  //due diligence services
  $arrayDd=[]; 
  $ddServices;
  foreach($_POST['check_list6'] as $selected){
      array_push($arrayDd,$selected);
  } if (empty($arrayDd)){
    $ddServices="Due diligence services are not selected";
  } if( count($arrayDd)==1){
    $ddServices=$arrayDd[0];
  } else{
  $ddServices=implode(", ", $arrayDd);
  } 

  //brand & product development services
  $arrayBp=[]; 
  $bpServices;
  foreach($_POST['check_list7'] as $selected){
      array_push($arrayBp,$selected);
  } if (empty($arrayBp)){
    $bpServices="Due diligence services are not selected";
  } if( count($arrayBp)==1){
    $bpServices=$arrayBp[0];
  } else{
  $bpServices=implode(", ", $arrayBp);
  } 


  //sustainability services
  $arraySt=[]; 
  $stServices;
  foreach($_POST['check_list8'] as $selected){
      array_push($arraySt,$selected);
  } if (empty($arraySt)){
    $stServices="Sustainability services are not selected";
  } if( count($arraySt)==1){
    $stServices=$arraySt[0];
  } else{
  $stServices=implode(", ", $arraySt);
  } 


  //scenario planning services
  $arraySp=[]; 
  $spServices;
  foreach($_POST['check_list9'] as $selected){
      array_push($arraySp,$selected);
  } if (empty($arraySp)){
    $spServices="Scenario planning  services are not selected";
  } if( count($arraySp)==1){
    $spServices=$arraySp[0];
  } else{
  $spServices=implode(", ", $arraySp);
  } 




  
  }


  $valid = (!empty($userName) && !empty($email)) && array_key_exists('test',$_POST);
  
  





  if($valid ){
  echo "Step 5. Below is the info associated with the email " . $email . ". Fill in the needed fields and press CONFIRM";
   //get contact information from the email provided by user
   $contactInfo = getByEmail($email);
   //if contact exists in Hubspot API, retrieve info
    if ($contactInfo>0){
      $firstName=$contactInfo[0];
      $lastName=$contactInfo[1];
      $contactID=$contactInfo[2];
      $numDeals=$contactInfo[3];
      $initialsDeal="";
      $companyID=getAssocCompany($contactID);
      if($companyID>0){
         $companyName = getCompanyInfo($companyID);
      } else { $companyName = "Enter company name";  } 
      $dealID = getDealInfoFromCID($email);
      //if deal doesn't exist, ask user to enter deal info
        if ($dealID<0){
          $dealID = "No Deal ID";
          $initialsDeal="No contacts associated with the deal";
          $notesStr="No notes";
        //if deal exists under contact's name, retrieve deal info
        } else {

          //1. Get associated contacts for the deal
          $contacts = getAssocContacts($dealID);
          $contLen=count($contacts);
          // get contact initials for each contact based on cid
          $dealContacts=[];
          for ($i=0;$i<$contLen;$i++){
            $contIn=getContInfoFromCID($contacts[$i]);
            $dealContact[$i]=$contIn;
          } //create a string from an array of contacts associated with a deal
          $initialsDeal = implode(", ", $dealContact);
        
          //2. Get notes for the deal
          //get all engagements associated with the deal
          $engagements = getEngInfoFromDealID($dealID);
          $lengthE=count($engagements);
          $notes=[]; //for all engagements, check if they are of type 'note'
          //get content of engagements if they are of type 'note'
          for ($i=0; $i<$lengthE;$i++){
            $e=getNotes($engagements[$i]); 
            //$e= $e . "\r\n";
            if($e!=-1){ //if of type 'notes', extract the content in an array
              $notes[$i]=$e;
            }
          }
          $notesStr=implode("\r\n", $notes);
        }
        //3. Get deal other info from deal id if have deal
        //otherwise ask user to enter deal info
        $dealInfo=getDealInfoFromDealID($dealID);
        $projAm=$dealInfo[0]; //project amount
          $dealDesc=$dealInfo[1]; //deal description
          $dealtype=$dealInfo[2]; //deal type
          $dealname = $dealInfo[3]; //deal name
          $closedate = $dealInfo[4]; //deal close date
          $assigndate = $dealInfo[5]; //deal assign date
          $ownerId=$dealInfo[6];  //deal owner id
          $ownerInit=getOwnerInfo($ownerId); //get owner's initials
          

      //if no deal is registered in hubspot, ask user to enter values    
    } else {
      $firstName="Enter client's first name";
      $lastName="Enter client's last name";
      $numDeals="Enter number of deals for the client";
      $contactID="No Contact registered with this email";
      $dealID="No Deal registered with this email";
      $projAm = "Enter projected deal amount in USD";
      $dealDesc = "Enter deal description";
      $dealtype = "Enter deal type";
      $dealname="Enter deal name";
      $closedate="Enter deal close date";
      $assigndate="Enter deal assigned date";
      $ownerInit="Enter deal owner's first and last name";
      $initialsDeal="No contacts associated with the deal";
      $notesStr="No notes";
      $companyName = "Enter company name";
      


    }
          
    
}
  


  
  
//get contact info from email entered by the user
function getByEmail(string $email)
    { //url to connect to Hubspot api
      $api_key="YOUR API KEY";
      $endpoint = "https://api.hubapi.com/contacts/v1/contact/email/{$email}/profile?hapikey={$api_key}";
      $json_response1 = @file_get_contents($endpoint);
      if($json_response1==FALSE) { //address file contents exception
        return -1;
      } else { 
        //check if first name exists
        $json_response = json_decode($json_response1, true);
        if(!empty(($json_response['properties'])['firstname'])){
          $firstname = ($json_response['properties'])['firstname']['value'];
        } else {$firstname = "Enter client's first name";}
        //check if last name exists
        if (!empty(($json_response['properties'])['lastname'])){
          $lastname = ($json_response['properties'])['lastname']['value'];
        } else {$lastname = "Enter client's last name";}
        $contact_id=($json_response['vid']);
        //check if there are deals associated with the contact
        if (!empty(($json_response['properties'])['num_associated_deals'])){
          $numDeals = ($json_response['properties'])['num_associated_deals']['value'];
        } else {$numDeals = "0";}
        //output contact info as an array
        $output = array($firstname, $lastname, $contact_id, $numDeals);
        return $output;
       }
       
   }
   //get deal id from contact id 
   function getDealInfoFromCID(string $email) {
    //https://api.hubapi.com/crm-associations/v1/associations/25/HUBSPOT_DEFINED/15?hapikey=demo
       //first get contact info from email entered by the user
        $contactArray=getByEmail($email);
        $contId=$contactArray[2];
        $api_key="YOUR API KEY";
        $endpoint2 = "https://api.hubapi.com/crm-associations/v1/associations/{$contId}/HUBSPOT_DEFINED/4?hapikey={$api_key}";
        $json_response1 = @file_get_contents($endpoint2); 
        if ($json_response1==FALSE) {    //address file contents exception
          return -1;   //no deal for the contact
        } else {
          $json_response = json_decode($json_response1, true); 
          $outAr = ($json_response['results']);
          if (!empty($outAr)) {
            $output=$outAr[0];  //return deal id
            return $output;
          } else {return -1;}  
          
        }  
   }
   function getEngInfoFromDealID(string $dealID) {
    
    //https://api.hubapi.com/crm-associations/v1/associations/25/HUBSPOT_DEFINED/15?hapikey=demo
       $api_key="YOUR API KEY";
        $endpoint2 = "https://api.hubapi.com/crm-associations/v1/associations/{$dealID}/HUBSPOT_DEFINED/11?hapikey={$api_key}";
        $json_response1 = @file_get_contents($endpoint2);
        if ($json_response1==FALSE) { //address file contents error
          $result = "No engagements associated with the deal"; 
          return $result; //if no engagements exist
        } else { //if engagements exist, return an array of all engagements for the deal
          $json_response = json_decode($json_response1, true);
          $result=[]; 
          $engagements = ($json_response['results']);
          $length=count($engagements); //number of eng-s
          for ($i=0;$i<$length;$i++){
            $result[$i]=$engagements[$i];
          }
          return $result; 
        }  
   }



   //get deal info from deal id 
   function getDealInfoFromDealID(string $dealId) {
     //https://api.hubapi.com/deals/v1/deal/18479339?hapikey=demo
        $api_key="YOUR API KEY";
        $endpoint2 = "https://api.hubapi.com/deals/v1/deal/{$dealId}?hapikey={$api_key}";
        $json_response1 = @file_get_contents($endpoint2);
        if ($json_response1==FALSE) { //if no deal info, ask user to enter it
          $projAmount = "Enter projected deal amount in USD";
          $dealDescr = "Enter deal description";
          $dealType = "Enter deal type";
          $dealName ="Enter deal name";
          $closeDate="Enter close date";
          $assignDate="Enter deal assigned date";
          $ownerID=0;
          $secondOwnerID=0;
          $output = array($projAmount, $dealDescr, $dealType,$dealName,$closeDate,$assignDate, $ownerID,$secondOwnerID);
          return $output;
        } else { //if deal exists
          $json_response = json_decode($json_response1, true);
          //check if deal is empty
          if (!empty(($json_response['properties']))){
            //get projected amount if have
            if (!empty(($json_response['properties'])['amount'])){
              $projAmount = ($json_response['properties'])['amount']['value'];
            } else { $projAmount = "Enter projected deal amount in USD"; }
            //get deal description if have
            if (!empty(($json_response['properties'])['description'])){
              $dealDescr = ($json_response['properties'])['description']['value'];
            } else { $dealDescr = "Enter deal description"; }
            //get deal type if have
            if (!empty(($json_response['properties'])['dealtype'])){
              $dealType = ($json_response['properties'])['dealtype']['value'];
            } else { $dealType = "Enter deal type"; }
            //get deal name if have
            if (!empty(($json_response['properties'])['dealname'])){
              $dealName = ($json_response['properties'])['dealname']['value'];
            } else { $dealName = "Enter deal name"; }
            //get close date if have
            if (!empty(($json_response['properties'])['closedate'])){
              $closeMil = ($json_response['properties'])['closedate']['value'];
              $secondsC = $closeMil / 1000;
              $closeDate=date("d/m/Y", $secondsC);
            } else { $closeDate = "Enter deal close date"; }
            //get assigned date if have
            if (!empty(($json_response['properties'])['hubspot_owner_assigneddate'])){
              $assignMil = ($json_response['properties'])['hubspot_owner_assigneddate']['value'];
              $seconds = $assignMil / 1000;
              $assignDate=date("d/m/Y", $seconds);
            } else { $assignDate = "Enter deal assigned date"; }
            //get owner id if have
            if (!empty(($json_response['properties'])['hubspot_owner_id'])){
              $ownerID = ($json_response['properties'])['hubspot_owner_id']['value'];
            } else { $ownerID = 0; }
            //get secondary owner id if have
            if (!empty(($json_response['properties'])['secondary_owner_id'])){
              $secondOwnerID = ($json_response['properties'])['secondary_owner_id']['value'];
            } else { $secondOwnerID = 0; }
            
            //return output - deal info - as an array
            $output = array($projAmount, $dealDescr, $dealType, $dealName,$closeDate,$assignDate,$ownerID,$secondOwnerID);
            return $output;
          } 
          
        
        }  
   }
    
   //get owner info from owner ID
   function getOwnerInfo(string $ownerID) {
        $api_key="YOUR API KEY";
        $endpointO = "http://api.hubapi.com/owners/v2/owners/{$ownerID}?hapikey={$api_key}";
        $json_response1 = @file_get_contents($endpointO);
        if ($json_response1==FALSE) { //address file contents exception
          $result="Enter deal owner's first and last name"; //if no owner, ask the user to enter it
          return $result;
        } else { //if owner exists
          $json_response = json_decode($json_response1, true);
          //get owner's first name
          if (!empty($json_response['firstName'])){
            $ownerFirstName=($json_response['firstName']);
          } else $ownerFirstName="";
          //get owner's last name
          if (!empty($json_response['lastName'])){
            $ownerLastName=($json_response['lastName']);
          } else $ownerLastName="";
          //if neither first nor last names exist, ask user to enter
          if($ownerFirstName=="" && $ownerLastName==""){ 
            $result = "Enter deal owner's first and last name";
            return $result;
          } else { //concatinate first and last names if have
            $res = $ownerFirstName . " ";
            $result = $res . $ownerLastName;
            return $result; //return result as string
          }
        
        }  
   }
  //get company info from company id
   function getCompanyInfo(string $compID) {
    //https://api.hubapi.com/companies/v2/companies/{$compID}?hapikey
     $api_key="YOUR API KEY";
    $endpointO = "https://api.hubapi.com/companies/v2/companies/{$compID}?hapikey={$api_key}";
    $json_response1 = @file_get_contents($endpointO);
    if ($json_response1==FALSE) { //address file contents exception
      $result="Enter company name"; //if no company, ask the user to enter it
      return $result;
    } else { //if company exists
      $json_response = json_decode($json_response1, true);
      //get name exists, get it
      if (!empty($json_response['properties']['name']['value'])){
        $result=($json_response['properties'])['name']['value'];
        return $result;
      } else { //otherwise ask user to enter it
         return "Enter company name"; 
      }
      } 
    }  


   
   //get contacts associated with the deal from deal id
   function getAssocContacts ($dealID){
     $api_key="YOUR API KEY";
     //https://api.hubapi.com/crm-associations/v1/associations/25/HUBSPOT_DEFINED/15?hapikey=demo
    $endpointS = "https://api.hubapi.com/crm-associations/v1/associations/{$dealID}/HUBSPOT_DEFINED/3?hapikey={$api_key}";
    $json_response1 = @file_get_contents($endpointS); //address file contents exception
    if ($json_response1==FALSE) {
      $result="No contacts for this deal"; //if no contacts exist 
      return $result;     
    } else { //if contacts exist, put them all in array
      $array= [];
      $json_response = json_decode($json_response1, true);
      $contacts = $json_response['results'];
      $contLen=count($contacts); //number of contacts for the deal
      for ($i = 0; $i< $contLen; $i++) {
        $array[$i]=$contacts[$i];
      }
      return $array; //return array of contacts
    }
  }

  //get company associated with the contact id
  function getAssocCompany ($cid){
    //https://api.hubapi.com/crm-associations/v1/associations/25/HUBSPOT_DEFINED/15?hapikey=demo
    $api_key="YOUR API KEY";
   $endpointS = "https://api.hubapi.com/crm-associations/v1/associations/{$cid}/HUBSPOT_DEFINED/1?hapikey={$api_key}";
   $json_response1 = @file_get_contents($endpointS); //address file contents exception
   if ($json_response1==FALSE) { 
     return -1;     //if no company exists 
   } else { //if a company exists, put them all in array
     $json_response = json_decode($json_response1, true);
     $result = $json_response['results'][0];
     return $result; //return the company contacts
   }
 }
 
  //get eng type-notes from an engagement id (for each deal)
    function getNotes ($eng){
    $api_key="YOUR API KEY";
   $endpointS = "https://api.hubapi.com/engagements/v1/engagements/{$eng}?hapikey={$api_key}";
   $json_response1 = @file_get_contents($endpointS); //address file contents error
   if ($json_response1==FALSE) {
     return -1; //if no notes
   } else { //if notes exist, get the text
     $json_response = json_decode($json_response1, true);
     $type=($json_response['engagement'])['type']; //get engagement type
     //extract only engagements of type 'note' (skip emails and other engagement types)
     if($type=="NOTE"){
      $res = ($json_response['engagement'])['bodyPreview'];
      $result = ">>>" . $res . "\r\n";
      return $result;
     } else {
      return -1;
     }
     
   }
 }

  //get contact info from contact id
  function getContInfoFromCID ($CID){
    $api_key="YOUR API KEY";
  //https://api.hubapi.com/contacts/v1/contact/vid/12627374/profile?hapikey=demo

   $endpointS = "https://api.hubapi.com/contacts/v1/contact/vid/{$CID}/profile?hapikey={$api_key}";
   $json_response1 = @file_get_contents($endpointS);
   if ($json_response1==FALSE) { //address file contents error
     $result="No contacts for this deal";
     return ($result);
     
   } else { //if contacts exist, return initials in a concatenated string
     $json_response = json_decode($json_response1, true);
     $firstName=($json_response['properties'])['firstname']['value'];
     $lastName=($json_response['properties'])['lastname']['value'];
     $initials = $firstName . " " . $lastName;    
     return($initials);
     
   }
 }

 $array=[];
 if(isset($_POST['submit']) && isset($_POST['formSer'])   ){
 if(!empty($_POST['check_list'])){
 foreach($_POST['check_list'] as $selected){
     array_push($array,$selected);
 //echo $selected."</br>";
 }
 if( count($array)==1){
   $eduServices=$array[0];
   echo "Here are the selected education services: " . $eduServices;
 } else{
 $eduServices=implode(", ", $array);
  echo "Here are the selected education services: " . $eduServices;
 } 
} else {
 $eduServices="Education services are not selected";
 echo $eduServices;
}

}    

 
        
      


?>


      

<br> <br>
<form action="spreadsheet URL" target="_self" method="POST" id="mG61Hd">
 
  
  <label for="consN" >Consultant name:</label>
<input autocomplete='off' target="_self" method="POST" class='loginInput' name="" placeholder = "Consultant name" id="consN" type="text" value= "<?php if($valid) echo $userName; else echo "" ?>" maxlength='50' size="25">


<label for="clientE" >Client email:</label>
<input autocomplete='off' target="_self" method="POST" class='loginInput' name="" placeholder = "Client email" id="clientE" type="text" value= "<?php if($valid) echo $email; else echo "" ?>" maxlength='50' size="25">
  

<label for="fistN" >Client first name:</label>
<input autocomplete='off' target="_self" method="POST" class='loginInput' name = "" placeholder = "First name" id="firstN" type="text" value= "<?php if($valid) echo $firstName; else echo "" ?>" maxlength='50' size="25">
  
<label for="lastN">Client last name:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Last name" id="lastN" type="text" value= "<?php if($valid) echo $lastName; else echo "" ?>" maxlength='50' size="25">
<label for="numDeals">Number of deals associated with the client:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Number of associated deals" id="numDeals" type="text" value= "<?php if($valid) echo $numDeals; else echo "" ?>" maxlength='50' size="25">

<label for="dealID">Deal ID:</label-->
<input autocomplete='off' class='loginInput' name="" placeholder = "Deal ID" id="dealID" type="text" value= "<?php if($valid) echo $dealID; else echo "" ?>" maxlength='50' size="25">

<label for="cients">All clients associated with the deal:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "All clients associated with the deal" id="clients" type="text" value= "<?php if($valid) echo $initialsDeal; else echo "" ?>" maxlength='50' size="25">

<label for="company">Company name:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Company name" id="company" type="text" value= "<?php if($valid) echo $companyName; else echo "" ?>" maxlength='150' size="25">
<label for="farmtype">Farm type:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Farm type" id="farmtype" type="text" value= "<?php if($valid) echo $farm_type; else echo "" ?>" maxlength='150' size="25">

<label for="projAm">Projected amount:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Projected deal amount in USD" id="projAm" type="text" value= "<?php if($valid) echo $projAm; else echo "" ?>" maxlength='50' size="25">
<label for="dealDes">Deal description:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Deal description" id="dealDes" type="text" value= "<?php if($valid) echo $dealDesc; else echo "" ?>" maxlength='1000' size="25">
<label for="dealType">Deal type:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Deal type" id="dealType" type="text" value= "<?php if($valid) echo $dealtype; else echo "" ?>" maxlength='100' size="25">


<label for="dealname">Deal name:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Deal name" id="dealname" type="text" value= "<?php if($valid) echo $dealname; else echo "" ?>" maxlength='100' size="25">
<label for="owner">Deal owner:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Deal owner" id="owner" type="text" value= "<?php if($valid) echo $ownerInit; else echo "" ?>" maxlength='100' size="25">
<label for="closeDate">Close date:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Close date" id="closedate" type="text" value= "<?php if($valid) echo $closedate; else echo "" ?>" maxlength='100' size="25">
<label for="assigndate">Assigned date:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Assigned date" id="assigndate" type="text" value= "<?php if($valid) echo $assigndate; else echo "" ?>" maxlength='100' size="25">

<label for="eduServices">Education services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Education services if selected" id="eduServices" type="text" value= "<?php echo $eduServices; ?>" maxlength='100' size="25">

<label for="cdServices">Concept development services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Concept development services if selected" id="cdServices" type="text" value= "<?php echo $cdServices; ?>" maxlength='100' size="25">

<label for="mrServices">Market Research services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Market research services if selected" id="mrServices" type="text" value= "<?php echo $mrServices; ?>" maxlength='100' size="25">

<label for="fsServices">Feasibility study services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Feasibility services if selected" id="fsServices" type="text" value= "<?php echo $fsServices; ?>" maxlength='100' size="25">

<label for="imServices">Implementation services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Implementation services if selected" id="imServices" type="text" value= "<?php echo $imServices; ?>" maxlength='100' size="25">

<label for="ssServices">Support services:</label>
<input autocomplete='off' class='loginInput' name=""   placeholder = "Support services if selected" id="ssServices" type="text" value= "<?php echo $ssServices; ?>" maxlength='100' size="25">

<label for="ddServices">Due diligence services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Due diligence services if selected" id="ddServices" type="text" value= "<?php echo $ddServices; ?>" maxlength='100' size="25">

<label for="bpServices">Brand & Product development services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Brand & Product development services if selected" id="bpServices" type="text" value= "<?php echo $bpServices; ?>" maxlength='100' size="25">

<label for="stServices">Sustainability services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Sustainability services if selected" id="stServices" type="text" value= "<?php echo $stServices; ?>" maxlength='100' size="25">

<label for="spServices">Scenario planning services:</label>
<input autocomplete='off' class='loginInput' name=""  placeholder = "Scenario planning services if selected" id="spServices" type="text" value= "<?php echo $spServices; ?>" maxlength='100' size="25">

<label for="signPerson">Agritecture employee who signs the proposal (edit if needed):</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "AGR Employee who signs the proposal (on behalf of AGR)" id="signPerson" type="text" value= "<?php echo "Jeffrey Landau";  ?>" maxlength='50' size="25">

<label for="signPersonTitle">Title of the employee who signs the proposal (edit if needed):</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Title of the AGR Employee who signs the proposal (on behalf of AGR)" id="signPersonTitle" type="text" value= "<?php echo "Director of Business Development";  ?>" maxlength='50' size="25">

<label for="notes">Project notes:</label>
<textarea style="height: 140px;" cols="40" placeholder = "Project notes"  name="" rows="5"><?php if($valid) echo $notesStr; else echo "" ?></textarea>

<label for="briefPar">Please enter project brief paragraph:</label>
<textarea style="height: 140px;" cols="40" placeholder = "Example: Adelphi Legacy Group is a newly formed cooperative focused on urban and rural development. The Client is seeking to establish a business partnership with the Government of Forrest City, Arkansas through the creation of a large-scale commercial controlled environment agriculture (CEA) operation.
As such, this proposal outlines Agritecture’s services related to the conceptualisation, design and feasibility of the farming operation."  
  name="" rows="5"><?php echo "" ?></textarea>

  <label for="goals">Please enter client goals:</label>
<textarea style="height: 140px;" cols="40" placeholder = "Example: Increase the economic footprint of a rural area\n.
Increase the economic impact that Arkansas has on the South.\n
Provide job opportunities into the state.\n
Show the value of public/private partnership.\n"
name="" rows="5"><?php echo "" ?></textarea>

  <label for="projLoc">Enter location for the project (city,state,country):</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Example: Forrest City, Arkansas" id="projLoc" type="text" value= "<?php echo "";  ?>" maxlength='250' size="25">

<label for="projLocProfile">Enter location profile:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Example: St. Francis County; Heart of I40 corridor - Prime location for transportation;
93 miles northeast of Little Rock, AR; 50 miles west of Memphis, TN" id="projLocProfile" type="text" value= "<?php echo "";  ?>" maxlength='500' size="25">

<label for="budget">Enter budget for the project:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Example: $140M - $200M" id="budget" type="text" value= "<?php echo "";  ?>" maxlength='250' size="25">

<label for="crops">Enter crops for the project:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Example: Leafy greens, Tomatoes, Peppers, Garlic, Collard Greens (tentative list)" id="crops" type="text" value= "<?php echo "";  ?>" maxlength='500' size="25">

<label for="opTeam">Enter operating team for the project:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Example: Will need to be recruited" id="opTeam" type="text" value= "<?php echo "";  ?>" maxlength='300' size="25">

<label for="customer">Enter Customer for the project:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Example: B2B - Wholesale, Retail, & Institutions" id="customer" type="text" value= "<?php echo "";  ?>" maxlength='500' size="25">


<input type="submit" id="notes" value="CONFIRM" class="btn btn-block btn-primary">
  </form>


</div>
</div>

<script>
      //checkboxes for education services
      var expandEdu=false;
      function showCheckboxes(){
        var checkboxes=document.getElementById("checkboxesEdu");
        if(!expandEdu){
          checkboxes.style.display="block";
          expandEdu= true;
        } else {
          checkboxes.style.display="none";
          expandEdu=false;
        }
      }

     //checkboxes for cd services
      var expandCd=false;
      function showCheckboxesCd(){
        var checkboxes=document.getElementById("checkboxescd");
        if(!expandCd){
          checkboxes.style.display="block";
          expandCd= true;
        } else {
          checkboxes.style.display="none";
          expandCd=false;
        }
      }

      //checkboxes for mr services
      var expandMr=false;
      function showCheckboxesMr(){
        var checkboxes=document.getElementById("checkboxesmr");
        if(!expandMr){
          checkboxes.style.display="block";
          expandMr= true;
        } else {
          checkboxes.style.display="none";
          expandMr=false;
        }
      }


      //checkboxes for fs services
      var expandFs=false;
      function showCheckboxesFs(){
        var checkboxes=document.getElementById("checkboxesfs");
        if(!expandFs){
          checkboxes.style.display="block";
          expandFs= true;
        } else {
          checkboxes.style.display="none";
          expandFs=false;
        }
      }

      //checkboxes for im services
      var expandIm=false;
      function showCheckboxesIm(){
        var checkboxes=document.getElementById("checkboxesim");
        if(!expandIm){
          checkboxes.style.display="block";
          expandIm= true;
        } else {
          checkboxes.style.display="none";
          expandIm=false;
        }
      }

      //checkboxes for ss services
      var expandSs=false;
      function showCheckboxesSs(){
        var checkboxes=document.getElementById("checkboxesss");
        if(!expandSs){
          checkboxes.style.display="block";
          expandSs= true;
        } else {
          checkboxes.style.display="none";
          expandSs=false;
        }
      }

      //checkboxes for dd services
      var expandDd=false;
      function showCheckboxesDd(){
        var checkboxes=document.getElementById("checkboxesdd");
        if(!expandDd){
          checkboxes.style.display="block";
          expandDd= true;
        } else {
          checkboxes.style.display="none";
          expandDd=false;
        }
      }


      //checkboxes for bp services
      var expandBp=false;
      function showCheckboxesBp(){
        var checkboxes=document.getElementById("checkboxesbp");
        if(!expandBp){
          checkboxes.style.display="block";
          expandBp= true;
        } else {
          checkboxes.style.display="none";
          expandBp=false;
        }
      }

      //checkboxes for st services
      var expandSt=false;
      function showCheckboxesSt(){
        var checkboxes=document.getElementById("checkboxesst");
        if(!expandSt){
          checkboxes.style.display="block";
          expandSt= true;
        } else {
          checkboxes.style.display="none";
          expandSt=false;
        }
      }


      //checkboxes for sp services
      var expandSp=false;
      function showCheckboxesSp(){
        var checkboxes=document.getElementById("checkboxessp");
        if(!expandSp){
          checkboxes.style.display="block";
          expandSp= true;
        } else {
          checkboxes.style.display="none";
          expandSp=false;
        }
      }



      

      


      </script>


</body>
</html>

