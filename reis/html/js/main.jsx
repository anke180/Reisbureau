

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

    const allProducts = document.querySelectorAll('.products');
    
   
    console.log(isZwembad);
    allProducts.forEach(product =>{

        if (product.innerHTML.includes('zwembad')&& isZwembad == true)
            console.log('hij is hier')
            newList.push(product);

        if (product.innerHTML.includes('airco')&& isAirco == true)
            console.log('hij is hier airco')
            newList.push(product);
        
        if (product.innerHTML.includes('wasmachine')&& isWasmachine == true)
            console.log('hij is hier wasmachine')
            newList.push(product);
       
    })

    document.querySelector("#product_results").innerHTML = "" ;
    newList.forEach(product =>{
        document.querySelector('#product_results').appendChild(product);
    })
console.log(newList);
}