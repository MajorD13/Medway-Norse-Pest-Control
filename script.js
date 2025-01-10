// Select elements
const rejectBtn = document.querySelector('.rejectButton');
const acceptBtn = document.querySelector('.consentButton'); // Match the HTML class name
const consentBox = document.getElementById('consentBox');

// Add event listener for the reject button
rejectBtn.onclick = () => {
    alert("Cookies rejected. Some functionality may be limited.");
    consentBox.classList.add("hide");
};

// Add event listener for the accept button
acceptBtn.onclick = () => {
    document.cookie = "CookieBy=Medway-Norse; path=/; max-age=31536000"; // Set cookie for 1 year
   // alert("Cookies accepted. Thank you!");
    consentBox.classList.add("hide");
};

// Check if the cookie exists and show/hide the consent box accordingly
let checkCookie = document.cookie.indexOf("CookieBy=Medway-Norse");
checkCookie !== -1 ? consentBox.classList.add("hide") : consentBox.classList.remove("hide");



// Function to toggle navigation
function toggleNav() {
    const nav = document.getElementById('norse-nav');
    nav.classList.toggle('active');
}

// Update the current year in the footer
let date = new Date().getFullYear();
document.getElementById("currentYear").textContent = date;