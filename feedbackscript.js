function submitForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let feedbackType = document.getElementById("feedbackType").value;
    let comments = document.getElementById("comments").value;

    
    if (name === "" || email === "" || feedbackType === "" || comments === "") {
        alert("Please fill out all required fields.");
    } else {
        
        alert("Feedback submitted successfully!");
        document.getElementById("feedbackForm").reset(); 
    }
}