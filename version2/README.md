# proposal-generator-AGR
In this project I built a REST API in php that connects to Hubspot and retrieves information about clients/companies/deals to a php web form and allows the user to edit that information and submit to google docs to generate a folder and proposal doc in the google drive

Proposal Generator Version 2 works identically to Version 1 with the following change:
1. This version utilizes Form API from Hubspot. If the email has submitted responses to the selected form, retrieve form responses. 
2. Similarly to version 1, if there is a contact registered for this email, retrieve company, deal, contact information.
3. Similarly to version 1, the php form can be connected to google spreadsheets by changing the approporiate forms (see version 1 README file).






