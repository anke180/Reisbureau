// console.log('Hallo wereld');

// const titelnew = document.querySelector('#titel');

// const waarschuwing = () => {  
//     // titelnew.className = 'waarschuwing';
//     // titelnew.alt = 'waarschuwing';
//     console.log(titel.textContent);
//     titelnew.textContent = 'Pas op, je hebt de titel veranderd!';
//     console.log(titel.textContent);
// }


// const popUpNotification = (message, prio) => {
//     const notification = document.createElement('div');
//     const titel = document.createElement('h2');
//     notification.classList.add('notificaion');
//     notification.classList.add(prio);
//     titel.innerHTML = message;
//     notification.appendChild(titel);
//     document.body.appendChild(notification);
// }

// const voorbeeldAanroep = () => {
//     popUpNotification('This is a notification', 'info');
// }

const filter = () => { 
    const newList =[];
    const isZwembad = document.querySelector('#isZwembad').checked;
    const isAirco = document.querySelector('#isAirco').checked;
    const isWasmachine = document.querySelector('#isWasmachine').checked;
    const isStrand = document.querySelector('#isStrand').checked;
    const isSpa = document.querySelector('#isSpa').checked;
    const isSportPlaats = document.querySelector('#isSportPlaats').checked;
    const isBars = document.querySelector('#isBars').checked;
    const isInternet = document.querySelector('#isInternet').checked;
    const isRestaurant = document.querySelector('#isRestaurant').checked;
    
   

    const allProducts = document.querySelectorAll('.vakantie-balk');
    
   
    console.log(isZwembad);
    allProducts.forEach(product =>{

        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('Zwembad') && isZwembad == true){
            newList.push(product);
        }
         
        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('airco') && isAirco == true){
            newList.push(product);
        }

        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('wasmachine') && isWasmachine == true){
            newList.push(product);
        }

        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('strand') && isStrand == true){
            newList.push(product);
        }

        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('spa') && isSpa == true){
            newList.push(product);
        }

        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('sport-plaats') && isSportPlaats == true){
            newList.push(product);
        }
    
        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('bars') && isBars == true){
            newList.push(product);
        }

        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('internet') && isInternet == true){
            newList.push(product);
        }

        console.log(product.childNodes[1].textContent);
        if (product.childNodes[1].textContent.includes('restaurant') && isRestaurant == true){
            newList.push(product);
        }

       
       
    })

    document.querySelector("#product_results").innerHTML = "";
    newList.forEach(product =>{
        document.querySelector('#product_results').appendChild(product);
    })
console.log(newList);


const popUpNotification = (message, prio) => {
    const notification = document.createElement('div');
    const title = document.createElement('h2');
    notification.classList.add('notification');
    notification.classList.add(prio);
    title.innerHTML = message;
    notification.appendChild(notification);
}

const voorbeeldAanroep = () => {
    popUpNotification('This is a notification', 'info')
}}