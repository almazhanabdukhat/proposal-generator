Proposal Generator for internal use. Version 1.


I Hosting. I find heroku very suitable for hosting php webpages - in order to do that, go to heroku at 
https://id.heroku.com/login and enter the necessary login credentials or register. 
Configure app with your github folder and after deploying, “Open App” button in the upper right corner of the newly opened window.
Alternatively, you can run this file locally with Xampp or Mamp.

II How to use the proposal generator app?
1. Change $api_key value to your hubspot API key.
2. If you would like to connect the form to google spreadsheet : 
a) create a google form with input fields corresponding to php form input fields 
b) set form action for the form displaying the final inputs in php form - action should be the same as for the corresponding google form
c) change name for each input field in the php form to the name of the corresponding input field in google form
d) to retrieve the data from spreadsheet, use google script.

3. Complete Steps 1,2,3,4 and press “SEARCH” button.     
4. Wait for the information to load and if necessary, edit the fields. Fill out the empty fields.
5. After reviewing all information, press CONFIRM
6. If submission is successful, you should see "Proposal Form. Your response has been recorded. To go back to the proposal generator, simply go to the previous page in your browser.

III How it works?

1.When the user presses “Search”, the app retrieves information from Hubspot by calling Contact API, Deal API, Associations CRM, Company API, Engagements API and others.
 It retrieves the following values:
1.1. if there is a contact associated with the input email, app retrieves that contact’s first     name, last name, contact ID, number of deals associated with that contact, company ID (if exists), deal ID (if exists).  
If there is a contact associated with the input email:
1.1.1. If there is a company associated with the contact, the app retrieves company name. Otherwise, asks the user to enter that information.
1.1.2. If there is a deal associated with the contact, the app retrieves other contacts associated with that deal,deal notes, deal amount in USD, deal description, deal type, deal name, close date, assign date, owner id, deal owner initials.
Otherwise, asks the user to enter that information.
1.2 If there is no contact associated with the email, the app asks the user to enter those values (including company, deal info), but does not validate the input.

2. Regardless of whether the email is registered in Hubspot, the app asks the user to fill out the following fields: Employee (who signs proposal), title of the Employee, goals, project brief, location profile, location, budget, crops, operating team, customer.



![Screenshot from game](https://github.com/almazhanabdukhat/proposal-generator-AGR/blob/master/version1/collage.jpg)







