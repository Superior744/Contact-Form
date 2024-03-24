/*function my_function(){

     

    alert("Successfully Submitted\nThank you")
        
}*/

  function my_function() {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the form elements
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var address = document.getElementById("address").value.trim();
    var comment-type = document.getElementById("comment-type").value;
    var message = document.getElementById("message").value.trim();

    // Check if any of the required fields are empty
    if (name === "" || email === "" || message === "" || address==="" || comment-type ==="") {
      alert("Please fill out all required fields (Name, Email, Address, Type of Comment, Message)");
      return; // Stop further execution of the function
    }

    // If all required fields are filled out, display the message
    alert("Successfully Submitted\nThank you");
    
    // Optionally, you can submit the form here if needed
    // document.getElementById("contact-form").submit();
  }
