// alert("form data");
document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting and reloading the page
    
    // Get form data
    const formData = new FormData(event.target);
    const formObject = {};
    
    formData.forEach((key,value) => {
        formObject[value] = key;
    });     

    // Display the form data in the console
    console.log(formObject);
});
