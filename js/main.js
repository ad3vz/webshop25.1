function load_product_card(products){

    //products container
    const prodContainer = document.getElementById('product-container');

    let productIndex = 0;
    const productsPerRow = 3;

    while(productIndex < products.length){
        const prodRow = document.createElement('div');
        prodRow.className = 'row';

        for(let i = 0; i < productsPerRow; i ++){
            if(productIndex < products.length){
                const product = products[productIndex];

                //col for ONE product
                const prodCol = document.createElement('div');
                prodCol.className = 'col-12 col-sm-6 col-md-4 product-card-col';

                //picture
                const imgWrapper = document.createElement('div');
                imgWrapper.className = 'imgWrapper';
                const prodImg = document.createElement('img');
                prodImg.src = product.imagepath;
                imgWrapper.appendChild(prodImg);
                prodCol.appendChild(imgWrapper);

                //buttons + counter
                const btnWrapper = document.createElement('div');
                btnWrapper.className = 'btnWrapper';

                const leftBtn = document.createElement('button');
                leftBtn.className = 'plusMinusButton';
                leftBtn.textContent = '+';
                console.log(leftBtn.id);

                leftBtn.addEventListener('click', () => {
                    counter.value = parseInt(counter.value) + 1;
                });
                
                const rightBtn = document.createElement('button');
                rightBtn.className = 'plusMinusButton';
                rightBtn.textContent = '-';

                rightBtn.addEventListener('click', ()=> {
                    if(parseInt(counter.value) > 1){
                        counter.value = parseInt(counter.value) - 1;
                    }
                })

                const counter = document.createElement('input');
                counter.type = 'number';
                counter.className = 'counter';
                counter.value = 1;
                counter.min = 1;
                

                //add to shopping cart button
                const addBtn = document.createElement('button');
                addBtn.className = 'addBtn';
                addBtn.textContent = 'add to Cart';

                //Event-Listener um 
                // addBtn.addEventListener('click', ()=> {

                // })
                
                btnWrapper.appendChild(leftBtn);
                btnWrapper.appendChild(rightBtn);
                btnWrapper.appendChild(counter);

                prodCol.appendChild(btnWrapper);
                prodCol.appendChild(addBtn);


                prodRow.appendChild(prodCol);

                productIndex ++;
            }
        }
        prodContainer.appendChild(prodRow);
    }
}

document.addEventListener("DOMContentLoaded", ()=>{
    fetch('/webshop25.1/php/getProducts.php')
    .then(response => response.json())
    .then(products => load_product_card(products));
});