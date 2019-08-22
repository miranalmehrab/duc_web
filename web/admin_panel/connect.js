var message = document.getElementById("message_firebase");
    
function submitClick(){
    var firebaseRef = firebase.database().ref();
    
    
    
    firebaseRef.child("User").set("Pritom kumar");
    firebaseRef.child("Student").set("Miran Al Mehrab");
    firebaseRef.child("Text").set("Hello World!");
    firebaseRef.child("Outer Child").child("Inner Child").set("Hello World -1!");
    firebaseRef.child("Outer Child").child("Inner Child").push().set("Hello World 0!");
    firebaseRef.child("Outer Child").child("Inner Child").push().set("Hello World 1!");
    firebaseRef.child("Outer Child").child("Inner Child").push().set("Hello World 2!");
    firebaseRef.child("Outer Child").child("Inner Child").push().set("Hello World 3!");
    firebaseRef.child("Message").set("Hello from iit!");
    
    
    
    
    

}