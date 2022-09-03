// -----------------------------------------------------------------------------
// This file containsa all js of cart page
// -----------------------------------------------------------------------------

const increase = document.querySelector('.increase') 
const decrease = document.querySelector('.decrease') 
const counter = document.querySelector('.counter-result')

let count = 0;

increase.addEventListener('click', () => {
    count++
    if(count > 5 ) {
        count = 1
    }
    counter.value = count
})
decrease.addEventListener('click', () => {
    count--
    if(count < 1) {
        count = 1
    }
    counter.value = count
})  