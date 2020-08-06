$(document).ready(function(){
    
    $.get('https://json-project3.herokuapp.com/products')
    .then(function(data){
        console.log(data)
        for(let i=0; i < data.length; i++){
        $('.cardContainer').append(
            `<div class="card col-md-3 col-md-offset-1 thumbnail">
                <img src="img/${data[i].image}.png">
                <div class="cardDivOrange caption ">
                    <h5>${data[i].name}</h5>
                    <p>${data[i].price} $</p>
                </div>
            </div>` 
        )}
        
       
        let male = 0;
        for(let i = 0; i < data.length; ++i){
            if(data[i].gender == "MALE")
            male++;
            $('#male').text(male)
        }
        let female = 0;
        for(let i = 0; i < data.length; ++i){
            if(data[i].gender == "FEMALE")
            female++;
            $('#female').text(female)
        }
        let all = 0;
        for(let i = 0; i < data.length; ++i){
            all++;
            $('#all').text(all)
        }
        
        let brands = []
        for(let i=0; i<data.length; i++){
            brands.push(`${data[i].brand}`);
        }
      
        let countedBrands = brands.reduce(function (allBrands, brand) { 
            if (brand in allBrands) {
              allBrands[brand]++;
            }
            else {
                allBrands[brand] = 1;
            }
            return allBrands;
          }, {});
        
        console.log(countedBrands)
       
        $.each( countedBrands, function( key, value ){
            let key1 = key.replace(/ /g,'');
            $('#brand').append(
                `<div>
                    <button id="${key1}Btn">${key}</button>
                    <span class="pull-right badge">${value}</span>
                </div>`
            )
            $(`#${key1}Btn`).on('click', function(){
                $('.cardContainer').html('')
                for(let i = 0; i< data.length; ++i){
                    if(data[i].brand == `${key}`){
                        $('.cardContainer').append(
                            `<div class="card col-md-3 col-md-offset-1 thumbnail">
                                <img src="img/${data[i].image}.png">
                                <div class="cardDivOrange caption ">
                                    <h5>${data[i].name}</h5>
                                    <p>${data[i].price} $</p>
                                </div>
                            </div>` 
                        )
                    }
                }
                
            })
            console.log(`#${key1}Btn`)
        })
       
        $('#showAll').on('click', function(){
            $('.cardContainer').html('')
            for(let i = 0; i< data.length; i++){
                
                    $('.cardContainer').append(
                        `<div class="card col-md-3 col-md-offset-1 thumbnail">
                                <img src="img/${data[i].image}.png">
                                <div class="cardDivOrange caption ">
                                    <h5>${data[i].name}</h5>
                                    <p>${data[i].price} $</p>
                                </div>
                        </div>`  
                    )
                
            }
            

        })
        $('#maleBtn').on('click', function(){
            $('.cardContainer').html('')
            for(let i = 0; i< data.length; i++){
                if(data[i].gender == "MALE"){
                    $('.cardContainer').append(
                        `<div class="card col-md-3 col-md-offset-1 thumbnail">
                            <img src="img/${data[i].image}.png">
                            <div class="cardDivOrange caption ">
                                <h5>${data[i].name}</h5>
                                <p>${data[i].price} $</p>
                            </div>
                        </div>`  
                    )
                }
            }
            

        })
        $('#femaleBtn').on('click', function(){
            $('.cardContainer').html('')
            for(let i = 0; i< data.length; i++){
                if(data[i].gender == "FEMALE"){
                    $('.cardContainer').append(
                        `<div class="card col-md-3 col-md-offset-1 thumbnail">
                            <img src="img/${data[i].image}.png">
                            <div class="cardDivOrange caption ">
                                <h5>${data[i].name}</h5>
                                <p>${data[i].price} $</p>
                            </div>
                        </div>` 
                    )
                }
            }
            

        })
      
        
       
    })
})