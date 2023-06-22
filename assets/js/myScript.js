const myUrlForm = document.getElementById("myUrlForm");
const formUrl = document.getElementById("formUrl");

myUrlForm.addEventListener("submit", (event) => {
    const data = formUrl.value;

    const bitLength = data.length * 8;

    if(bitLength > 368){
        event.preventDefault();
        alert("Code length overflow. Maximum allowed length is 368 bits.");
    }
});