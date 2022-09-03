// -----------------------------------------------------------------------------
// This file containsaccordian js of webpages
// -----------------------------------------------------------------------------

/*
* -------------------------
*   Accordion 
* -------------------------
*/
const accordionContent = document.querySelectorAll('.accordion-content')
accordionContent.forEach((item, index) => {
    let accordionHeader = item.querySelector('.accordian-header')
    accordionHeader.addEventListener('click', () => {
        item.classList.toggle('open-accordion')
    
        let accordionDescription = item.querySelector('.accordian-description')
        if(item.classList.contains('open-accordion')) {
            accordionDescription.style.height = `${accordionDescription.scrollHeight}px`
            item.querySelector('i').classList.replace('fa-plus', 'fa-minus')
        }
        else {
            accordionDescription.style.height = '0px'
            item.querySelector('i').classList.replace('fa-minus', 'fa-plus')
    
        }
        removeOpenAccordion(index)
    })
})
function removeOpenAccordion(index1) {
    accordionContent.forEach((item2 , index2) => {
        if(index1 != index2) {
            item2.classList.remove('open-accordion')

            let des = item2.querySelector(".accordian-description")
            des.style.height = '0px'
            item2.querySelector('i').classList.replace('fa-minus', 'fa-plus')
        }
    })
}