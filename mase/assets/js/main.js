// Listen for form submit
document.getElementById('contactForm').addEventListener('submit' , submitForm);

// submit form
function submitForm(e) {
 e.preventDefault();
 
 // Your web app's Firebase configuration
 var firebaseConfig = {
  apiKey: "AIzaSyBBGvGEhPxAPZ9Cy7qKlZuRQK_DvKW3GxY",
  authDomain: "contactform-8cd05.firebaseapp.com",
  databaseURL: "https://contactform-8cd05.firebaseio.com",
  projectId: "contactform-8cd05",
  storageBucket: "contactform-8cd05.appspot.com",
  messagingSenderId: "707258216227",
  appId: "1:707258216227:web:d1d00b85a8ad5058556696",
  measurementId: "G-2CHFDE1GX5"
 };
 firebaseConfig.initializeApp(config);

 // Reference messages collection
 var messagesRef = firebase.database().ref('messages');

 // Listen for form submit
 document.getElementById('contactForm').addEventListener('submit', submitForm);

 // submit form
 function submitform(e){
  e.preventDefault();
 

 // get all the values
 var firstname = getInputval('firstname');
 var lastname = getInputval('lastname');
 var email = getInputval('email');
 var country = getInputval('country');
 var subject = getInputval('subject');

 // Save message
 saveMessage(firstname, lastname, email, country, subject);


  // show alert
  document.querySelector('.alert').style.display = 'block';
  // Hide alert after 3 seconds
  setTimeout(function () {
   document.querySelector('.alert').style.display = 'none';
  }, 3000);

}

// function to get form values
function getInputval(id){
 return document.getElementById(id).value;
}

// save message to firebase
function saveMessage(firstname, lastname, email, country, subject){
 var newMessageRef = messageRef.push();
 newMessageRef.set({
  firstname: firstname,
  lastname:lastname,
  email:email,
  country:country,
  subject:subject,
 });
}