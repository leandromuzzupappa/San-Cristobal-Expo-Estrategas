// $('#sendUserData').click(()=>{
//     event.preventDefault();

//     location.href = 'gracias.php';
// })

$('#volver').click(()=>{
    location.href = 'index.php';
})

function handleAnimation() {

    var getItemsLength = $('#itemsContainer .item').length;
    var getItemsWidth = $('#itemsContainer .item').width();
    var getItemsContainer = $('#itemsContainer');

    // SSet css to items container
    getItemsContainer.css({
        width: (getItemsLength*getItemsWidth)+'px',
    });



    /*
    getItemsContainer.css({
        width: (getItemsLength*getItemsWidth)+'px',
        animationName: 'spin',
        animationDuration: '.5s',
        animationIterationCount: 'infinite',
        animationTimingFunction: 'linear',
    });

    setTimeout(() => {
        getItemsContainer.css({
            animationDuration: '0s',
            animationIterationCount: '1',
        });
    }, 2000);
    */


    
}

handleAnimation();