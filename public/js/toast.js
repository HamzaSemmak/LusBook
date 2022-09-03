// -----------------------------------------------------------------------------
// This file contains all code js of toast-Popupalert(Error , success)
// -----------------------------------------------------------------------------

/* 
* -------------------------
*   PoppAlert : toast 
* -------------------------
*/
const toast = document.querySelector('.toast')
const closeAlertPopup = document.querySelector('.closeAlertPopup')
closeAlertPopup.addEventListener('click', () => {
    toast.style.display = 'none';
})
setTimeout(() => {
    toast.style.display = 'none';
}, 6000);
