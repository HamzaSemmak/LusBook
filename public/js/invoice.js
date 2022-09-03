// -----------------------------------------------------------------------------
// This file containsaccordian js of webpages
// -----------------------------------------------------------------------------
  
const generateInvoice = document.querySelector('.print-invoice');

generateInvoice.addEventListener('click', () => {
    generateInvoice.style.display = 'none';
    setTimeout(() => {
        window.print()
    }, 1000);
})
