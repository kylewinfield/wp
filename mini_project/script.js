

// stores/removes order form data in localStorage when remember me is checked/unchecked
function rememberMe(){
  
 if(document.getElementById('remember').checked == true){
    localStorage.setItem('remember', 'true');
    localStorage.setItem('name', document.getElementById('name').value);
    localStorage.setItem('email', document.getElementById('email').value);
    localStorage.setItem('mobile', document.getElementById('mobile').value);
    localStorage.setItem('address', document.getElementById('address').value);
    
}
  else{
    localStorage.removeItem('remember');
    localStorage.removeItem('name');
    localStorage.removeItem('email');
    localStorage.removeItem('mobile');
    localStorage.removeItem('address');
    
  }
}

// fills the fields when page is loaded
function fillFields(){
  if (localStorage.getItem('remember') == 'true') {
    document.getElementById('name').value = localStorage.getItem('name');
    document.getElementById('email').value = localStorage.getItem('email');
    document.getElementById('mobile').value = localStorage.getItem('mobile');
    document.getElementById('address').value = localStorage.getItem('address');
    document.getElementById('remember').checked = true;
  } 
  else{
    document.getElementById('remember').checked = false;
  }
}


//toggles visibility of login forms
function toggleLogin() {
  var login = document.getElementById("loginToggle");

if (login.style.display != "none"){
  login.style.display = "none";
}
else{
  login.style.display = "block";
}
}
