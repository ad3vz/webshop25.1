import { products } from './database.js';

function load_product_card(){

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
                prodCol.className = 'col-12 col-sm-4 product-card-col';

                //picture
                const imgWrapper = document.createElement('div');
                imgWrapper.className = 'imgWrapper';
                const prodImg = document.createElement('img');
                prodImg.src = product.image;
                imgWrapper.appendChild(prodImg);
                prodCol.appendChild(imgWrapper);

                //buttons + counter
                const btnWrapper = document.createElement('div');
                btnWrapper.className = 'btnWrapper';

                const leftBtn = document.createElement('button');
                leftBtn.className = 'plusMinusButton';
                leftBtn.textContent = '+';
                
                const rightBtn = document.createElement('button');
                rightBtn.className = 'plusMinusButton';
                rightBtn.textContent = '-';

                const counter = document.createElement('input');
                counter.className = 'counter';
                counter.type = 'number';
                counter.placeholder = '1';

                //add to shopping cart button
                const addBtn = document.createElement('button');
                addBtn.className = 'addBtn';
                addBtn.textContent = 'add to Cart';
                

                
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

document.addEventListener("DOMContentLoaded",load_product_card);