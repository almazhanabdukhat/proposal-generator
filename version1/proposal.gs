function myFunction() {
   //setup original sample
   var doc= DocumentApp.getActiveDocument();
   var docId=doc.getId();
   var body=doc.getBody();
  
  
   //setup spreadsheet
   var wsID="1kotCZx7TMd4dziPWjkDaBL1hm_1tQ9b3MGFICTN0DR8";
   var ws=SpreadsheetApp.openById(wsID).getSheetByName("Form Responses 1"); //open spreadsheet
   var data = ws.getRange(14,1,ws.getLastRow()-13,ws.getLastColumn()).getValues(); //get values from spreadsheet
  // Logger.log(ws.getLastRow());
  //  Logger.log(ws.getLastColumn());
   
   
   var file=DriveApp.getFileById(docId);
   var folderParent=DriveApp.getFolderById("1oofWd4r9NW-w2GktixR-8eZmPC0Lt7iG");
   var dealFolder=folderParent.createFolder("New folder");   
   var newFile = file.makeCopy("New Proposal",dealFolder);
   
   
   //get copy of the template 
   var name, clientName;
   var newId=newFile.getId();
   var newDoc=DocumentApp.openById(newId);
   var body=newDoc.getBody();
   
   //get last row
   var index=data.length-1;
   
   //replace the values
   var name = data[index][6];
   var clientName= data[index][8];
   newDoc.setName(name);
   dealFolder.setName(clientName);
   
   //replacing text
   body.replaceText("{Client_last_name}", data[index][2]);
   body.replaceText("{Client_first_name}", data[index][1]);
    body.replaceText("{AGR Employee}", data[index][28]);
    body.replaceText("{AssignDate}", data[index][11]);
    body.replaceText("{AGR_Employee_Title}", data[index][29]);
     body.replaceText("{Project Brief}", data[index][17]);
     body.replaceText("{Location_profile}", data[index][31]);
     body.replaceText("{Location}", data[index][30]);
     body.replaceText("{Budget}", data[index][32]);
     body.replaceText("{Crops}", data[index][33]);
     body.replaceText("{Operating_team}", data[index][34]);
     body.replaceText("{Customer}", data[index][35]);
    body.replaceText("{Deal Description}", data[index][6]);
    
   
   
   }
   
   
