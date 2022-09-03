// -----------------------------------------------------------------------------
//      This file contains all code js of Sidebar Search advanced
// -----------------------------------------------------------------------------
/* 
* -------------------------
*   Search sidebar 
* -------------------------
*/
const sidebar = document.querySelector('.sidebar')
const openSidebar = document.querySelector('.open-sidebar')
const hideSidebar = document.querySelector('.hide-sidebar')
openSidebar.addEventListener('click', () => {
    sidebar.classList.add('sidebar-show')
    sidebar.classList.remove('sidebar-hide')
})
hideSidebar.addEventListener('click', () => {
    sidebar.classList.remove('sidebar-show')
    sidebar.classList.add('sidebar-hide')
})
/* 
* -------------------------
*   range value for price  
* -------------------------
*/
const rangeValueMin = document.querySelector('.rangeValueMin')
const rangeValueMax = document.querySelector('.rangeValueMax')
var rangeValueMinValue = function(){
    var newValue = rangeValueMin.value
    var target = document.querySelector('.rangeValueMinValue')
    target.value = newValue
}
var rangeValueManValue = function(){
    var newValue = rangeValueMax.value
    var target = document.querySelector('.rangeValueManValue')
    target.value = newValue
}
rangeValueMin.addEventListener("input", rangeValueMinValue)
rangeValueMax.addEventListener("input", rangeValueManValue)
/* 
* -------------------------
*   DropdownList 
* -------------------------
*/
const showDropdownContent = (params) => {
    const Dropds = document.querySelector('.Dropds')
    Dropds.value = params
    setTimeout(() => {
        window.open(`${params}`, '_blank');
    }, 1000);
}

let dropdownList = document.querySelector('.dropdown-list')
dropdownList.addEventListener('click', () => {
    dropdownList.classList.toggle('Show-dropdown-list')
})