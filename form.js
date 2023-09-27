alert("Are you ready!!!");
// const Name= document.getElementById('Name')  
// const email= document.getElementById('Email id')
// const phone= document.getElementById('Phone')
// const address= document.getElementById('Adress')  
// const errorElement=document.getElementById('error')

// myform.addEventListener('submit',(e) =>{
//     let messages = []
//     if(Name.value === '' || Name.value == null){
//         messages.push('name is required')
//     }
//     if (messages.length>0){
//         e.preventDefault()
//         errorElement.innerText=messages.join(', ')
//     }

// })
const myForm = document.getElementById('myForm');
const errorElement = document.getElementById('error');

myForm.addEventListener('submit', (e) => {
    let messages = [];
    const name = document.getElementById('fname').value.trim();
    if (name === '') {
        messages.push('Name is required');
    }    
    const email = document.getElementById('Email').value.trim();
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        messages.push('Invalid email format');
    }
    const phone = document.getElementById('Phone').value.trim();
    const phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone)) {
        messages.push('Invalid phone number (10 digits required)');
    }
    const address = document.getElementById('Address').value.trim();
    if (address === '') {
        messages.push('Address is required');
    }
    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join(', ');
    }
});


