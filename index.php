<!--This program retrieves,outputs and processes info entered by user and info 
from Hubspot API for Agritecture Consulting and is written 
by Almazhan Abdukhat, Software Engineering Intern 2020
github: almazhanabdukhat -->
<html>
<head>
<link rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="stylesheet.css" type="text/css">

<title>Proposal Generator 2.0 for Agritecture Consulting </title>

<script>
    function validate(){
    var valid=true;

    if (document.getElementById('firstName').value == "No First Name") { document.getElementById('firstName').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('lastName').value == "No Last Name") { document.getElementById('lastName').style.borderColor = 'red'; valid=false;  }
    if (document.getElementById('city').value == "No City") { document.getElementById('city').style.borderColor = 'red'; valid=false;    }
    if (document.getElementById('country').value == "No Country") {  document.getElementById('country').style.borderColor = 'red'; valid=false;  }
    if (document.getElementById('company').value == "No Company Name") { document.getElementById('company').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('resources').value == "No Resources stated") { document.getElementById('resources').style.borderColor = 'red'; valid=false;  }
    if (document.getElementById('services').value == "No Services selected") { document.getElementById('services').style.borderColor = 'red'; valid=false;  }
    if (document.getElementById('howheard').value == "No Information") { document.getElementById('howheard').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('projCity').value == "No Project City") { document.getElementById('projCity').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('projCountry').value == "No Project Country") { document.getElementById('projCountry').style.borderColor = 'red';valid=false; }
    if (document.getElementById('busGoals').value == "No Goals selected") { document.getElementById('busGoals').style.borderColor = 'red'; valid=false;  }
    if (document.getElementById('integ').value == "No Integrations selected") { document.getElementById('integ').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('crops').value == "No Crops selected") { document.getElementById('crops').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('budgets').value == "No Budget selected") { document.getElementById('budgets').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('stages').value == "No Stage selected") { document.getElementById('stages').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('complete').value == "No Complete time selected") { document.getElementById('complete').style.borderColor = 'red'; valid=false; }
    if (document.getElementById('plannedsite').value == "No Information") { document.getElementById('plannedsite').style.borderColor = 'red';valid=false; }
    
    if(valid==false) {alert("Please fill out all required forms"); return false;    }
    else {return valid;}
    }
    </script>

</head>

<body>

<div class="body-content">
  <div class="module">
    <h1>Thank you for using Proposal Generator!</h1>
    
    <p>Please enter client's email and press SEARCH </p>
   <br>  
    <form class="form" action="index.php" method="post" name="initial"  enctype="multipart/form-data" autocomplete="off">
     <label for="email">Step 2. Enter Client's email</label>
      <input id ="emaiL" type="email" placeholder="Client email" name="email" required /> 
      <input type="submit" name="test" id="test" value="SEARCH"  class="btn btn-block btn-primary" ><br/>
        
    </form>
  
  <br> 
    

<?php 
error_reporting(E_ERROR | E_PARSE); //block error messages

session_start();

$_SESSION['message']='';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];  //set post variables
    $_SESSION['message'] = "Search is successful! Retrieved information about $email from Hubspot database! Now fill in the needed fields and press CONFIRM" . "\r\n";
  }
  $valid = (!empty($email)) && array_key_exists('test',$_POST); //check if email is provided

  if($valid ){ 
 /*IMPORTANT: CHANGE THE HUBSPOT FORM ID HERE (change $form_id)*/
 $form_id="193ec194-4b69-463e-bc68-6277e6bfe02d";
 
  //I. Get information related to the form 
    $resultForms=getForms($form_id);  //Get all submissions from the needed form 
    //print_r($resultForms[0]['values'][0]['name']);
    
    $length=count($resultForms); //Count number of submissions
    $index=-1;
    //Get the index for the correct submission
     for ($i=0;$i<$length;$i++){
       $current=$resultForms[$i]['values'];
       $leN=count($current);
       for ($j=0;$j<$leN;$j++){  //&& $current[$j]['value']==$email
         if ($current[$j]['value']==$email){
           $index=$i; 
          // print_r("Correct index is here" . $index); break;
          }      
       }
     }

    //If the client has filled out the form
    if ($index>=0){ 
      print_r("Below is the form submission information associated with email " . $email);
    $formIndex=$resultForms[$index]; //select the most recent submission
    $results = formInfo($formIndex); //get submission info    
    $firstName=$results[0];  //set all the info to display
    $lastName=$results[1];  $email=$results[2]; $phone=$results[3]; $city=$results[4];  $country=$results[5];
    $companyName=$results[6]; $website=$results[7];  $jobtitle=$results[8];  $linkedinbio=$results[9];
    $resources=$results[10];   $services=$results[11];   $howheard=$results[12];  $projectLocCity=$results[13];
    $projLocCountry=$results[14];  $goals=$results[15];  $crops=$results[16];  $integrations=$results[17];
    $budgetSel=$results[18];   $stages=$results[19];  $completeTime=$results[20]; $plannedSite=$results[21];
    $vision=$results[22]; $timeSub=$results[23];
    } else{  
      print_r("There are no form submissions for the email " . $email);
      $contactInfo = getByEmail($email); //if contact exists in hubspot database (despite not submitting form)
      if ($contactInfo>0) { $contactID=$contactInfo[0]; $firstName = $contactInfo[2];
        $lastName=$contactInfo[3]; $phone=$contactInfo[4]; $city=$contactInfo[5]; $country=$contactInfo[6];
        $companyID=getAssocCompany($contactID);
        if($companyID>0){ //if company exists for this client
           $companyInfo = getCompanyInfo($companyID); $companyName=$companyInfo[0];$website=$companyInfo[1]; $linkedinbio=$companyInfo[2];
        } 
       } else {
        $firstName="No First Name"; $lastName="No Last Name"; $phone="No Phone Number"; $city = "No City"; $country="No Country";
        $companyName="No Company Name"; $website="No Website URL"; $linkedinbio="No Linkedin Bio";
      }
      $jobtitle="No Job Title"; $services="No Services selected"; $resources="No Resources stated"; $timeSub="No Submitted Forms for this email"; $vision="No Vision stated"; 
      $howheard="No Information"; $projectLocCity="No Project City"; $projLocCountry="No Project Country"; $goals="No Goals selected"; $crops="No Crops selected";
      $integrations="No Integrations selected"; $budgetSel="No Budget selected"; $stages="No Stage selected"; $completeTime="No Complete time selected"; $plannedSite="No Information";
     
    }

    //II Retrieve info about deal associated with the client if that deal exists
    $contactInfo = getByEmail($email);
    //if contact exists in Hubspot API, retrieve info
     if ($contactInfo>0){ $numDeals=$contactInfo[1]; $firstname = $contactInfo[2]; $lastname=$contactInfo[3];
       $initialsDeal=""; $dealID = getDealInfoFromCID($email);//here
         if ($dealID<0){ $dealID = "No Deal ID"; //if deal doesn't exist
            $dealExists="No deal exists for this client";
           $initialsDeal="No contacts associated with the deal";
           $notesStr="No notes";
         } else { //if deal exists
            $dealExists="There is a deal associated with this client";
           $contacts = getAssocContacts($dealID); //1. Get associated contacts for the deal
           $contLen=count($contacts);
           $dealContacts=[]; // get contact initials for each contact based on cid
           for ($i=0;$i<$contLen;$i++){
             $contIn=getContInfoFromCID($contacts[$i]);
             $dealContact[$i]=$contIn;
           } //create a string from an array of contacts associated with a deal
           $initialsDeal = implode(", ", $dealContact);
           $engagements = getEngInfoFromDealID($dealID); //2. Get notes for the deal
           $lengthE=count($engagements);  //get all engagements associated with the deal
           $notes=[]; //for all engagements, check if they are of type 'note'
           //get content of engagements if they are of type 'note'
           for ($i=0; $i<$lengthE;$i++){
             $e=getNotes($engagements[$i]); 
             if($e!=-1){ //if of type 'notes', extract the content in an array
               $notes[$i]=$e;
             }
           }
           $notesStr=implode("\r\n", $notes);
         }
         //3. Get deal other info from deal id if have deal
         $dealInfo=getDealInfoFromDealID($dealID);
         $projAm=$dealInfo[0]; //project amount
           $dealDesc=$dealInfo[1]; //deal description
           $dealtype=$dealInfo[2]; //deal type
           $dealname = $dealInfo[3]; //deal name
           $closedate = $dealInfo[4]; //deal close date
           $assigndate = $dealInfo[5]; //deal assign date
     }                 
     else {  //if no deal is registered in hubspot, ask user to enter values
        $dealExists="No deal exists for this client";
        $numDeals="No deals for this client";
        $contactID="No Contact registered with this email";
        $dealID="No Deal registered with this email";
        $projAm = "No projected deal amount in USD";
        $dealDesc = "No deal description";
        $dealtype = "No deal type";
        $dealname="No deal name";
        $closedate="No deal close date";
        $assigndate="No deal assigned date";
        $initialsDeal="No contacts associated with the deal";
        $notesStr="No notes";
        $contacts="No contacts";
      }
 }

//get company associated with the contact id
function getAssocCompany ($cid){
 $endpointS = "https://api.hubapi.com/crm-associations/v1/associations/{$cid}/HUBSPOT_DEFINED/1?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
 $json_response1 = @file_get_contents($endpointS); //address file contents exception
 if ($json_response1==FALSE) { 
   return -1;     //if no company exists 
 } else { //if a company exists, put them all in array
   $json_response = json_decode($json_response1, true);
   $result = $json_response['results'][0];
   return $result; //return the company contacts
 }
}

  //get company info from company id
  function getCompanyInfo(string $compID) {
    $endpointO = "https://api.hubapi.com/companies/v2/companies/{$compID}?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
    $json_response1 = @file_get_contents($endpointO);
    if ($json_response1==FALSE) { //if no company exists
      $companyName= "No Company Name"; $website="No Website"; $linkedinbio="No Linkedin Bio";
      $result=array($companyName,$website,$linkedinbio);
      return $result;
    } else { //if company exists
      $json_response = json_decode($json_response1, true);
      if (!empty($json_response['properties']['name']['value'])){ //if name exists, get it
        $companyName=($json_response['properties'])['name']['value'];
      } else { $companyName="No Company Name";}
      if (!empty($json_response['properties']['website']['value'])){ //if website exists, get it
        $website=($json_response['properties'])['website']['value'];
      } else { $website="No Website URL";} 
      if (!empty($json_response['properties']['linkedin_company_page']['value'])){ //if website exists, get it
        $linkedinbio=($json_response['properties'])['linkedin_company_page']['value'];
      } else { $linkedinbio="No Linkedin Bio";} 
      $result=array($companyName,$website,$linkedinbio);  return $result;
      } 
    }  

 //get deal info from deal id 
 function getDealInfoFromDealID(string $dealId) {
    //https://api.hubapi.com/deals/v1/deal/18479339?hapikey=demo
       $endpoint2 = "https://api.hubapi.com/deals/v1/deal/{$dealId}?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
       $json_response1 = @file_get_contents($endpoint2);
       if ($json_response1==FALSE) { //if no deal info, ask user to enter it
         $projAmount = "No projected deal amount in USD";
         $dealDescr = "No deal description";
         $dealType = "No deal type";
         $dealName ="No deal name";
         $closeDate="No close date";
         $assignDate="No deal assigned date";
         $output = array($projAmount, $dealDescr, $dealType,$dealName,$closeDate,$assignDate);
         return $output;
       } else { //if deal exists
         $json_response = json_decode($json_response1, true);
         if (!empty(($json_response['properties']))){ //check if deal is empty
           if (!empty(($json_response['properties'])['amount'])){  //get projected amount if have
             $projAmount = ($json_response['properties'])['amount']['value'];
           } else { $projAmount = "No projected deal amount in USD"; }
           if (!empty(($json_response['properties'])['description'])){ //get deal description if have
             $dealDescr = ($json_response['properties'])['description']['value'];
           } else { $dealDescr = "No deal description"; }
           if (!empty(($json_response['properties'])['dealtype'])){//get deal type if have
             $dealType = ($json_response['properties'])['dealtype']['value'];
           } else { $dealType = "No deal type"; }
           if (!empty(($json_response['properties'])['dealname'])){   //get deal name if have
             $dealName = ($json_response['properties'])['dealname']['value'];
           } else { $dealName = "No deal name"; }
           if (!empty(($json_response['properties'])['closedate'])){ //get close date if have
             $closeMil = ($json_response['properties'])['closedate']['value'];
             $secondsC = $closeMil / 1000;
             $closeDate=date("d/m/Y", $secondsC);
           } else { $closeDate = "No deal close date"; }
           if (!empty(($json_response['properties'])['hubspot_owner_assigneddate'])){  //get assigned date if have
             $assignMil = ($json_response['properties'])['hubspot_owner_assigneddate']['value'];
             $seconds = $assignMil / 1000;
             $assignDate=date("d/m/Y", $seconds);
           } else { $assignDate = "No deal assigned date"; }
           //return output - deal info - as an array
           $output = array($projAmount, $dealDescr, $dealType, $dealName,$closeDate,$assignDate);
           return $output;
         }    
       }  
  }

 //get eng type-notes from an engagement id (for each deal)
 function getNotes ($eng){
    $endpointS = "https://api.hubapi.com/engagements/v1/engagements/{$eng}?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
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
  //get engagements for the deal
 function getEngInfoFromDealID(string $dealID) {       
        $endpoint2 = "https://api.hubapi.com/crm-associations/v1/associations/{$dealID}/HUBSPOT_DEFINED/11?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
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

 //get contact info from contact id
 function getContInfoFromCID ($CID){  
     $endpointS = "https://api.hubapi.com/contacts/v1/contact/vid/{$CID}/profile?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
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
 //get contacts associated with the deal
 function getAssocContacts ($dealID){
   $endpointS = "https://api.hubapi.com/crm-associations/v1/associations/{$dealID}/HUBSPOT_DEFINED/3?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
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
//get contact info from email
 function getByEmail(string $email)
 { //url to connect to Hubspot api
   $endpoint = "https://api.hubapi.com/contacts/v1/contact/email/{$email}/profile?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
   $json_response1 = @file_get_contents($endpoint);
   if($json_response1==FALSE) { //address file contents exception
     return -1;
   } else { 
     $json_response = json_decode($json_response1, true);
     $contact_id=($json_response['vid']);
     if(!empty(($json_response['properties'])['firstname'])){ //check if first name exists
      $firstname = ($json_response['properties'])['firstname']['value'];
    } else {$firstname = "No First Name";}
    if (!empty(($json_response['properties'])['lastname'])){ //check if last name exists
      $lastname = ($json_response['properties'])['lastname']['value'];
    } else {$lastname = "No Last Name";}
     //check if there are deals associated with the contact
     if (!empty(($json_response['properties'])['num_associated_deals'])){
       $numDeals = ($json_response['properties'])['num_associated_deals']['value'];
     } else {$numDeals = "0";}
     if(!empty(($json_response['properties'])['phone'])){ //check if phone number exists
      $phone = ($json_response['properties'])['phone']['value'];
    } else {$phone = "No Phone number";}
    if(!empty(($json_response['properties'])['ip_state'])){ //check if phone number exists
      $city = ($json_response['properties'])['ip_state']['value'];
    } else {$city = "No City";}
    if(!empty(($json_response['properties'])['ip_country'])){ //check if phone number exists
      $country = ($json_response['properties'])['ip_country']['value'];
    } else {$country = "No Country";}
     //output contact info as an array
     $output = array($contact_id, $numDeals,$firstname,$lastname, $phone,$city,$country);
     return $output;
    }
    
}

//get deal id from contact id 
function getDealInfoFromCID(string $email) {
       //first get contact info from email entered by the user
        $contactArray=getByEmail($email);
        $contId=$contactArray[0];
        $endpoint2 = "https://api.hubapi.com/crm-associations/v1/associations/{$contId}/HUBSPOT_DEFINED/4?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
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


function formInfo($mostRecent){
//getting submission date
$timeSubSec=($mostRecent['submittedAt'])/1000;
$timeSub=date("d/m/Y", $timeSubSec); 
$lenVal=count($mostRecent['values']);
$arrayServices = []; $arrayCrops=[]; $arrayBusGoals = []; $arrayInteg=[]; $arrayBudget=[]; $arrayStages=[];
$countSer=0; $countGoals=0; $countCrops=0; $countInteg=0; $countBudget=0;$countStages=0;
for ($i=0;$i<$lenVal;$i++){
    if($mostRecent['values'][$i]['name']=="firstname"){
        $firstName=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="lastname"){
        $lastName=$mostRecent['values'][$i]['value'];
    }else if($mostRecent['values'][$i]['name']=="company"){
        $companyName=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="email"){
        $email=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="phone"){
        $phone=$mostRecent['values'][$i]['value'];
    }  else if($mostRecent['values'][$i]['name']=="city"){
        $city=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="country"){
        $country=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="website"){
        $website=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="jobtitle"){
        $jobtitle=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="linkedinbio"){
        $linkedinbio=$mostRecent['values'][$i]['value']; 
    } else if($mostRecent['values'][$i]['name']=="how_did_you_hear_about_"){
        $howheard=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="project_location_city"){
        $projectLocCity=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="project_location_country"){
        $projLocCountry=$mostRecent['values'][$i]['value']; 
    } else if($mostRecent['values'][$i]['name']=="when_do_you_hope_to_complete_this_project_"){
        $complete=($mostRecent['values'][$i]['value'])/1000;
        $completeTime=date("d/m/Y", $complete);
    } else if($mostRecent['values'][$i]['name']=="please_tell_us_about_the_resources_or_competitive_advantages_that_your_team_or_your_project_may_hav"){
        $resources=$mostRecent['values'][$i]['value'];
    }else if($mostRecent['values'][$i]['name']=="do_you_have_a_planned_site_"){
        $plannedSite=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="tell_us_more_about_you_your_vision_of_the_project_and_anything_else_you_think_will_help_us_develop_"){
        $vision=$mostRecent['values'][$i]['value'];
    } else if($mostRecent['values'][$i]['name']=="which_of_our_services_are_you_most_interested_in_"){
      ++$countSer; $arrayServices[$countSer]=$mostRecent['values'][$i]['value'];
   }  else if($mostRecent['values'][$i]['name']=="which_of_these_best_describes_your_business_goals_"){
    ++$countGoals; $arrayBusGoals[$countGoals]=$mostRecent['values'][$i]['value'];
   } else if($mostRecent['values'][$i]['name']=="what_do_you_want_to_grow_"){
    ++$countCrops; $arrayCrops[$countCrops]=$mostRecent['values'][$i]['value'];
  } else if($mostRecent['values'][$i]['name']=="which_of_these_best_describes_your_project_s_planned_integration_"){
    ++$countInteg; $arrayInteg[$countInteg]=$mostRecent['values'][$i]['value'];
   } else if($mostRecent['values'][$i]['name']=="what_is_your_capital_budget_for_this_project_"){
    ++$countBudget; $arrayBudget[$countBudget]=$mostRecent['values'][$i]['value'];
  }  else if($mostRecent['values'][$i]['name']=="which_of_the_following_best_describes_the_stage_of_your_project_"){
    ++$countStages; $arrayStages[$countStages]=$mostRecent['values'][$i]['value'];
  } else {
      console.log("end of loop");
  }
}
$services=implode(",", $arrayServices);
$crops=implode(",",$arrayCrops);
$goals=implode(",",$arrayBusGoals);
$integrations=implode(",",$arrayInteg);
$budgetSel=implode(",",$arrayBudget);
$stages=implode(",",$arrayStages);

//output all results
$resultsAll=array($firstName,$lastName,$email,$phone,$city,$country,$companyName,$website,$jobtitle,$linkedinbio,$resources,$services,$howheard,$projectLocCity,$projLocCountry,$goals,$crops,$integrations,$budgetSel,$stages,$completeTime,$plannedSite,$vision, $timeSub);
return $resultsAll;
}
 
//get all the information from the form ID
 function getForms ($formID){
    //https://api.hubapi.com/crm-associations/v1/associations/25/HUBSPOT_DEFINED/15?hapikey=demo
   $endpointS = "https://api.hubapi.com/form-integrations/v1/submissions/forms/{$formID}?hapikey=0a5f993e-44d8-4737-a59b-663fd236ba8d";
   $json_response1 = @file_get_contents($endpointS); //address file contents exception
   if ($json_response1==FALSE) { 
      return -1;     //if no form exists 
   } else { //if a form exists, put them all in array
     $json_response = json_decode($json_response1, true);
     $result = $json_response['results'];
    return $result; //return the forms
   }
 }

//include(proposal.html);

?>



      

<br> <br>

<form action="https://docs.google.com/forms/u/2/d/e/1FAIpQLSfyzJkml_12c6RV8BrL_IPwP1FRzaq4zNF1SdVDkwK5aQZVlA/formResponse" target="_self" onsubmit="return validate();" method="POST" id="mG61Hd">


<label for="subDate">Submission date:</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Submission date" id="subDate" type="text" value= "<?php echo $timeSub;  ?>" maxlength='50' size="25">
 

<label for="firstName" >First Name:</label>
<input autocomplete='off' class='loginInput' name="entry.384233025" placeholder = "First Name" id="firstName" type="text" value= "<?php echo $firstName;  ?>" maxlength='50' size="25">
  
<label for="lastName">Last Name:</label>
<input autocomplete='off' class='loginInput' name="entry.48470607" placeholder = "Last Name" id="lastName" type="text" value= "<?php echo $lastName;  ?>" maxlength='50' size="25">

<label for="clientEmail" >Client email:</label>
<input autocomplete='off' class='loginInput' name="entry.1688455464" placeholder = "Email" id="clientEmail" type="text" value= "<?php echo $email;  ?>" maxlength='50' size="25">

<label for="phone">Phone Number:</label>
<input autocomplete='off' class='loginInput' name="entry.1808296212" placeholder = "Phone number" id="phone" type="text" value= "<?php echo $phone; ?>" maxlength='50' size="25">

<label for="city">City:</label>
<input autocomplete='off' class='loginInput' name="entry.1083311961" placeholder = "City" id="city" type="text" value= "<?php echo $city;  ?>" maxlength='50' size="25">

<label for="country">Country/Region:</label>
<input autocomplete='off' class='loginInput' name="entry.641982558" placeholder = "Country/Region" id="country" type="text" value= "<?php  echo $country;  ?>" maxlength='50' size="25">

<label for="company">Company Name:</label>
<input autocomplete='off' class='loginInput' name="entry.1172197213" placeholder = "Company Name" id="company" type="text" value= "<?php echo $companyName;  ?>" maxlength='150' size="25">

<label for="website">Website URL:</label>
<input autocomplete='off' class='loginInput' name="entry.789248470" placeholder = "Website URL" id="website" type="text" value= "<?php echo $website; ?>" maxlength='150' size="25">

<label for="jobtitle">Job Title:</label>
<input autocomplete='off' class='loginInput' name="entry.1091451806" placeholder = "Job Title" id="jobtitle" type="text" value= "<?php  echo $jobtitle;  ?>" maxlength='150' size="25">
<label for="linkedinbio">Linkedin Bio:</label>
<input autocomplete='off' class='loginInput' name="entry.768571866" placeholder = "Linkedin Bio" id="linkedinbio" type="text" value= "<?php  echo $linkedinbio;  ?>" maxlength='1000' size="25">

<label for="resources">Please tell us about the resources or competitive advantages that your team or your project may have.</label>
<input autocomplete='off' class='loginInput' name="entry.1184609413" placeholder = "Resources" id="resources" type="text" value= "<?php  echo $resources;  ?>" maxlength='1000' size="25">

  
  <label for="services">Which of our services are you most interested in?</label>
   <input autocomplete='off' class='loginInput' name="entry.1305455543" placeholder = "Services" id="services" type="text" value= "<?php  echo $services;  ?>" maxlength='1000' size="25">

<label for="howheard">How did you hear about us?</label>
<input autocomplete='off' class='loginInput' name="entry.486371262"  placeholder = "How heard about AGR" id="howheard" type="text" value= "<?php echo $howheard;  ?>" maxlength='100' size="25">

<label for="projCity">Project Location: City</label>
<input autocomplete='off' class='loginInput' name="entry.1487541259"  placeholder = "Project Location: City" id="projCity" type="text" value= "<?php echo $projectLocCity; ?>" maxlength='100' size="25">
<label for="projCountry">Project Location: Country</label>
<input autocomplete='off' class='loginInput' name="entry.597806902" placeholder = "Project Location: Country" id="projCountry" type="text" value= "<?php echo $projLocCountry;  ?>" maxlength='100' size="25">

<label for="busGoals">Which of these best describes your business goals?</label>
<input autocomplete='off' class='loginInput' name="entry.1169196725" placeholder = "Business goals" id="busGoals" type="text" value= "<?php  echo $goals;  ?>" maxlength='1000' size="25">

<label for="crops">What do you want to grow?</label>
<input autocomplete='off' class='loginInput' name="entry.1159509843" placeholder = "Crops" id="crops" type="text" value= "<?php echo $crops; ?>" maxlength='1000' size="25">

<label for="integ">Which of These Best Describes Your Project's Planned Integration?</label>
<input autocomplete='off' class='loginInput' name="entry.936253348"  placeholder = "Integrations" id="integ" type="text" value= "<?php echo $integrations; ?>" maxlength='1000' size="25">

<label for="budgets">What is your capital budget for this project?</label>
<input autocomplete='off' class='loginInput' name="entry.709775293"  placeholder = "Capital budget" id="budgets" type="text" value= "<?php echo $budgetSel; ?>" maxlength='1000' size="25">

<label for="stages">Which of the following best describes the stage of your project?</label>
<input autocomplete='off' class='loginInput' name="entry.1478510821"  placeholder = "Stages" id="stages" type="text" value= "<?php echo $stages; ?>" maxlength='100' size="25">

<label for="complete">When do you hope to complete this project?</label>
<input autocomplete='off' class='loginInput' name="entry.1467025977"  placeholder = "Complete time" id="complete" type="text" value= "<?php echo $completeTime; ?>" maxlength='100' size="25">

<label for="plannedsite">Do you have a planned site yet?</label>
<input autocomplete='off' class='loginInput' name="entry.1956403740"  placeholder = "Yes/No" id="plannedsite" type="text" value= "<?php echo $plannedSite; ?>" maxlength='100' size="25">

<label for="vision">Tell us more about you, your vision of the project, and anything else you think will help us develop the most efficient and cost effective consulting proposal for you:</label>
<textarea style="height: 120px;" cols="40" placeholder = "Vision of the project"  name="entry.1091221336" rows="5"><?php echo $vision;  ?></textarea>

<label for="dealExists">Is there a deal associated with this client in Hubspot?</label>
<input autocomplete='off' class='loginInput' name="entry.2099711197"  placeholder = "Yes/No" id="dealExists" type="text" value= "<?php echo $dealExists; ?>" maxlength='100' size="25">

<label for="numDeals">Number of deals for this client:</label>
<input autocomplete='off' class='loginInput' name="entry.713635080" placeholder = "Number of deals" id="numDeals" type="text" value= "<?php echo $numDeals;  ?>" maxlength='50' size="25">

<label for="clients">All clients associated with the deal:</label>
<input autocomplete='off' class='loginInput' name="entry.176779662" placeholder = "All clients associated with the deal" id="clients" type="text" value= "<?php echo $initialsDeal;  ?>" maxlength='50' size="25">

<label for="projAm">Projected amount:</label>
<input autocomplete='off' class='loginInput' name="entry.779960555" placeholder = "Projected deal amount in USD" id="projAm" type="text" value= "<?php echo $projAm;  ?>" maxlength='50' size="25">
<label for="dealDesc">Deal description:</label>
<input autocomplete='off' class='loginInput' name="entry.636128145" placeholder = "Deal description" id="dealDesc" type="text" value= "<?php  echo $dealDesc;  ?>" maxlength='1000' size="25">
<label for="dealtype">Deal type:</label>
<input autocomplete='off' class='loginInput' name="entry.1650323400" placeholder = "Deal type" id="dealtype" type="text" value= "<?php  echo $dealtype;  ?>" maxlength='100' size="25">


<label for="dealname">Deal name:</label>
<input autocomplete='off' class='loginInput' name="entry.248671063"  placeholder = "Deal name" id="dealname" type="text" value= "<?php echo $dealname;  ?>" maxlength='100' size="25">

<label for="closeDate">Close date:</label>
<input autocomplete='off' class='loginInput' name="entry.140891428" placeholder = "Close date" id="closedate" type="text" value= "<?php  echo $closedate;  ?>" maxlength='100' size="25">
<label for="assigndate">Assigned date:</label>
<input autocomplete='off' class='loginInput' name="entry.1839702847" placeholder = "Assigned date" id="assigndate" type="text" value= "<?php echo $assigndate;  ?>" maxlength='100' size="25">
<label for="signPerson">Agritecture employee who signs the proposal (edit if needed):</label>
<input autocomplete='off' class='loginInput' name="entry.568175753" placeholder = "AGR Employee who signs the proposal (on behalf of AGR)" id="signPerson" type="text" value= "<?php echo "Jeffrey Landau";  ?>" maxlength='50' size="25">

<label for="signPersonTitle">Title of the employee who signs the proposal (edit if needed):</label>
<input autocomplete='off' class='loginInput' name="" placeholder = "Title of the AGR Employee who signs the proposal (on behalf of AGR)" id="signPersonTitle" type="text" value= "<?php echo "Director of Business Development";  ?>" maxlength='50' size="25">

<label for="notes">Project notes:</label>
<textarea style="height: 140px;" cols="40" placeholder = "Project notes"  name="entry.308552425" rows="5"><?php echo $notesStr;  ?></textarea>


<input type="submit" id="notes" value="CONFIRM" class="btn btn-block btn-primary">
  </form>
 

  


</div>
</div>



 
 
</body>
</html>
