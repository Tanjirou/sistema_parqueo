const init = document.querySelector('#init');
const alertStyle = document.querySelector('#alert');
const userAlert = document.querySelector('#userAlert');
const loginModal = document.querySelector('#loginModal');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
function alertRemove(alertStyle,userAlert){
  alertStyle.classList.remove('alert','alert-success', 'alert-danger');
  userAlert.innerHTML = '';
}
function login(){
  let errorMessage ='';
    const urlLogin = '../../../../sistema_parqueo/app/controllers/LoginController.php';
    const formData = new FormData();
    if(email.value === '' || email.value === null) {
      errorMessage = '. El correo es obligatorio. <br>';
      email.focus();
    }
    if(password.value === '' || password === null){
      errorMessage += '. La contraseña es obligatoria.';
      if(email.value !== '' && email.value !== null){
        password.focus();
      }
    }
    if(email.value === '' || email.value === null || password === null || password.value === ''){
      alertStyle.classList.add('alert','alert-danger');
      userAlert.innerHTML = errorMessage;
    }else{
      formData.append('email',email.value);
      formData.append('password',password.value);
      fetch(urlLogin,{
          method: 'POST',
          body: formData
      }).then(response => response.json())
        .then(data => {
          alertRemove(alertStyle,userAlert);
          alertStyle.classList.add('alert',data.class);
          userAlert.textContent = data.userAlert;
          if(data.generic !== null){
            password.value = '';
            password.focus();
          }else{
            location.href = 'main.file.php';
          }
        })
        .catch(error=> {alert(`Error ${error}`);});
    }
}

function checkKeyPress(e){
  if(e.which == 13){
    login();
  }
}

init.addEventListener('click', () => login());
password.addEventListener('keypress', checkKeyPress);
email.addEventListener('keypress', checkKeyPress);

loginModal.addEventListener('hidden.bs.modal', (event) => {
  // Remove error message when modal closes
  alertRemove(alertStyle,userAlert);
});


