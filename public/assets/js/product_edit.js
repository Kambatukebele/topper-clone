//SHow and Hide session
const showHideSession = () => {
    const hideSession = document.getElementById('show_my_session');
   if(hideSession !== null){
        setTimeout(() =>{
            hideSession.style.display = "none";
        }, 3000);
   }
}

showHideSession();