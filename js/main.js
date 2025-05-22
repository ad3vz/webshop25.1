import { products } from './database.js';

function load_products(){
    const productsContainer = document.getElementById('product-container');
    if(!productsContainer){
        console.error("Element mit ID 'product-container' nicht gefunden.");
        return;
    }

    let currentProductIndex = 0;
    const productsPerRow = 3;

    while(currentProductIndex < products.length){
        const productRow = document.createElement('div');
        productRow.className='row cmb';

        for(let i = 0; i < productsPerRow; i++){
            if(currentProductIndex<products.length){
                const product = products[currentProductIndex];
                const plusButton = create_buttons('fa-plus');
                const minusButton = create_buttons('fa-minus');

                const productCol = document.createElement('div');
                productCol.className = 'col imageContainer';

                // Bildbereich
                const imgWrapper = document.createElement('div');
                imgWrapper.className = 'row';
                const imgCol = document.createElement('div');
                imgCol.className = 'col';
                const productImg = document.createElement('img');
                productImg.src = product.image;
                productImg.className = 'productPicture';
                imgCol.appendChild(productImg);
                imgWrapper.appendChild(imgCol);
                productCol.appendChild(imgWrapper);

               //Buttons
               const btnWrapper = document.createElement('div');
               btnWrapper.className = 'row';
               const leftBtn = document.createElement('div');
               leftBtn.className = 'col-6';
               leftBtn.appendChild(plusButton);
               const rightBtn = document.createElement('div');
               rightBtn.className = 'col-6';
               rightBtn.appendChild(minusButton);
               btnWrapper.appendChild(leftBtn);
               btnWrapper.appendChild(rightBtn);
               productCol.appendChild(btnWrapper);
               


                productRow.appendChild(productCol);
                
                currentProductIndex++;
            }
        }
        productsContainer.appendChild(productRow);
    }
}

function create_buttons(icon){
    const button = document.createElement('button');
    button.className = 'plusMinusButton';
    const i = document.createElement('i');
    i.className = `fa-solid ${icon}`;

    button.appendChild(i);
    return button;
}

document.addEventListener("DOMContentLoaded", load_products);