/* 
* -------------------------
*   CountAPI is a free counting service. You can 
*   use it to track page hits, and specific events 
*   among other things.
* -------------------------
*/
const countApiVisiteur = document.querySelector('#Visitor')
const counterVisiteur = async () => {
    const data = await fetch('https://api.countapi.xyz/hit/mysite.com/awesomeclick')
    const count = await data.json()
    countApiVisiteur.innerHTML = count.value - 145000
}
counterVisiteur()