let addItemId = 0;
function addToCart (item) { 
  // document.querySelector('.shopping-bag-number').innerText = ++addItemId;
  
  
  /*nese i kemi 100 produkte ne shopping cart atehere na shfaqet +99*/
  if(addItemId > 99)
    document.querySelector('.shopping-bag .shopping-bag-number').innerText = '+99';
    

     let selectedItem = document.createElement('div');
      selectedItem.classList.add('cartImg');
       selectedItem.setAttribute('id', addItemId);
        let img = document.createElement('img');
         img.setAttribute('src', item.children[0].currentSrc);
          let title = document.createElement('h3');
           title.innerText = item.children [2] .innerText;
            let label = document.createElement ('div');
            let price = document.createElement('h1');
            price.innerText = item.children [3] .innerText;
            let delBtn = document.createElement('button');
            delBtn.innerText = 'Delete';
                delBtn.setAttribute('onclick', 'del ('+addItemId+')');
                 let cartItems = document.getElementById('title');
                  selectedItem.append(img);
                   selectedItem.append(title); 
                   selectedItem.append(price);
                   selectedItem.append(delBtn);
                     cartItems.append(selectedItem);

                    }
                    
                    function del(item){
                      document.getElementById(item).remove();
                      document.querySelector('.shopping-bag-number').innerText = --addItemId; 
                      
                      /*nese i kemi 100 produkte ne shopping cart atehere na shfaqet +99*/
                      
                      if(addItemId > 99)
                        document.querySelector('.shopping-bag .shopping-bag-number').innerText = '+99';
                      
                      
                    }

